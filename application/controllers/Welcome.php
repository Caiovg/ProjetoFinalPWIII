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
	public function pesquisarProdutos()
	{
		$this->load->model('BuscarProdutosModel');
		$lista = $this->BuscarProdutosModel->buscar();
		$dados = array("produto" => $lista);
		$this->load->view('TelaProdutos', $dados);
	}
	public function telaVendas(){
		$this->load->model("BuscarProdutosModel");
        $lista = $this->BuscarProdutosModel->buscarprodutos();
		$dados["produto"] = $lista;

		$lista2 = $this->BuscarProdutosModel->buscarclientes();
        $dados["cliente"] = $lista2;
		
		$this->load->view('telaVendas', $dados);
	}
	public function pesquisarProdutosvenda()
	{
		$this->load->model("BuscarProdutosModel");
        $lista = $this->BuscarProdutosModel->buscar();
		$dados["produto"] = $lista;

		$lista2 = $this->BuscarProdutosModel->buscarclientes();
        $dados["cliente"] = $lista2;
		
		$this->load->view('telaVendas', $dados);
	}
	public function telaClientes()
	{
		$this->load->model("BuscarClientesModel");
        $lista = $this->BuscarClientesModel->buscarclientes();
        $dados = array("cliente" => $lista);
		$this->load->view('TelaClientes', $dados);
	}
	public function pesquisarClientes()
	{
		$this->load->model("BuscarClientesModel");
        $lista = $this->BuscarClientesModel->buscar();
        $dados = array("cliente" => $lista);
		$this->load->view('TelaClientes', $dados);
	}	
	public function telaCadastroClientes()
	{
		$this->load->view('TelaCadastroClientes');
	}
	public function telaRelatorios(){

		$this->load->model("BuscarVendaModel");
		$lista = $this->BuscarVendaModel->buscarVenda();
        $dados = array("venda" => $lista);
		$this->load->view('TelaRelatorios',$dados);
	}

	/*public function pag($value=null)
	{
		if($value==null){
			$value = 1;
		}
		$reg_p_pag = 3;

		if($value <= $reg_p_pag){
			$data['btnA'] = 'pointer';
		}else{
			$data['btnA'] = '';
		}

		$this->load->model("BuscarProdutosModel");
		$u = $this->BuscarProdutosModel->get_qtd_Produtos();

		if(($u[0]->total - $value) < $reg_p_pag){
			$data['btnP'] = 'disabled';
		}else{
			$data['btnP'] = '';
		}

		$this->load->model("BuscarProdutosModel");
        $lista = $this->BuscarProdutosModel->buscarprodutos_pag($value, $reg_p_pag);
		$data = array("produto" => $lista);
		$data['value'] = $value;
		$data['reg_p_pag'] = $reg_p_pag;
		$data['qtd_reg'] = $u[0]->total;

		$v_inteiro = (int) $u[0]->total/$reg_p_pag;
		$v_resto = $u[0]->total%$reg_p_pag;

		if($v_resto>0){
			$v_inteiro +=1;
		}

		$data['qtd_botoes'] = $v_inteiro;

		$this->load->view('TelaProdutos', $data);		
	}*/
}
