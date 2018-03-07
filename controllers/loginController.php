<?php

class loginController extends controller {

	public function index() {
		$dados = array();

		if (isset($_POST['login']) && !empty($_POST['login'])) { // se o existir $_POST['login'] e não estiver vazia.

			$login = $_POST['login']; // pega dados do formulário.
			$senha = md5($_POST['senha']); // pega dados do formulário.

			$usuario = new usuarios();
						
			if ($usuario->validaLogin($login, $senha)) { // Se a condição for verdadeira, ele entra no IF e redireciona para Home.
				header('Location: '.URL.'/home');
			}
			
		}

		$this->loadView('login', $dados);
	}

	public function logout() {

		$usuario = new usuarios();// Instancia a classe
		$usuario->logout();	// acessa o método da classe instancia.
		header('Location: '.URL.'/login');
	}

}

?>