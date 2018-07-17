<?php
class msgController extends controller {

	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		$permissao = $_SESSION['tipo'];
		if ($permissao == '1') {
			unset($_SESSION['id']); //Destroi a SESSION ID.
			unset($_SESSION['login']); //Destroi a SESSION.
			unset($_SESSION['senha']); //Destroi a SESSION.
			session_destroy();
			header('Location: '.URL.'/login');
		}
	}

	public function index(){
		$dados = array();

		$home = new home();

		$encomendas['encomendas_users'] = $home->getListaEncomendas();

		if (empty($encomendas)) {
			header('Location: '.URL.'/msg');
		} else {
			$this->loadTemplate('msg_home', $dados);
		}

	}

	public function encomendas(){
		$dados = array();

		$home = new home();

		$encomendas['encomendas_users'] = $home->getListaEncomendas();

		if (empty($encomendas)) {
			header('Location: '.URL.'/msg/encomenda');
		} else {
			$this->loadTemplate('msg_encomendas', $dados);
		}
	}

}
?>