<?php
class homeController extends controller {
	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		
		$permissao = $_SESSION['tipo'];
		if ($permissao == '2') {
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

		$usuario = new usuarios();

		$id_user = $_SESSION['id'];

		$dados['permissaoAll'] = $usuario->getPermissao($id_user);

		$dados['encomendas_dia'] = $home->getRelatorioDia();
		$dados['encomendas_mes'] = $home->getRelatorioMes();
		$dados['encomendas_ano'] = $home->getRelatorioAno();

		$this->loadTemplate('home', $dados);
	}
}