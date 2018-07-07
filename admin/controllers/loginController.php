<?php
class loginController extends controller {

	public function index() {
		$dados = array();

		if (isset($_POST['login']) && !empty($_POST['login'])) { // se o existir $_POST['login'] e não estiver vazia.

			$login = $_POST['login']; // pega dados do formulário.
			$senha = base64_encode($_POST['senha']); // pega dados do formulário.

			$usuario = new usuarios();
						
			if ($usuario->validaLogin($login, $senha)) { // Se a condição for verdadeira, ele entra no IF e redireciona para Home.
				header('Location: '.URL.'/home');
			} else{
				echo "Usuario ou Senha inválido !";
			}
			
		}

		$this->loadView('login', $dados);
	}

	public function logout() {
		unset($_SESSION['id']); //Destroi a SESSION ID.
		unset($_SESSION['login']); //Destroi a SESSION.
		unset($_SESSION['senha']); //Destroi a SESSION.
		session_destroy();
		header('Location: '.URL.'/login');	

	}
}