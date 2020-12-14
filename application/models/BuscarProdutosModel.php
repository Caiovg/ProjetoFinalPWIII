<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarProdutosModel extends CI_Model {

    public function buscarprodutos(){
        return $this->db->select('a.cod_Produto, a.nome_Produto, a.descricao_Produto, a.preco_Produto, b.quantidade, c.foto_Produto')
        ->from('Produto a, Estoque b, Imagens c')
        ->where('a.cod_Produto = b.cod_Produto AND a.cod_Produto = c.cod_Produto AND a.ativo = 1')
        ->get()->result_array();
    } 

    public function buscar()
    {
        $termo = $this->input->post('pesquisar');
        return $this->db->select('a.cod_Produto, a.nome_Produto, a.descricao_Produto, a.preco_Produto, b.quantidade, c.foto_Produto')
        ->from('Produto a, Estoque b, Imagens c')
        ->where("a.cod_Produto = b.cod_Produto AND a.cod_Produto = c.cod_Produto AND a.ativo = 1 AND a.nome_Produto like '%$termo%' ")
        ->get()->result_array();
    }

    public function buscarclientes()
    {
        return $this->db->get("Clientes")->result_array();
    }
}