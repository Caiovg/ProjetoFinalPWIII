<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    public function validarCadastroProdutos()
    {
        
        $nome = $_POST['nomeProduto'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $codigo = $_POST['id'];

        $this->load->model('CadastrosModel');

        if (empty($nome)) {
            die("ErroNome");
        }

        if (empty($descricao)) {
            die("ErroDescricao");
        }

        if (empty($preco)) {
            die("ErroPreco");
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

        /**img */
        $config["upload_path"] = FCPATH . "assets/imagens/produtos";
        $config["allowed_types"] = "jpg|jpeg|gif|png";
        $config["encrypt_name"] = TRUE;

        $this->load->library("upload", $config);
        if($this->upload->do_upload('addFoto'))
        {
            $info_arquivo = $this->upload->data();
            $nome_arquivo = $info_arquivo["file_name"];

        }else
        {
            $erros = $this->upload->display_errors();
            $alerta = array(
                "class" => "danger",
                "mensagem" => "ERRO.<br>". $erros
            );
        }

        if ($this->CadastrosModel->CadastrarProdutos($nome, $descricao, $preco, $nome_arquivo, $quantidade, $codigo))
        {
            echo "Sucesso";
            die();
        } else {
            echo "ErroBanco";
            die();
        }
    }

    public function validarCadastroProdutosresponsivo()
    {
        
        $nome = $_POST['nomeProduto'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['PRECO'];
        $quantidade = $_POST['quantidade'];
        $codigo = $_POST['id'];

        $this->load->model('CadastrosModel');

        if (empty($nome)) {
            die("ErroNome");
        }

        if (empty($descricao)) {
            die("ErroDescricao");
        }

        if (empty($preco)) {
            die("ErroPreco");
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

        /**img */
        $config["upload_path"] = FCPATH . "assets/imagens/produtos";
        $config["allowed_types"] = "jpg|jpeg|gif|png";
        $config["encrypt_name"] = TRUE;

        $this->load->library("upload", $config);
        if($this->upload->do_upload('addFoto'))
        {
            $info_arquivo = $this->upload->data();
            $nome_arquivo = $info_arquivo["file_name"];

        }else
        {
            $erros = $this->upload->display_errors();
            $alerta = array(
                "class" => "danger",
                "mensagem" => "ERRO.<br>". $erros
            );
        }

        if ($this->CadastrosModel->CadastrarProdutos($nome, $descricao, $preco, $nome_arquivo, $quantidade, $codigo))
        {
            echo "Sucesso";
            die();
        } else {
            echo "ErroBanco";
            die();
        }
    }

    public function validarUpdateProdutos(){
        
        $nome = $_POST['nomeProduto'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $codigo = $_POST['id'];

        $this->load->model('UpdateModel');

        if (empty($nome)) {
            die("ErroNome");
        }

        if (empty($descricao)) {
            die("ErroDescricao");
        }

        if (empty($preco)) {
            die("ErroPreco");
        }

        if (empty($quantidade)) {
            die("ErroPreco");
        }

       if ($this->UpdateModel->UpdateProduto($codigo, $nome, $descricao, $preco, $quantidade))
       {
            echo "Sucesso";
            die();
        } else {
            echo "ErroBanco";
            die();
        }
    }

    public function excluirProdutos(){

        $codigo = $this->input->post("id");

        $this->load->model('ExcluirProdutosModel');

        if ($this->ExcluirProdutosModel->excluirProdutos($codigo)) {
            echo "Excluir";
            die();
        } else {
            echo "ErroBanco";
            die();
        }
    }
}