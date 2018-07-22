<?php
class avisosController extends controller{

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

	public function add(){
		$dados = array();

		$aviso = new avisos();

		if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
			$titulo = addslashes($_POST['titulo']);
			$resumo = addslashes($_POST['resumo']);
			$texto = addslashes($_POST['texto']);
			$usuario = $_SESSION['nome'];
			$tag = addslashes($_POST['tag']);

			$aviso = new avisos();

			$aviso->add($titulo, $resumo, $texto, $usuario, $tag);

			header('Location: '.URL.'/avisos');
		}

		$this->loadTemplate('avisos_add', $dados);
	}

	public function edit($id) {
		$dados = array();

		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}

		if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
			$titulo = addslashes($_POST['titulo']);
			$resumo = addslashes($_POST['resumo']);
			$texto = addslashes($_POST['texto']);
			$tag = addslashes($_POST['tag']);

			$aviso = new avisos();

			$aviso->edit($id, $titulo, $resumo, $texto, $tag);

			header('Location: '.URL.'/avisos');

		}

		$aviso = new avisos();

		$dados['avisos_edit'] = $aviso->editAviso($id);

		//print_r($dados); die;

		$this->loadTemplate('avisos_edit', $dados);
	}

	public function del($id) {
		$usuario = new usuarios();

		if ($usuario->logado() == false) { //valida o retorno do método se ele é true ou false.
			header('Location: '.URL.'/login');
		}
		
		$aviso = new avisos();

		$aviso->del($id);

		header('Location: '.URL.'/avisos');
	}

}
?>