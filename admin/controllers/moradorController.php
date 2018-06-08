<?php
class moradorController extends controller {

	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
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

		$dados['moradores_info'] = $morador->getListaMoradores($id);
		
		$dados['lista_moradores'] = $morador->index();

		if (isset($_POST['condominio']) && !empty($_POST['apartamento'])) {
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

		}if (isset($_POST['apartamento']) && !empty($_POST['apartamento'])) {
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

		}if (isset($_POST['bloco']) && !empty($_POST['bloco'])) {
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

		}if (isset($_POST['nome']) && !empty($_POST['nome'])) {
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

		}if (isset($_POST['celular']) && !empty($_POST['celular'])) {
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

		}if (isset($_POST['cpf']) && !empty($_POST['cpf'])) {
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

		}if (isset($_POST['email']) && !empty($_POST['email'])) {
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