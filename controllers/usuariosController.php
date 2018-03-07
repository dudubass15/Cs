<?php
class usuariosController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index(){
		$dados = array();

		$usuario = new usuarios();

		$dados['lista_usuarios'] = $usuario->getLista();

		$this->loadTemplate('usuario', $dados);
	}

	public function add() {
		$dados = array();

		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$cpf = addslashes($_POST['cpf']);
			$login = addslashes($_POST['login']);
			$senha = md5($_POST['senha']);

			$usuario = new usuarios();

			$usuario->add($nome, $cpf, $login, $senha);

			header('Location: '.URL.'/home');

		}

		$this->loadTemplate('usuario', $dados);
	}

	public function edit($id) {
		$dados = array();

		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$cpf = addslashes($_POST['cpf']);
			$login = addslashes($_POST['login']);
			$senha = md5($_POST['senha']);

			$usuario->edit($id, $nome, $cpf, $login, $senha);

			header('Location: '.URL.'/usuarios');

		} else {

			//$dados['error'] = "Por favor insira um nome !";
		}

		$this->loadTemplate('usuarios_edit', $dados);
	}

	public function del($id) {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		
		$usuario->del($id);

		header('Location: '.URL.'/usuarios');
	}

}

?>