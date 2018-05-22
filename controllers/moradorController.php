<?php
class moradorController extends controller {

	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			echo "<script>document.location='http://sistemaskadu.com.br/Cs/login'</script>";
		}
	}

	public function index(){
		$dados = array();

		$morador = new moradores();

		//Abaixo está sendo passado as informações do banco Condomínios e Blocos para ser representados através de forench's na view ...
		$dados['lista_condominio'] = $morador->getListaCondominios();

		$dados['lista_bloco'] = $morador->getListaBlocos();

		$dados['lista_apartamento'] = $morador->getListaApartamentos();

		$dados['lista_moradores'] = $morador->index();

		$this->loadTemplate('morador', $dados);
	}

	public function add() {
		$dados = array();

		$morador = new moradores();

		$dados['lista_condominio'] = $morador->getListaCondominios();

		$dados['lista_bloco'] = $morador->getListaBlocos();

		$dados['lista_apartamento'] = $morador->getListaApartamentos();

		if (isset($_POST['condominio']) && !empty($_POST['condominio'])) {
			$condominio = addslashes($_POST['condominio']);
			$apartamento = addslashes($_POST['apartamento']);
			$bloco = addslashes($_POST['bloco']);
			$nome = addslashes($_POST['nome']);
			$celular = addslashes($_POST['celular']);
			$celular2 = addslashes($_POST['celular2']);
			$cpf = addslashes($_POST['cpf']);
			$email = addslashes($_POST['email']);

			$morador = new moradores();

			$morador->add($condominio, $apartamento, $bloco, $nome, $celular, $celular2, $cpf, $email);

			header('Location: '.URL.'/morador');

		}

		$this->loadTemplate('morador_add', $dados);
	}

	public function edit($id) {
		$dados = array();

		$morador = new moradores();

		$dados['lista_condominio'] = $morador->getListaCondominios();

		$dados['lista_bloco'] = $morador->getListaBlocos();

		$dados['lista_apartamento'] = $morador->getListaApartamentos();

		if (isset($_POST['condominio']) && !empty($_POST['condominio'])) {
			$condominio = addslashes($_POST['condominio']);
			$apartamento = addslashes($_POST['apartamento']);
			$bloco = addslashes($_POST['bloco']);
			$nome = addslashes($_POST['nome']);
			$celular = addslashes($_POST['celular']);
			$celular2 = addslashes($_POST['celular2']);
			$cpf = addslashes($_POST['cpf']);
			$email = addslashes($_POST['email']);

			$morador = new moradores();

			$morador->edit($id, $condominio, $apartamento, $bloco, $nome, $celular, $celular2, $cpf, $email);

			header('Location: '.URL.'/morador');
		}

		$morador = new moradores();

		$dados['moradores_info'] = $morador->getMoradores($id);

		$this->loadTemplate('morador_edit', $dados);
	}

}

?>