<?php
class encomendaController extends controller {

	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}

	public function index(){
		$dados = array();

		$encomendas = new encomendas();

		$dados['encomendas_registradas'] = $encomendas->getListaEncomendas();

		$this->loadTemplate('encomendas', $dados);
	}

	public function add() {
		$dados = array();

		$encomendas = new encomendas();

		$dados['lista_condominio'] = $encomendas->getListaCondominio();

		$dados['lista_bloco'] = $encomendas->getListaBloco();

		$dados['lista_apartamento'] = $encomendas->getListaApto();

		$dados['lista_morador'] = $encomendas->getListaMorador();

		if (isset($_POST['condominio']) && !empty($_POST['condominio'])) {
			$condominio = addslashes($_POST['condominio']);
			$bloco = addslashes($_POST['bloco']);
			$apartamentos = addslashes($_POST['apartamento']);
			$morador = addslashes($_POST['morador']);
			$nome_produto = addslashes($_POST['nome_produto']);
			$empresa = addslashes($_POST['empresa']);
			$observacao = addslashes($_POST['observacao']);

			$encomendas = new encomendas();

			$encomendas->add($condominio, $bloco, $apartamentos, $morador, $nome_produto, $empresa, $observacao);
			header('Location: '.URL.'/encomenda');
		}
		
		$this->loadTemplate('encomendas_add', $dados);
	}

}

?>