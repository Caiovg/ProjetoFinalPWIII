<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo base_url("assets/imagens/logo_80px.png") ?>" type="image/x-png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/node_modules/bootstrap/dist/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Cadastrar Produtos</title>
    <script>
        $(document).ready(function() {
            $('#preco').mask('#.##0,00', {reverse: true})
        });
        $(document).ready(function() {
            $('#PRECO').mask('#.##0,00', {reverse: true})
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
            <li><a href="<?php echo base_url("index.php/Welcome/telaClientes"); ?>">Clientes</a></li>
            <li><a class="active" href="<?php echo base_url("index.php/Welcome/telaProdutos"); ?>">Produtos</a></li>
            <li><a href="<?php echo base_url("index.php/Welcome/telaVendas"); ?>">Vendas</a></li>
            <li><a href="<?php echo base_url("index.php/Welcome/telaRelatorios"); ?>">Relatorios</a></li>
        </ul>
    </nav>
    <br><br><br><br>
    <div class="container">
    <br>
        <div class="caixaCadastro d-none d-md-block">
            <br>
            <h2 class="text-center titulo font-weight-bold">Cadastrar Item</h2>
            <br>
            <div class="col-lg-9 text-center mr-auto ml-auto font-weight-bold">
                <form action="<?php echo base_url("index.php/Produtos/validarCadastroProdutos");?>" method="POST" id="CadastroProduto" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="bold" for="nomeItem">Nome do Item</label>
                        <input type="text" class="form-control" autocomplete="off" id="nomeProduto" name="nomeProduto">
                    </div>
                    <div class="form-group">
                        <label class="bold" for="descricao">Descrição</label>
                        <textarea type="text" class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="col-lg">
                            <label for="preco">Preço</label>
                            <input type="text" class="form-control" id="preco" name="preco">
                        </div>
                        <div class="col-lg">
                            <label for="preco">Quantidade</label>
                            <input type="text" class="form-control" id="quantidade" name="quantidade">
                        </div>
                    </div>
                    <br>
                    <input type="hidden" class="form-control" id="Id" name="id" value="id">
                    <div class="form-group">
                        <label for="addFoto">Adicionar foto</label>
                        <input type="file" class="form-control" id="addFoto" name="addFoto">
                    </div>
                    <div class="form-row">
                        <div class="" style="position: relative; left: 280px; top: 21px;">
                            <input type="submit" class="btn btn-danger btn-lg btnCadastrar" value="Cadastrar">
                        </div>
                        <div class="text-white" style="position: relative; left: 325px; top: 5px;">
                            <a class="btn btn-lg  btn-danger mx-auto d-block mt-3" href="<?php echo base_url('index.php/Welcome/telaProdutos');?>">Voltar</a></button>
                        </div>                       
                    </div>
                </form>
            </div>
        </div>
        <!--Responsivo-->
        <div class="d-md-none d-sm-block">
            <div class="caixaCadastroP mt-4 font-weight-bold">
                <h2 class="text-center titulo">Cadastro</h2>
                <form class="form-row mt-2" action="<?php echo base_url("index.php/Produtos/validarCadastroProdutosresponsivo"); ?>" method="POST" id="CadastroProdutosresponsivo">
                    <div class="form-group mx-auto col-12">
                        <label class="bold" for="nomeProduto">Nome do Item</label>
                        <input type="text" class="form-control" autocomplete="off" id="nomeProduto" name="nomeProduto">
                    </div>
                    <div class="form-group mx-auto col-12">
                        <label class="bold" for="descricao">Descrição</label>
                        <textarea type="text" class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                    </div>
                    <div class="form-group mx-auto col-12">
                        <label for="preco">Preço</label>
                        <input type="text" class="form-control" id="PRECO" name="PRECO">
                    </div>
                    <div class="form-group mx-auto col-12">
                        <label for="quantidade">Quantidade</label>
                        <input type="text" class="form-control" id="quantidade" name="quantidade">
                    </div>
                    <input type="hidden" class="form-control" id="Id" name="id" value="id">
                    <div class="form-group col-12">
                        <label for="addFoto">Adicionar foto</label>
                        <input type="file" class="form-control" id="addFoto" name="addFoto">
                    </div>
                    <button type="submit" class="btn btn-lg mt-3 btn-danger text-white rounded mx-auto d-block">Cadastrar</button>
                    <a class="btn btn-lg  btn-danger mx-auto d-block mt-3 col-4" href="<?php echo base_url('index.php/Welcome/telaProdutos');?>">Voltar</a></button>
                </form>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.mask.min.js"); ?>"></script>  
    <!--<script type="text/javascript" src="<?php echo base_url('assets/javascript/validar.js'); ?>"></script>-->
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
</body>
</html>