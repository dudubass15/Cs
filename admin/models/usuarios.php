<?php
class usuarios extends model {

	public function logado() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			return true; // retorna valor verdadeiro.
		} else {
			return false; // retorna valor false.
		}
	}

	public function validaLogin($login, $senha) {
		
		$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' AND tipo = '1' ";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) { // Se a quantidade for maior que 0
			$row = $qry->fetch();
			$_SESSION['id'] = $row['id'];
			$_SESSION['nome'] = $row['nome'];
			$_SESSION['login'] = $row['login'];
			$_SESSION['senha'] = $row['senha'];
			$_SESSION['tipo'] = $row['tipo'];

			return true;
		}

		return false;
	}

	public function getLista() {
		$array = array();
		$sql = "SELECT moradores.id, moradores.nome_morador AS moradores,
		usuarios.id, usuarios.nome, usuarios.login, usuarios.tipo AS usuarios
		FROM usuarios
		INNER JOIN moradores ON moradores.id = usuarios.moradores_id";
		// $sql = "SELECT * FROM usuarios";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getMoradores() {
		$array = array();

		$sql = "SELECT id, nome_morador FROM moradores";
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

	public function getListaCargos() {
		$array = array();

		$sql = "SELECT * FROM cargos";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function add($morador, $nome, $cpf, $login, $senha, $tipo) {
		$sql = "INSERT INTO usuarios (moradores_id, nome, cpf, login, senha, tipo)";
		$sql.= "VALUE ('$morador', '$nome', '$cpf', '$login', '$senha', '$tipo')";
		$this->db->query($sql);
	}

	public function edit($id, $morador, $nome, $cpf, $login, $senha, $tipo) {
		$sql = "UPDATE usuarios SET morador = '$morador', nome = '$nome', cpf = '$cpf', login = '$login', tipo = '$tipo'";
		if (!empty($senha)) {
			$sql.= "senha = '$senha' ";
		}
		$sql.= "WHERE id = $id";
		$this->db->query($sql);

		if (!empty($senha)) {
			$sql = "UPDATE usuarios SET senha = '$senha' WHERE id = $id";
			$this->db->query($sql);
		}
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

?> 