<?php
class usuarios extends model {
	private $id;
	private $usuario;
	private $permissoes;

	public function logado() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			return true; // retorna valor verdadeiro.
		}else {
			return false; // retorna valor false.
		}
	}

	public function validaLogin($login, $senha) {

		$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' AND acesso = 1";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$row = $qry->fetch();
			$_SESSION['id'] = $row['id'];
			$_SESSION['nome'] = $row['nome'];
			$_SESSION['login'] = $row['login'];
			$_SESSION['senha'] = $row['senha'];
			$_SESSION['acesso'] = $row['acesso'];
			$_SESSION['permissao'] = $row['permissao'];

			return true;
		}

		return false;
	}

	public function getLista() {
		$array = array();
		$sql = "SELECT * FROM usuarios";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getUsuariosInfo($id) {
		$array = array();

		$sql = "SELECT * FROM usuarios WHERE id = $id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetch();
		}
		return $array;
	}

	public function getPermissao($id){
		$array = array();

		$sql = "SELECT usuarios.acesso, usuarios.permissao FROM usuarios WHERE id = $id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();

			$string = $array[0]['permissao'];
			$resultado = explode(',', $string);

		}
		return $resultado;
	}

	public function add($nome, $login, $senha, $acesso, $permissao) {
		$sql = "INSERT INTO usuarios (nome, login, senha, acesso, permissao)";
		$sql.= "VALUE ('$nome', '$login', '$senha', '$acesso', '$permissao')";
		$this->db->query($sql);
	}

	public function edit($id, $nome, $login, $senha, $acesso, $permissao) {
		$sql = "UPDATE usuarios SET nome = '$nome', login = '$login', senha = '$senha', acesso = '$acesso', permissao = '$permissao' WHERE id = $id";
		$this->db->query($sql);
	}

	public function del($id) {
		try {
			$sql = "DELETE FROM usuarios WHERE id = $id";
			$this->db->query($sql);
		} catch (PDOException $e) {
			exit('Erro ao excluir o Usuário: '.$e->getMessage());
		}	
	}

}