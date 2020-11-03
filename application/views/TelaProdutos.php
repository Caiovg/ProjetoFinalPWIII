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
    <title>Produtos</title>
    <script>
        $(document).ready(function() {
            $('#preco').mask('#.##0,00', {reverse: true})
        });
    </script>
</head>
<body>
    <nav class="fixed-top">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Controller</label>
        <ul>
            <li><a href="<?php echo base_url("index.php/Welcome/index"); ?>">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a class="active" href="#">Produtos</a></li>
            <li><a href="#">Vendas</a></li>
            <li><a href="#">Feedback</a></li>
        </ul>
    </nav>
    <br><br><br>
    
    <div class="text-center my-auto cor">
        <h1 class="estilo">PRODUTOS</h1>
    </div>

    <div class="container">
        <br>
        <div class="col-md-7">
            <form class="input-group" action="">
                <input name="pesquisar" class="form-control" id="pesquisar" type="text" placeholder="Pesquisar Produtos">      
                <button class="btn btn-primary" type="submit" style="position: relative; left: 8px;">Pesquisar</button>
                <a href="<?php echo base_url('index.php/Welcome/telaCadastroProdutos')?>" class="btn btn-danger" style="position: relative; left: 20px;">Adicionar</a>
            </form>
        </div>
        <br>
        <div class="row justify-content-center">
            <?php foreach ($produto as $produtos) : ?>
                <div class="col-md-4">
                    <div class="card mb-2 shadow-sm">
                        <img class="card-img-top imagens" src="<?php echo base_url("assets/imagens/produtos/" . $produtos['foto_Produto']) ?>" alt="Card image cap">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?php echo $produtos['nome_Produto']?></h5>
                            <p class="card-text"><?php echo $produtos['descricao_Produto']?></p>
                            
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="card-title" style="float: right;">Preco: <?php echo reais($produtos['preco_Produto']) ?></p>
                                <small class="text-muted" style="float: left;">Quantidade: <?php echo $produtos['quantidade']?></small>
                            </div>
                            <button class="btn btn-primary" type="button"
                                data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $produtos['cod_Produto']?>"
                                data-whatevernome="<?php echo $produtos['nome_Produto'] ?>" data-whateverdescricao="<?php echo $produtos['descricao_Produto'] ?>"
                                data-whateverquantidade="<?php echo $produtos['quantidade'] ?>"
                                data-whateverpreco="<?php echo reais($produtos['preco_Produto']) ?>" data-whateverfoto="<?php echo $produtos['foto_Produto'] ?>">Editar 
                            </button>
                            <button class="btn btn-primary" type="button"
                                data-toggle="modal" data-target="#ExemploModalCentralizado"
                                data-whateverid="<?php echo $produtos['cod_Produto']?>">Excluir
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

     <!--inicio modal-->
     <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <h4 style="position: relative; left: 41.9%;">Editar</h4>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url("index.php/Produtos/validarUpdateProdutos");?>" method="POST" id="UpdateProdutos" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label class="nomeitem">Nome</label>
                                <input type="text" class="form-control" autocomplete="off" name="nomeProduto" id="nomeProduto">
                            </div>
                            <div class="form-group col-12">
                                <label class="desc">Descrição</label>
                                <textarea type="text" class="form-control" name="descricao" id="descricao" rows="3"></textarea>
                            </div>
                            <div class="form-group col-4">
                                <label class="preco">Quantidade</label>
                                <input type="text" class="form-control" name="quantidade" id="quantidade">
                            </div>
                            <div class="form-group col-4">
                                <label class="preco">Preço</label>
                                <input type="text" class="form-control" name="preco" id="preco">
                            </div>
                            <div class="form-group col-12">
                                <label class="foto">Adicionar foto</label>
                                <input type="file" class="form-control" name="alterarFoto" id="alterarFoto">
                            </div>
                            <input type="hidden" id="id" name="id">      
                        </div>
                        </div>
                         <div class="modal-footer flex-center">
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal" style="position: static;">Cancelar</button>
                            <input  type="submit" class="btn btn-primary btn-lg" style="position: static;" value="Salvar">
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </div>
    <!--fim do modal-->

    <!-- Modal Excluir-->
    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h2 class="modal-title" id="TituloModalCentralizado" style="position: relative; left: 40%;">Excluir</h2>
                </div>
                <div class="modal-body">
                    <h6>Tem certeza de que deseja excluir o item selecionado?</h6>
                    <form action="<?php echo base_url("index.php/Itens/excluirItem");?>" method="POST" id="ExcluirItens">
                    <input type="hidden" id="id" name="id">
                </div>
                <div class="modal-footer bg-white">
                    <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger btn-lg">Apagar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.mask.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
    <script type="text/javascript">
        $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var recipientnome = button.data('whatevernome')
        var recipientdescricao = button.data('whateverdescricao')
        var recipientquantidade = button.data('whateverquantidade')
        var recipientpreco = button.data('whateverpreco')
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('#id').val(recipient)
        modal.find('#nomeProduto').val(recipientnome)
        modal.find('#descricao').val(recipientdescricao)
        modal.find('#quantidade').val(recipientquantidade)
        modal.find('#preco').val(recipientpreco)
        })
    </script>
    <script type="text/javascript">
        $('#ExemploModalCentralizado').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('whateverid')
        var modal = $(this)
        modal.find('#id').val(recipient)
        })
    </script>
</body>
</html>