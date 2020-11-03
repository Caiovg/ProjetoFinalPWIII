<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('Home');
	}
	public function telaProdutos()
	{
		$this->load->model("BuscarProdutosModel");
        $lista = $this->BuscarProdutosModel->buscarprodutos();
        $dados = array("produto" => $lista);
		$this->load->view('TelaProdutos', $dados);
	}
	public function telaCadastroProdutos()
	{
		$this->load->view('TelaCadastroProdutos');
	}
}
