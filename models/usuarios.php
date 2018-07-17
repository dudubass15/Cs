<?php
class usuarios extends model {

	public function logado() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			return true; // retorna valor verdadeiro.
		}
		if (isset($_SESSION['tipo']) && !empty($_SESSION['tipo'])) {
			return true; // retorna valor verdadeiro.
		}
		else {
			return false; // retorna valor false.
		}
	}

	public function validaLogin($login, $senha) {
		
		$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' AND tipo = '2' ";

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

		$sql = "SELECT * FROM usuarios";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}
}