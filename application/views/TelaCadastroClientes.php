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
    <title>Cadastrar Clientes</title>
    <script>
        $(document).ready(function() {
            $("#cpf").mask("000.000.000-00", {reverse: false})
            $("#CPF").mask("000.000.000-00", {reverse: false})
            $("#telefone").mask("(00) 00000-0000")
            $("#TELEFONE").mask("(00) 00000-0000")
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
            <li><a class="active" href="<?php echo base_url("index.php/Welcome/telaClientes"); ?>">Clientes</a></li>
            <li><a href="<?php echo base_url("index.php/Welcome/telaProdutos"); ?>">Produtos</a></li>
            <li><a href="<?php echo base_url("index.php/Welcome/telaVendas"); ?>">Vendas</a></li>
            <li><a href="<?php echo base_url("index.php/Welcome/telaRelatorios"); ?>">Relatorios</a></li>
        </ul>
    </nav>
    <br><br>
    <div class="container">
    <br>
    <div class="d-none d-md-block">
        <div class="caixaCadastroFuncionarios mx-auto mt-5 font-weight-bold">
        <br><br><br>
            <h2 class="text-center titulo font-weight-bold">Cadastrar Clientes</h2>
            <br>
            <form action="<?php echo base_url("index.php/Clientes/validarCadastroClientes"); ?>" method="POST" id="cadastrocliente" class="form-row">
                <div class="form-group mx-auto col-5">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" autocomplete="off">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
                <div class="form-group mx-auto col-5">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone">
                </div>
                <div class="form-row">
                    <div class="" style="position: relative; left: 180px; top: 21px;">
                        <button type="submit" class="btn btn-danger btn-lg btnCadastrar">Cadastrar</button>
                    </div>
                    <div class="" style="position: relative; left: 215px; top: 5px;">
                        <a class="btn btn-lg  btn-danger mx-auto d-block mt-3" href="<?php echo base_url('index.php/Welcome/telaClientes');?>">Voltar</a></button>
                    </div>                       
                </div>
            </form>
        </div>
    </div>

    <div class="d-md-none d-sm-block">
        <div class="caixaCadastroPFuncionarios mt-4 font-weight-bold">
            <h2 class="text-center titulo font-weight-bold">Cadastrar Clientes</h2>
            <form class="form-row mt-2" action="<?php echo base_url("index.php/Clientes/validarCadastroClientesresponsivo"); ?>" method="POST" id="cadastroFuncionarioresponsivo">
                <div class="form-group mx-auto col-12">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="NOME" name="NOME" autocomplete="off">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="EMAIL" name="EMAIL" autocomplete="off">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" id="CPF" name="CPF">
                </div>
                <div class="form-group mx-auto col-12">
                    <label for="tel">Telefone</label>
                    <input type="text" class="form-control" id="TELEFONE" name="TELEFONE">
                </div>
                <button type="submit" class="btn btn-lg mt-3 btn-danger text-white rounded mx-auto d-block">Cadastrar</button>
                <a class="btn btn-lg  btn-danger mx-auto d-block mt-3 col-4" href="<?php echo base_url('index.php/Welcome/telaClientes');?>">Voltar</a></button>
            </form>
        </div>
        <br><br>
    </div>
    

    <script src="<?php echo base_url('assets/node_modules/jquery/dist/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/popper.js/dist/umd/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/node_modules/jquery/dist/jquery.mask.min.js"); ?>"></script>
    <script src="<?php echo base_url('assets/javascript/validar.js'); ?>"></script>
    <script src="<?php echo base_url('assets/node_modules/sweetalert2/dist/sweetalert2.all.js'); ?>"></script>
</body>
</html>