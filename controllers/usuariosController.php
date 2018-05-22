<?php
class usuariosController extends controller {
	private $usuario;
	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			echo "<script>document.location='http://sistemaskadu.com.br/Cs/login'</script>";
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

		if ($this->usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$cpf = addslashes($_POST['cpf']);
			$login = addslashes($_POST['login']);
			$senha = base64_encode($_POST['senha']);

			$this->usuario->add($nome, $cpf, $login, $senha);

			header('Location: '.URL.'/usuarios');

		}

		$this->loadTemplate('usuario_add', $dados);
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
			$senha = base64_encode($_POST['senha']);

			$this->usuario = new usuarios();

			$this->usuario->edit($id, $nome, $cpf, $login, $senha);

			header('Location: '.URL.'/usuarios');

		}

			$usuario = new usuarios();

			$dados['usuarios_edit'] = $usuario->getUsuariosInfo($id);

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