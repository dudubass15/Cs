<?php
class encomendaController extends controller {

	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index() {
		$dados = array();

		$encomendas = new encomendas();

		$dados['encomendas'] = $encomendas->ListarEncomendas();

		$this->loadTemplate('encomendas', $dados);
	}
}

?>