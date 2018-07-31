<?php
class homeController extends controller {

	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		$permissao = $_SESSION['acesso'];
		if ($permissao == '1') {
			unset($_SESSION['id']); //Destroi a SESSION ID.
			unset($_SESSION['login']); //Destroi a SESSION.
			unset($_SESSION['senha']); //Destroi a SESSION.
			session_destroy();
			header('Location: '.URL.'/login');
		}
	}

	public function index() {
		$dados = array();

		$home = new home();

		$encomendas['encomendas_users'] = $home->getListaEncomendas();

		if (!empty($encomendas) && $encomendas['encomendas_users'][0]['status'] == '1') {
			$this->loadTemplate('home', $encomendas);
		} else {
			header('Location: '.URL.'/msg');
		}
	}

	public function arquivar($id) {
		$dados = array();

		$home = new home();

		$status = '0';

		$home->EditStats($id, $status);

		header('Location: '.URL.'/home');
	}
}

?>