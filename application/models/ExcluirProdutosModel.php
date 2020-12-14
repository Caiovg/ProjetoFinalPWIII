<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExcluirProdutosModel extends CI_Model {

    public function excluirProdutos($codigo) {

        $data = [
            'ativo' => '0'
        ];

        $this->db->where('cod_Produto', $codigo);
        $this->db->set($data);

        return $this->db->update("Produto",$data);
    }
}