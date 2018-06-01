<?php
class usuariosController extends controller {
	private $usuario;
	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index(){
		$dados = array();

		$usuario = new usuarios();

		$dados['lista_usuarios'] = $usuario->getLista();

		$this->loadTemplate('usuarios', $dados);
	}

	public function add() {
		$dados = array();

		$usuario = new usuarios();

		$dados['lista_moradores'] = $usuario->getMoradores();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['morador']) && !empty($_POST['morador'])) {
			$morador = addslashes($_POST['morador']);
			$cpf = addslashes($_POST['cpf']);
			$login = addslashes($_POST['login']);
			$senha = base64_encode($_POST['senha']);
			$tipo = addslashes($_POST['tipo']);

			$usuario->add($morador, $cpf, $login, $senha, $tipo);

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

		if (isset($_POST['morador']) && !empty($_POST['morador'])) {
			$morador = addslashes($_POST['morador']);
			$cpf = addslashes($_POST['cpf']);
			$login = addslashes($_POST['login']);
			$senha = base64_encode($_POST['senha']);
			$tipo = addslashes($_POST['tipo']);

			$usuario = new usuarios();

			$usuario->edit($id, $morador, $cpf, $login, $senha, $tipo);

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
		
		$usuario->del($id);

		header('Location: '.URL.'/usuarios');
	}

}

?>