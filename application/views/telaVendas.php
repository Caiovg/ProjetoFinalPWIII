<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo base_url("assets/imagens/logo_80px.png") ?>" type="image/x-png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/node_modules/bootstrap/dist/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/modal.css'); ?>" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Vendas</title>
</head>
<body>
    <nav class="fixed-top">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Controller</label>
        <ul>
            <li><a href="<?php echo base_url("index.php/Welcome/telaClientes"); ?>">Clientes</a></li>
            <li><a href="<?php echo base_url("index.php/Welcome/telaProdutos"); ?>">Produtos</a></li>
            <li><a class="active" href="<?php echo base_url("index.php/Welcome/telaVendas"); ?>">Vendas</a></li>
            <li><a href="<?php echo base_url("index.php/Welcome/telaRelatorios"); ?>">Relatorios</a></li>
        </ul>
    </nav>
    <br><br><br>
    
    <div class="text-center my-auto cor">
        <h1 class="estilo">VENDAS</h1>
    </div>

    <div class="container">
        <br>
        <div class="col-md-7">
            <form class="input-group" action="<?php echo base_url("index.php/Welcome/pesquisarProdutosvenda")?>" method="post">
                <input name="pesquisar" class="form-control" id="pesquisar" type="text" placeholder="Pesquisar Produtos">      
                <button class="btn btn-primary" type="submit" style="position: relative; left: 8px;">Pesquisar</button>
            </form>
        </div>
        <br>
        <div class="row justify-content-center">
            <?php foreach ($produto as $produtos) : ?>
                <div class="col-md-4">
                    <div class="card mb-2 shadow-sm">
                        <img class="imagens1" src="<?php echo base_url("assets/imagens/produtos/" . $produtos['foto_Produto']) ?>" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $produtos['nome_Produto']?></h5>
                            <p class="card-text"><?php echo $produtos['descricao_Produto']?></p>
                            
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="card-title" style="float: right;">Preco: <?php echo reais($produtos['preco_Produto']) ?></p>
                                <small class="text-muted" style="float: left;">Quantidade: <?php echo $produtos['quantidade']?></small>
                            </div>
                            <button class="btn btn-danger" type="button"
                                data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $produtos['cod_Produto']?>"
                                data-whatevernome="<?php echo $produtos['nome_Produto'] ?>" data-whateverdescricao="<?php echo $produtos['descricao_Produto'] ?>"
                                data-whateverquantidade="<?php echo $produtos['quantidade'] ?>"
                                data-whateverpreco="<?php echo $produtos['preco_Produto'] ?>" data-url="/ProjetoFinalPWIII/assets/imagens/produtos/<?php echo $produtos['foto_Produto'] ?>">Vender 
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <br><br>
    </div>

    <!--inicio modal-->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <h4 style="position: relative; left: 41.9%;">Editar</h4>
                </div>
                <div class="modal-body">
                <div class="text-center">
                <img class="imagens1 imagensmodal" src="/ProjetoFinalPWIII/assets/imagens/produtos/d667a4a30ed7d3a4971777e3ce4d6715.png" id="foto" border="0">
                </div>
                    <form action="<?php echo base_url("index.php/Vendas/validarcamposvenda");?>" method="POST" id="Vendas">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label class="nomeitem">Nome</label>
                                <input type="text" readonly="true" class="form-control" autocomplete="off" name="nomeProduto" id="nomeProduto">
                            </div>
                            <div class="form-group col-12">
                                <label class="desc">Descrição</label>
                                <textarea type="text" readonly="true" class="form-control" name="descricao" id="descricao" rows="3"></textarea>
                            </div>
                            <div class="form-group col-4">
                                <label class="preco">Quantidade</label>
                                <input type="number" class="form-control" name="quantidade" id="quantidade" autocomplete="off" value="0" min="0"/>
                            </div>
                            <div class="form-group col-4">
                                <label class="preco">Preço</label>
                                <input type="text" class="form-control" name="preco" id="preco" onblur="calcular()"/>
                            </div>
                            <div class="form-group col-4">
                                <label class="preco">Preço Final</label>
                                <input type="text" class="form-control" name="precofinal" id="precofinal">
                            </div>
                            <p>Se for vender para cliente já cadastrado basta selecionalo abaixo.</p>
                            <br>
                            <div class="form-group col-6">
                                <label for="SelecionarCargo">Selecionar Cliente</label>
                                <select class="form-control" id="selecionarcliente" name="selecionarcliente">
                                    <option></option>
                                    <?php foreach ($cliente as $clientes) : ?>
                                    <option><?php echo $clientes['cod_cliente']?> - <?php echo $clientes['nome_cliente']?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <input type="hidden" id="id" name="id">  
                        </div>
                        </div>
                         <div class="modal-footer flex-center">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal" onblur="re()" style="position: static;">Cancelar</button>
                            <input  type="submit" class="btn btn-primary btn-lg" style="position: static;" value="Vender">
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>

    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.mask.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/javascript/validar.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>
    <script type="text/javascript">
        $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var recipientnome = button.data('whatevernome')
        var recipientdescricao = button.data('whateverdescricao')
        var recipientquantidade = button.data('whateverquantidade')
        var recipientpreco = button.data('whateverpreco')
        var recipientfoto = button.data('whateverfoto')
        var imagem = $(event.relatedTarget).data('url');
            $("#foto").attr('src', imagem);
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('#id').val(recipient)
        modal.find('#nomeProduto').val(recipientnome)
        modal.find('#descricao').val(recipientdescricao)
        modal.find('#quantidadeobtida').val(recipientquantidade)
        modal.find('#preco').val(recipientpreco)
        modal.find('#foto').val(recipientfoto)
        })
    </script>
    <script type="text/javascript">
        function calcular(){
            var valor1 = parseInt(document.getElementById('quantidade').value, 10);
            var valor2 = parseInt(document.getElementById('preco').value, 10);
            document.getElementById('precofinal').value = valor1 * valor2;
        }
    </script>
    <script type="text/javascript">
        function re(){
            location.reload();
        }
    </script>
</body>
</html>