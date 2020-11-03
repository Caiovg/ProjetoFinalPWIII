<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarProdutosModel extends CI_Model {

    public function buscarprodutos(){
        return $this->db->select('a.cod_Produto, a.nome_Produto, a.descricao_Produto, a.preco_Produto, b.quantidade, a.foto_Produto')
        ->from('Produto a, Estoque b')
        ->where('a.cod_Produto = b.cod_Produto')
        ->get()->result_array();
    } 
}