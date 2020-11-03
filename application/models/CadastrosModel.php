<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrosModel extends CI_Model {

    public function CadastrarProdutos($nome, $descricao, $preco, $nome_arquivo, $quantidade, $codigo)
	{
        $query = $this->db->query("CALL SP_CadastrarProdutos('$nome', '$descricao', '$preco', '$nome_arquivo', '$quantidade', '$codigo')");
        return $query->result();
        
    }
}