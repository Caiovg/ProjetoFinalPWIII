<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    public function validarCadastroClientes(){

        $dados = [
            'nome_cliente' => $this->input->post("nome"),
            'email_cliente' => $this->input->post("email"),
            'cpf_cliente' => $this->input->post("cpf"),
            'telefone_cliente' => $this->input->post("telefone"),
        ];

        $this->load->model('CadastrosModel');

        if (empty($dados['nome_cliente'])) {
            echo "ErroNome";
            die();
        }

        if (empty($dados['email_cliente'])){
            die("ErroEmail");
        }

        if (empty($dados['cpf_cliente'])){
            die("ErroCpf");
        }

        if (empty($dados['telefone_cliente'])){
            die("ErroTelefone");
        }

        if ($this->CadastrosModel->CadastrarClientes($dados))
       {
            echo "Sucesso";
            die();
        } else {
            echo "ErroBanco";
            die();
        }
    }

    public function validarCadastroClientesresponsivo(){

        $dados = [
            'nome_cliente' => $this->input->post("NOME"),
            'email_cliente' => $this->input->post("EMAIL"),
            'cpf_cliente' => $this->input->post("CPF"),
            'telefone_cliente' => $this->input->post("TELEFONE"),
        ];

        $this->load->model('CadastrosModel');

        if (empty($dados['nome_cliente'])) {
            echo "ErroNome";
            die();
        }

        if (empty($dados['email_cliente'])){
            die("ErroEmail");
        }

        if (empty($dados['cpf_cliente'])){
            die("ErroCpf");
        }

        if (empty($dados['telefone_cliente'])){
            die("ErroTelefone");
        }

        if ($this->CadastrosModel->CadastrarClientes($dados))
       {
            echo "Sucesso";
            die();
        } else {
            echo "ErroBanco";
            die();
        }
    }

    public function validarUpdateClientes(){

        $dados = [
            'cod_cliente' => $this->input->post("id"),
            'nome_cliente' => $this->input->post("nomeCliente"),
            'email_cliente' => $this->input->post("email"),
            'cpf_cliente' => $this->input->post("cpf"),
            'telefone_cliente' => $this->input->post("telefone"),
        ];

        $this->load->model('UpdateModel');

        if (empty($dados['nome_cliente'])) {
            echo "ErroNome";
            die();
        }

        if (empty($dados['email_cliente'])){
            die("ErroEmail");
        }

        if (empty($dados['cpf_cliente'])){
            die("ErroCpf");
        }

        if (empty($dados['telefone_cliente'])){
            die("ErroTelefone");
        }

        if ($this->UpdateModel->UpdateClientes($dados))
       {
            echo "Sucesso";
            die();
        } else {
            echo "ErroBanco";
            die();
        }
    }

    public function excluirCliente(){

        $codigo = $this->input->post("id");

        $this->load->model('ExcluirClientesModel');

        if ($this->ExcluirClientesModel->excluirCliente($codigo)) {
            echo "Excluir";
            die();
        } else {
            echo "ErroBanco";
            die();
        }
    }
}