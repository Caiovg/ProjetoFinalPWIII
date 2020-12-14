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
    <title>Relatorios de vendas</title>
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
            <li><a href="<?php echo base_url("index.php/Welcome/telaVendas"); ?>">Vendas</a></li>
            <li><a class="active" href="<?php echo base_url("index.php/Welcome/telaRelatorios"); ?>">Relatorios</a></li>
        </ul>
    </nav>
    <br><br><br>
    
    <div class="text-center my-auto cor">
        <h1 class="estilo">RELATORIOS</h1>
    </div>

    <div class="container-fluid mt-4">
        <br>
        <table class="table cortable table-hover text-center">
            <thead>
                <tr class="text-danger">
                    <th scope="col">ID Venda</th>
                    <th scope="col">Data</th>
                    <th scope="col">ID Cliente</th>
                    <th scope="col">Nome Cliente</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Preço Unitario</th>
                    <th scope="col">Preço Final</th>
                </tr>
            </thead>
            <div>
                <tbody>
                    <?php foreach ($venda as $vendas) : ?>
                        <tr>
                            <th scope="col"><?php echo $vendas['cod_Venda'] ?></th>
                            <th scope="col"><?php echo $vendas['data_venda'] ?></th>
                            <th scope="col"><?php echo $vendas['cod_cliente'] ?></th>
                            <th scope="col"><?php echo $vendas['nome_cliente'] ?></th>
                            <th scope="col"><?php echo $vendas['nome_Produto'] ?></th>
                            <th scope="col"><?php echo $vendas['quantidade'] ?></th>
                            <th scope="col"><?php echo $vendas['preco_unitario'] ?></th>
                            <th scope="col"><?php echo $vendas['preco_final'] ?></th>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </div>
        </table>
    </div>
</body>
</html>