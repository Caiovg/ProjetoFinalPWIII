<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo base_url("assets/imagens/logo_80px.png") ?>" type="image/x-png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/node_modules/bootstrap/dist/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/estilo.css'); ?>" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Home</title>
</head>
<body>
    <!--<nav class="navbar navbar bg cor">
        <span class="navbar-brand mb-0 h1 logo"><a href="<?php echo base_url("index.php/Welcome/index"); ?>"><img src="<?php echo base_url("assets/imagens/logo_40px.png")?>"></a></span>
        
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" href="#">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url("index.php/Welcome/telaLogin"); ?>">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?php echo base_url("index.php/Welcome/telaLogin"); ?>">Recados</a>
            </li>
        </ul>
    </nav>-->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Controller</label>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="<?php echo base_url("index.php/Welcome/telaProdutos"); ?>">Produtos</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Feedback</a></li>
        </ul>
    </nav>
    <section></section>
</body>
</html>