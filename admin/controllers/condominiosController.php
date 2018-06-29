<?php
class condominiosController extends controller {

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

		$condominio = new condominios();

		$dados['lista_condominio'] = $condominio->getLista();
		
		$this->loadTemplate('condominio', $dados);
	}

	public function add() {
		$dados = array();

		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$cnpj = addslashes($_POST['cnpj']);
			$telefone = addslashes($_POST['telefone']);
			$endereco = addslashes($_POST['endereco']);
			$cidade = addslashes($_POST['cidade']);
			$estado = addslashes($_POST['estado']);

			$condominio = new condominios();

			$condominio->add($nome, $cnpj, $telefone, $endereco, $cidade, $estado);

			header('Location: '.URL.'/condominios');

		}

		$this->loadTemplate('condominio_add', $dados);
	}

	public function edit($id) {
		$dados = array();

		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['nome']) && !empty($_POST['nome'])) {
			$nome = addslashes($_POST['nome']);
			$cnpj = addslashes($_POST['cnpj']);
			$telefone = addslashes($_POST['telefone']);
			$endereco = addslashes($_POST['endereco']);
			$cidade = addslashes($_POST['cidade']);
			$estado = addslashes($_POST['estado']);

			$condominio = new condominios();

			$condominio->edit($id, $nome, $cnpj, $telefone, $endereco, $cidade, $estado);

			header('Location: '.URL.'/condominios');

		}

		$condominio = new condominios();

		$dados['condominio_info'] = $condominio->getCondominioInfo($id);

		$this->loadTemplate('condominio_edit', $dados);
	}

	public function del($id) {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		
		$condominio = new condominios();

		$condominio->del($id);

		header('Location: '.URL.'/condominios');
	}

}

?>