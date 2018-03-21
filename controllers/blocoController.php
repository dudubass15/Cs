<?php
class blocoController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
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
			$nome = addslashes($_POST['nome']);

			$bloco = new blocos();

			$bloco->add($condominio, $numero, $nome);

			header('Location: '.URL.'/bloco');
		}

		$this->loadTemplate('bloco_add', $dados);
	}

	public function edit($id) {
		$dados = array();
		$bloco = new blocos();

		if (isset($_POST['condominio']) && !empty($_POST['condominio'])) {
			$condominio = addslashes($_POST['condominio']);
			$numero = addslashes($_POST['numero']);
			$nome = addslashes($_POST['nome']);
			
			$bloco->edit($id, $condominio, $numero, $nome);

			header('Location: '.URL.'/bloco');
		}

		$dados['bloco_info'] = $bloco->ListarBloco($id);

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
