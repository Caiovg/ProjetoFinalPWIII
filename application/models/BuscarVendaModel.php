<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarVendaModel extends CI_Model {
    
    public function buscarVenda()
    {
        return $this->db->select('a.cod_Venda, a.data_venda, a.cod_cliente, c.nome_cliente, b.cod_Produto, d.nome_Produto, b.quantidade , b.preco_unitario, b.preco_final')
        ->from('vendas a, ItensVendidos b, Clientes c, Produto d')
        ->where('a.cod_Venda = b.cod_Venda AND a.cod_cliente = c.cod_cliente AND b.cod_Produto = d.cod_Produto')
        ->get()->result_array();
    }
}