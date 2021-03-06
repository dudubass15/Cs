<?php
class usuariosController extends controller {

	private $usuario;

	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		
		$permissao = $_SESSION['acesso'];
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

		$dados['userCondominio'] = $usuario->getCondominio();

		if (isset($_POST['condominio']) && !empty($_POST['condominio'])) {
			$condominio = addslashes($_POST['condominio']);
			$nome = addslashes($_POST['nome']);
			$login = addslashes($_POST['login']);
			$senha = base64_encode($_POST['senha']);
			$acesso = addslashes($_POST['acesso']);
			$checkbox_permissao = $_POST['permissao'];
			$permissao = implode(",", $checkbox_permissao);

			$usuario->add($condominio, $nome, $login, $senha, $acesso, $permissao);

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

		$id_user = $_SESSION['id'];

		$dados['permissaoAll'] = $usuario->getPermissao($id_user);

		$dados['userCondominio'] = $usuario->getCondominio();

		$dados['usuarios_edit'] = $usuario->getUsuariosInfo($id);

		if (isset($_POST['condominio']) && !empty($_POST['condominio'])) {
			$condominio = addslashes($_POST['condominio']);
			$nome = addslashes($_POST['nome']);
			$login = addslashes($_POST['login']);
			$senha = base64_encode($_POST['senha']);
			$acesso = addslashes($_POST['acesso']);
			$checkbox_permissao = $_POST['permissao'];
			$permissao = implode(",", $checkbox_permissao);

			$usuario = new usuarios();

			$usuario->edit($id, $condominio, $nome, $login, $senha, $acesso, $permissao);

			header('Location: '.URL.'/usuarios');

		}

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