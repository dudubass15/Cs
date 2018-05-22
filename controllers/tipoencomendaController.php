<?php
class tipoencomendaController extends controller {

	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			echo "<script>document.location='http://sistemaskadu.com.br/Cs/login'</script>";
		}
	}

	public function index(){
		$dados = array();

		$this->loadTemplate('home', $dados);
	}

}

?>