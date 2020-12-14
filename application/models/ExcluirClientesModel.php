<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExcluirClientesModel extends CI_Model {
    
    public function excluirCliente($codigo) {

        $data = [
            'Ativo' => '0'
        ];

        $this->db->where('cod_cliente', $codigo);
        $this->db->set($data);

        return $this->db->update("Clientes",$data);
    }
}

