<?php
class condominios extends model {

	public function logado() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			return true; // retorna valor verdadeiro.
		} else {
			return false; // retorna valor false.
		}
	}

	public function getLista() {
		$array = array();

		$sql = "SELECT * FROM condominios";

		if (!empty($nome)) {
			$sql.= "WHERE nome LIKE '%$nome%' ";
		}
		
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getCondominioInfo($id) {
		$array = array();

		$sql = "SELECT * FROM condominios WHERE id = $id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetch();
		}

		return $array;
	}

	public function add($nome, $cnpj, $telefone, $endereco, $cidade, $estado) {
		$sql = "INSERT INTO condominios (nome, cnpj, telefone, endereco, cidade, estado)";
		$sql.= "VALUE ('$nome', '$cnpj', '$telefone', '$endereco', '$cidade', '$estado')";
		$this->db->query($sql);
	}

	public function edit($id, $nome, $cnpj, $telefone, $endereco, $cidade, $estado) {
		$sql = "UPDATE condominios SET nome = '$nome', cnpj = '$cnpj', telefone = '$telefone', endereco = '$endereco', cidade = '$cidade', estado = '$estado' WHERE id = $id";
		$this->db->query($sql);
	}

	public function del($id) {
		$sql = "DELETE FROM condominios WHERE id = $id";
		$this->db->query($sql);
	}	

}

?> 