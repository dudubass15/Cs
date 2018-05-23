<?php
class homeController extends controller {
	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
	}
	public function index() {
		$dados = array();

		$home = new home();

		$dados['encomendas_dia'] = $home->getRelatórioDia();
		$dados['encomendas_semana'] = $home->getRelatórioSemana();

		$this->loadTemplate('home', $dados);
	}
}
?>