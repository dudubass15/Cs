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

		$usuario = new usuarios();

		$id_user = $_SESSION['id'];

		$dados['permissaoAll'] = $usuario->getPermissao($id_user);

		$dados['encomendas_registradas'] = $encomendas->getListaEncomendas();

		$this->loadTemplate('encomendas_view_pendentes', $dados);
	}

	public function concluidas(){
		$dados = array();

		$encomendas = new encomendas();

		$usuario = new usuarios();

		$id_user = $_SESSION['id'];

		$dados['permissaoAll'] = $usuario->getPermissao($id_user);

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

			$nome = $resultado[0]['nome_morador']; //Pega o nome do morador
			$condominio = $resultado[0]['nome'];	//Pega o nome do Condomínio
			$email = $resultado[0]['email'];	//Pega o e-mail do morador

			$para = $email;
			$assunto = 'Voce tem uma nova encomenda ' .'- ' .$condominio;

			//$corpo = 'Olá ' .$nome.','. ' você possui uma nova encomenda na Portaria. Por gentileza acessar www.cs.sistemaskadu.com.br com seu login e senha para pegar mais informações.';
			$corpo = "
				
				<!doctype html>
				<html lang='pt'>
				  <head>
				    <meta charset='utf-8'>
				    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
				    <meta name='description' content=''>
				    <meta name='author' content=''>
				    <link rel='icon' href='../../../../favicon.ico'>

				    <title>Recebimento de Encomenda</title>

				    <!-- Bootstrap core CSS -->
				    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>

				    <!-- Custom styles for this template -->
				    <link href='sticky-footer.css' rel='stylesheet'>
				  </head>

				  <body>

				    <!-- Begin page content -->
				    <main role='main' class='container'>
				      <h1 class='mt-5'>Nova encomenda ...</h1>
				      <p class='lead'>Ola $nome, voce acaba de receber uma nova encomenda.</p>
				      <p>Acesse www.cs.sistemaskadu.com.br e tenha mais informacoes sobre sua encomenda.</p>
				    </main>

				    <footer class='footer'>
				      <div class='container'>
				        <span class='text-muted'>Sistema CS - Administrador.</span>
				      </div>
				    </footer>

				    <style rel='stylesheet' type='text/css'>
				    	/* Sticky footer styles
				    	-------------------------------------------------- */
				    	html {
				    	  position: relative;
				    	  min-height: 100%;
				    	}
				    	body {
				    	  margin-bottom: 60px; /* Margin bottom by footer height */
				    	}
				    	.footer {
				    	  position: absolute;
				    	  bottom: 0;
				    	  width: 100%;
				    	  height: 60px; /* Set the fixed height of the footer here */
				    	  line-height: 60px; /* Vertically center the text there */
				    	  background-color: #f5f5f5;
				    	}


				    	/* Custom page CSS
				    	-------------------------------------------------- */
				    	/* Not required for template or sticky footer method. */

				    	.container {
				    	  width: auto;
				    	  max-width: 680px;
				    	  padding: 0 15px;
				    	}

				    </style>

				  </body>
				</html>
			";

			$cabecalho = 'MIME-Version: 1.0' . "\r\n";
			$cabecalho .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$cabecalho .= "From: portaria@cs.sistemaskadu.com.br"."\r\n".
						 "Replay-To: ".$email."\r\n".
						 "X-Mailer: PHP/".phpversion();

			mail($para, $assunto, $corpo, $cabecalho);

			header('Location: '.URL.'/encomenda/pendentes');
		}
	}

	public function add() {
		$dados = array();

		$encomendas = new encomendas();

		$usuario = new usuarios();

		$id_user = $_SESSION['id'];

		$dados['permissaoAll'] = $usuario->getPermissao($id_user);

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