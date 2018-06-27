<?php
class tipoencomendaController extends controller {

	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		$permissao = $_SESSION['tipo'];
		if ($permissao == '2') {
			header('Location: '.URL.'/login');
		}
	}

	public function index(){
		$dados = array();

		$this->loadTemplate('home', $dados);
	}

}

?>