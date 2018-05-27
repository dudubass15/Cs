<?php
class encomendaController extends controller {

	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function view1(){
		$dados = array();

		$encomendas = new encomendas();

		$dados['encomendas_registradas'] = $encomendas->getListaEncomendas();

		$this->loadTemplate('encomendas_view_pendentes', $dados);
	}

	// public function view2(){
	// 	$dados = array();

	// 	$encomendas = new encomendas();

	// 	$dados['encomendas_registradas'] = $encomendas->view_pendentes();

	// 	$this->loadTemplate('encomendas_view_concluidas', $dados);
	// }

	public function add() {
		$dados = array();

		$encomendas = new encomendas();

		$dados['lista_condominio'] = $encomendas->getListaCondominio();

		$dados['lista_bloco'] = $encomendas->getListaBloco();

		$dados['lista_apartamento'] = $encomendas->getListaApto();

		$dados['lista_morador'] = $encomendas->getListaMorador();

		if (isset($_POST['condominio']) && !empty($_POST['condominio'])) {
			$condominio = addslashes($_POST['condominio']);
			$bloco = addslashes($_POST['bloco']);
			$apartamentos = addslashes($_POST['apartamento']);
			$morador = addslashes($_POST['morador']);
			$nome_produto = addslashes($_POST['nome_produto']);
			$empresa = addslashes($_POST['empresa']);
			$observacao = addslashes($_POST['observacao']);
			$status = addslashes($_POST['status']);

			$encomendas = new encomendas();

			$encomendas->add($condominio, $bloco, $apartamentos, $morador, $nome_produto, $empresa, $observacao, $status);
			header('Location: '.URL.'/encomenda/view1');
		}
		
		$this->loadTemplate('encomendas_add', $dados);
	}

	public function edit($id) {
		$dados = array();

		$encomenda = new encomendas();

		$dados['lista_condominio'] = $encomenda->getListaCondominio();

		$dados['lista_bloco'] = $encomenda->getListaBloco();

		$dados['lista_apartamento'] = $encomenda->getListaApto();

		$dados['lista_morador'] = $encomenda->getListaMorador();

		$dados['lista_info'] = $encomenda->getEditEncomendas($id);

		if (isset($_POST['condominio']) && !empty($_POST['condominio'])) {
			$condominio = addslashes($_POST['condominio']);
			$bloco = addslashes($_POST['bloco']);
			$apartamentos = addslashes($_POST['apartamento']);
			$morador = addslashes($_POST['morador']);
			$nome_produto = addslashes($_POST['nome_produto']);
			$empresa = addslashes($_POST['empresa']);
			$observacao = addslashes($_POST['observacao']);
			$status = addslashes($_POST['status']);

			$encomenda = new encomendas();

			$encomenda->edit($id, $condominio, $bloco, $apartamentos, $morador, $nome_produto, $empresa, $observacao, $status);

			header('Location: '.URL.'/encomenda');
		}
		
		$this->loadTemplate('encomendas_edit', $dados);
	}
}

?>