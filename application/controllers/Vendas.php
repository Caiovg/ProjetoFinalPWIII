<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendas extends CI_Controller {

    public function validarcamposvenda()
    {
        $nome = $_POST['nomeProduto'];
        $descricao = $_POST['descricao'];
        $quantidade = $_POST['quantidade'];
        $preco = $_POST['preco'];
        $precofinal = $_POST['precofinal'];
        $codigo = $_POST['id'];
        $selecionarCliente = $_POST['selecionarcliente'];

        $this->load->model('CadastrosModel');

        if (empty($nome)) {
            die("ErroNome");
        }

        if (empty($descricao)) {
            die("ErroDescricao");
        }

        if (empty($quantidade)) {
            die("Erroquantidade");
        }

        if(!is_numeric($quantidade)){
            die("Erroletra");
        }

        if($quantidade == '0'){
            die("Erropelomenos1");
        }

        if (empty($preco)) {
            die("ErroPreco");
        }

        if (empty($precofinal)) {
            die("ErroPrecoFinal");
        }

        if (empty($selecionarCliente)) {
            die("Erroselecionarcliente");
        }

        if ($this->CadastrosModel->CadastrarVenda($quantidade, $preco, $precofinal, $codigo, $selecionarCliente))
        {
            echo "Sucesso";            
            die();

        } else {

            echo "ErroBanco";
            die();

        }
    }
}