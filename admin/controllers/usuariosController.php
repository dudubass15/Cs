<?php
class usuariosController extends controller {

	private $usuario;

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

		$id = $_SESSION['id'];

		$dados['permissaoAll'] = $usuario->getPermissao($id);
	}

	public function index(){
		$dados = array();

		$usuario = new usuarios();

		$id_user = $_SESSION['id'];

		$dados['lista_usuarios'] = $usuario->getLista();

		$dados['permissaoAll'] = $usuario->getPermissao($id_user);

		$this->loadTemplate('usuarios', $dados);
	}

	public function add() {
		$dados = array();

		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		$usuario = new usuarios();

		$id_user = $_SESSION['id'];

		$dados['permissaoAll'] = $usuario->getPermissao($id_user);

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$login = addslashes($_POST['login']);
			$senha = base64_encode($_POST['senha']);
			$tipo = addslashes($_POST['tipo']);
			$checkbox_permissao = $_POST['permissao'];
			$permissao = implode(",", $checkbox_permissao);

			$usuario->add($nome, $login, $senha, $tipo, $permissao);

			header('Location: '.URL.'/usuarios');

		}

		$this->loadTemplate('usuario_add', $dados);
	}

	public function edit($id) {
		$dados = array();

		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$login = addslashes($_POST['login']);
			$senha = base64_encode($_POST['senha']);
			$tipo = addslashes($_POST['tipo']);
			$checkbox_permissao = $_POST['permissao'];
			$permissao = implode(",", $checkbox_permissao);

			$usuario = new usuarios();

			$usuario->edit($id, $nome, $login, $senha, $tipo, $permissao);

			header('Location: '.URL.'/usuarios');

		}

			$usuario = new usuarios();

			$dados['usuarios_edit'] = $usuario->getUsuariosInfo($id);

			$this->loadTemplate('usuarios_edit', $dados);
	}

	public function del($id) {

		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		$usuario = new usuarios();

		$id_user = $_SESSION['id'];

		$dados['permissaoAll'] = $usuario->getPermissao($id_user);
		
		$usuario->del($id);

		header('Location: '.URL.'/usuarios');
	}

}

?>