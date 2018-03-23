<?php
class apartamentoController extends controller {

	public function __construct() {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
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

			header('Location: '.URL.'/home');
		}
		
		$this->loadTemplate('apartamento_add', $dados);
	}

}

?>