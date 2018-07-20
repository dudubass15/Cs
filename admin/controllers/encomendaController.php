<?php
class encomendaController extends controller {

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

	public function pendentes(){
		$dados = array();

		$encomendas = new encomendas();

		$dados['encomendas_registradas'] = $encomendas->getListaEncomendas();

		$this->loadTemplate('encomendas_view_pendentes', $dados);
	}

	public function concluidas(){
		$dados = array();

		$encomendas = new encomendas();

		$dados['encomendas_concluidas'] = $encomendas->view_concluidas();

		$this->loadTemplate('encomendas_view_concluidas', $dados);
	}

	public function sendEmail(){
		$dados = array();

		$email = new emails();

		$dados['id'] = $email->buscaID();

		// Em $id eu percorro todo o array pegando somente o ID
		$id = $dados['id'][0]['id'];

		$resultado = $email->buscaEmail($id);

		// Recebe as informações do formulário
		if(isset($resultado) && !empty($resultado)){

			$nome = $resultado[0]['nome_morador'];
			$condominio = $resultado[0]['nome'];
			$email = $resultado[0]['email'];
			$msg = "Olá caro(a)".$nome." você possui uma nova encomenda na Portaria!";
			$url = 'www.cs.sistemaskadu.com.br';

			$para = $email;
			$assunto = 'Você tem uma nova encomenda ' .'- ' .$condominio;
			//$corpo = "Nome: ".$nome." - E-mail: ".$email." - Mensagem: ".$msg;

			$corpo = 
			'
			<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

			<body style="margin-top: 10px;">
				<div style="width: 100%; height: 80px;">
					<h1 style="text-align: center; color: orange; font-family: Lato, sans-serif; font-size: 40px;">Condomínio do ' .$condominio.' informa:</h1>
				</div>

				<div style="width: 100%; height: 300px;">
					<p style="font-size:24px; margin-left: 30px; margin-right: 30px; font-family: sans-serif;">Olá '.$nome.','. ' você acaba de receber uma nova encomenda na Portaria do Condomínio. Acesse o sistema através desse link <a href="www.cs.sistemaskadu.com.br" target="_blank" style="text-decoration: none;">www.cs.sitemaskadu.com.br</a> com seu usuário e senha agora mesmo, e tenha mais informações sobre a encomenda que te espera. </p><br>
					<p style="font-size:24px; margin-right: 30px; font-family: sans-serif; float: right;">Estamos a sua disposição !</p>
					<?php print_r($nome); die; ?>
				<div>
			</body>
			';

			$cabecalho = "From: portaria@cs.sistemaskadu.com.br"."\r\n".
						 "Replay-To: ".$email."\r\n".
						 "X-Mailer: PHP/".phpversion();

			mail($para, $assunto, $corpo, $cabecalho);

			header('Location: '.URL.'/encomenda/pendentes');
		}
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
			$status = addslashes($_POST['status']);

			$encomendas = new encomendas();

			$encomendas->add($condominio, $bloco, $apartamentos, $morador, $nome_produto, $empresa, $observacao, $status);

			header('Location: '.URL.'/encomenda/sendEmail');
		}
		
		$this->loadTemplate('encomendas_add', $dados);
	}

	public function edit($id) {
		$dados = array();

		$encomenda = new encomendas();

		$dados['lista_condominio'] = $encomenda->getListaCondominio();

		$dados['lista_bloco'] = $encomenda->getListaBloco();

		$dados['lista_apartamento'] = $encomenda->getListaApto();

		$dados['lista_morador'] = $encomenda->getListaMorador();

		$dados['lista_info'] = $encomenda->getEditEncomendas($id);

		if (isset($_POST['nome_produto']) && !empty($_POST['nome_produto'])) {
			$condominio = addslashes($_POST['condominio']);
			$bloco = addslashes($_POST['bloco']);
			$apartamentos = addslashes($_POST['apartamento']);
			$morador = addslashes($_POST['morador']);
			$nome_produto = addslashes($_POST['nome_produto']);
			$empresa = addslashes($_POST['empresa']);
			$observacao = addslashes($_POST['observacao']);
			$status = addslashes($_POST['status']);

			$encomenda = new encomendas();

			$encomenda->edit($id, $condominio, $bloco, $apartamentos, $morador, $nome_produto, $empresa, $observacao, $status);

			header('Location: '.URL.'/encomenda/pendentes');
		}
		
		$this->loadTemplate('encomendas_edit', $dados);
	}

	public function arquivar($id) {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		
		$encomenda = new encomendas();

		$status = '0';

		$encomenda->arquivo($id, $status);

		header('Location: '.URL.'/encomenda/pendentes');
	}

	public function del($id) {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		
		$encomenda = new encomendas();

		$encomenda->del($id);

		header('Location: '.URL.'/encomenda/pendentes');
	}
}
?>