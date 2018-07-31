<?php
class encomendaController extends controller {

	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		$permissao = $_SESSION['acesso'];
		if ($permissao == '1') {
			unset($_SESSION['id']); //Destroi a SESSION ID.
			unset($_SESSION['login']); //Destroi a SESSION.
			unset($_SESSION['senha']); //Destroi a SESSION.
			session_destroy();
			header('Location: '.URL.'/login');
		}
	}

	public function index() {
		$dados = array();

		$encomendas = new encomendas();

		$dados['encomendas'] = $encomendas->ListarEncomendas();
		$dados['contagem_en'] = $encomendas->ContagemEncomendas();

		if (!empty($dados) && $dados['encomendas'][0]['status'] == '0') {
			$this->loadTemplate('encomendas', $dados);
		} else {
			header('Location: '.URL.'/msg/encomendas');
		}
	}
}

?>