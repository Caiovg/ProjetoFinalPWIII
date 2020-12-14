<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BuscarClientesModel extends CI_Model {

    public function buscarclientes()
    {
        $this->db->where("Ativo = 1");
        return $this->db->get("Clientes")->result_array();
    }

    public function buscar()
    {
        $termo = $this->input->post('pesquisar');
        $this->db->where("Ativo = 1");
        $this->db->select('*');
        $this->db->like('nome_cliente', $termo);
        $this->db->or_like('email_cliente', $termo);
        $this->db->or_like('cpf_cliente', $termo);
        $this->db->or_like('telefone_cliente', $termo);
        return $this->db->get("Clientes")->result_array();
    }
}