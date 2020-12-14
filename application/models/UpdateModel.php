<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateModel extends CI_Model {
    
    public function UpdateProduto($codigo, $nome, $descricao, $preco, $nome_arquivo, $quantidade) {
        $query = $this->db->query("CALL SP_UpdateProdutos('$codigo', '$nome', '$descricao', '$preco', '$nome_arquivo', '$quantidade')");
        return $query->result();
    }

    public function UpdateClientes($dados){

        $data = [
            'nome_cliente' => $dados['nome_cliente'],
            'email_cliente' => $dados['email_cliente'],
            'cpf_cliente' => $dados['cpf_cliente'],
            'telefone_cliente' => $dados['telefone_cliente']
        ];

        $this->db->where('cod_cliente', $dados['cod_cliente']);
        $this->db->set($data);

        return $this->db->update("Clientes",$data);

    }
}