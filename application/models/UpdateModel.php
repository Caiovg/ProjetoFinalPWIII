<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateModel extends CI_Model {
    
    function UpdateProduto($codigo, $nome, $descricao, $preco, $nome_arquivo, $quantidade) {
        $query = $this->db->query("CALL SP_UpdateProdutos('$codigo', '$nome', '$descricao', '$preco', '$nome_arquivo', '$quantidade')");
        return $query->result();
    }

}