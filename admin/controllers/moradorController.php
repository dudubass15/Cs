<?php
class moradorController extends controller {

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

		$dados['lista_usuarios'] = $morador->getListaUser();

		if (isset($_POST['condominio']) && !empty($_POST['condominio'])) {
			$condominio = addslashes($_POST['condominio']);
			$bloco = addslashes($_POST['bloco']);
			$apartamento = addslashes($_POST['apartamento']);
			$nome = addslashes($_POST['nome']);
			$celular = addslashes($_POST['celular']);
			$cpf = addslashes($_POST['cpf']);
			$email = addslashes($_POST['email']);
			$usuario = addslashes($_POST['usuario']);

			$morador = new moradores();

			$morador->add($condominio, $bloco, $apartamento, $nome, $celular, $cpf, $email, $usuario);

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

		$dados['moradores_info'] = $morador->getListaMoradores($id);
		
		$dados['lista_moradores'] = $morador->index();

		$dados['lista_usuarios'] = $morador->getListaUser();

		if (isset($_POST['condominio']) && !empty($_POST['condominio'])) {
			$condominio = addslashes($_POST['condominio']);
			$bloco = addslashes($_POST['bloco']);
			$apartamento = addslashes($_POST['apartamento']);
			$nome = addslashes($_POST['nome']);
			$celular = addslashes($_POST['celular']);
			$cpf = addslashes($_POST['cpf']);
			$email = addslashes($_POST['email']);
			$usuario = addslashes($_POST['usuario']);

			$morador = new moradores();

			$morador->edit($id, $condominio, $bloco, $apartamento, $nome, $celular, $cpf, $email, $usuario);

			header('Location: '.URL.'/morador');

		}if (isset($_POST['apartamento']) && !empty($_POST['apartamento'])) {
			$condominio = addslashes($_POST['condominio']);
			$bloco = addslashes($_POST['bloco']);
			$apartamento = addslashes($_POST['apartamento']);
			$nome = addslashes($_POST['nome']);
			$celular = addslashes($_POST['celular']);
			$cpf = addslashes($_POST['cpf']);
			$email = addslashes($_POST['email']);
			$usuario = addslashes($_POST['usuario']);

			$morador = new moradores();

			$morador->edit($id, $condominio, $bloco, $apartamento, $nome, $celular, $cpf, $email, $usuario);

			header('Location: '.URL.'/morador');

		}

		$this->loadTemplate('morador_edit', $dados);
	}

	public function del($id) {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		
		$morador = new moradores();;

		$morador->del($id);

		header('Location: '.URL.'/morador');
	}

}

?>