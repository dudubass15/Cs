<?php
class apartamentoController extends controller {

	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		$permissao = $_SESSION['tipo'];
		if ($permissao == '2') {
			header('Location: '.URL.'/login');
		}
	}

	public function index(){
		$dados = array();

		$apartamento = new apartamentos();
		
		$dados['lista_apartamento'] = $apartamento->getLista();

		$this->loadTemplate('apartamento', $dados);
	}

	public function add() {
		$dados = array();

		$apartamento = new apartamentos();

		$dados['lista_apartamento'] = $apartamento->getListaApto();
		$dados['lista_bloco'] = $apartamento->getListaBL();

		if (isset($_POST['condominio']) && !empty($_POST['condominio'])) {
			$condominio = addslashes($_POST['condominio']);
			$bloco = addslashes($_POST['bloco']);
			$apartamentos = addslashes($_POST['apartamento']);
			$telefone = addslashes($_POST['telefone']);
			$senha = addslashes($_POST['senha']);

			$apartamento = new apartamentos();

			$apartamento->add($condominio, $bloco, $apartamentos, $telefone, $senha);
			header('Location: '.URL.'/apartamento');
		}
		
		$this->loadTemplate('apartamento_add', $dados);
	}

	public function edit($id) {
		$dados = array();

		$usuario = new usuarios();

		$apartamento = new apartamentos();

		$dados['lista_apartamento'] = $apartamento->getLista();

		$dados['lista_bloco'] = $apartamento->getListaBL();

		$dados['apto_edit'] = $apartamento->getAptoInfo($id);

		if (isset($_POST['apartamento']) && !empty($_POST['apartamento'])) {
			$apartamentos = addslashes($_POST['apartamento']);
			$telefone = addslashes($_POST['telefone']);
			$senha = addslashes($_POST['senha']);

			$apartamento->edit($id, $apartamentos, $telefone, $senha);

			header('Location: '.URL.'/apartamento');

		}if (isset($_POST['telefone']) && !empty($_POST['telefone'])) {
			$apartamentos = addslashes($_POST['apartamento']);
			$telefone = addslashes($_POST['telefone']);
			$senha = addslashes($_POST['senha']);

			$apartamento->edit($id, $apartamentos, $telefone, $senha);

			header('Location: '.URL.'/apartamento');
			
		}if (isset($_POST['senha']) && !empty($_POST['senha'])) {
			$apartamentos = addslashes($_POST['apartamento']);
			$telefone = addslashes($_POST['telefone']);
			$senha = addslashes($_POST['senha']);

			$apartamento->edit($id, $apartamentos, $telefone, $senha);

			header('Location: '.URL.'/apartamento');
		}

		$this->loadTemplate('apartamento_edit', $dados);
	}

	public function del($id) {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		
		$apartamento = new apartamentos();

		$apartamento->del($id);

		header('Location: '.URL.'/apartamento');
	}

}

?>