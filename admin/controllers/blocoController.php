<?php
class blocoController extends controller {

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

	public function index(){
		$dados = array();

		$bloco = new blocos();

		$dados['lista_bloco'] = $bloco->getLista();

		$this->loadTemplate('bloco', $dados);
	}

	public function add() {
		$dados = array();

		$bloco = new blocos();

		$dados['lista_condominio'] = $bloco->getListaBloco();

		if (isset($_POST['condominio']) && !empty($_POST['condominio'])) {
			$condominio = addslashes($_POST['condominio']);
			$numero = addslashes($_POST['numero']);
			$nome = addslashes($_POST['nome_bloco']);

			$bloco = new blocos();

			$bloco->add($condominio, $numero, $nome);

			header('Location: '.URL.'/bloco');
		}

		$this->loadTemplate('bloco_add', $dados);
	}

	public function edit($id) {
		$dados = array();

		$usuario = new usuarios();

		$bloco = new blocos();

		$dados['lista_condominio'] = $bloco->getListaBloco();

		$dados['bloco_info'] = $bloco->ListarBloco($id);

		if (isset($_POST['condominio']) && !empty($_POST['condominio'])) {
			$condominio = addslashes($_POST['condominio']);
			$numero = addslashes($_POST['numero']);
			$nome = addslashes($_POST['nome_bloco']);

			$bloco->edit($id, $condominio, $numero, $nome);

			header('Location: '.URL.'/bloco');

		} if (isset($_POST['numero']) && !empty($_POST['numero'])) {
			$condominio = addslashes($_POST['condominio']);
			$numero = addslashes($_POST['numero']);
			$nome = addslashes($_POST['nome_bloco']);

			$bloco->edit($id, $condominio, $numero, $nome);

			header('Location: '.URL.'/bloco');

		} if (isset($_POST['nome_bloco']) && !empty($_POST['nome_bloco'])) {
			$condominio = addslashes($_POST['condominio']);
			$numero = addslashes($_POST['numero']);
			$nome = addslashes($_POST['nome_bloco']);

			$bloco->edit($id, $condominio, $numero, $nome);

			header('Location: '.URL.'/bloco');
		}

		$this->loadTemplate('bloco_edit', $dados);
	}

	public function del($id) {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		
		$bloco = new blocos();

		$bloco->del($id);

		header('Location: '.URL.'/bloco');
	}

}

?>
