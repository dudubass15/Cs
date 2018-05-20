<?php
class usuariosController extends controller {
	private $usuario;
	public function __construct() {
		$this->usuario = new usuarios();

		if ($this->usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index(){
		$dados = array();

		$dados['lista_usuarios'] = $this->usuario->getLista();

		$this->loadTemplate('usuario', $dados);
	}

	public function add() {
		$dados = array();

		if ($this->usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$cpf = addslashes($_POST['cpf']);
			$login = addslashes($_POST['login']);
			$senha = md5($_POST['senha']);

			$this->usuario->add($nome, $cpf, $login, $senha);

			header('Location: '.URL.'/home');

		}

		$this->loadTemplate('usuario', $dados);
	}

	public function edit($id) {
		$dados = array();

		if ($this->usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$cpf = addslashes($_POST['cpf']);
			$login = addslashes($_POST['login']);
			$senha = md5($_POST['senha']);

			$this->usuario->edit($id, $nome, $cpf, $login, $senha);

			header('Location: '.URL.'/usuarios');

		} else {

			//$dados['error'] = "Por favor insira um nome !";
		}

		$this->loadTemplate('usuarios_edit', $dados);
	}

	public function del($id) {

		if ($this->usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		
		$this->usuario->del($id);

		header('Location: '.URL.'/usuarios');
	}

}

?>