<?php
class avisosController extends controller{

	public function __construct() {
		$usuario = new usuarios();
		if (!$usuario->logado()) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		$permissao = $_SESSION['acesso'];
		if ($permissao == '1') {
			unset($_SESSION['id']); //Destroi a SESSION ID.
			unset($_SESSION['login']); //Destroi a SESSION.
			unset($_SESSION['senha']); //Destroi a SESSION.
			session_destroy();
			header('Location: '.URL.'/login');
		}
	}

	public function index(){
		$dados = array();

		$aviso = new avisos();

		$dados['info_aviso'] = $aviso->IndexAviso();

		$this->loadTemplate('avisos', $dados);
	}

	public function view($id){
		$dados = array();

		$aviso = new avisos();

		$dados['visualizar_aviso'] = $aviso->ViewAviso($id);

		$this->loadTemplate('avisos_view', $dados);
	}
}
?>