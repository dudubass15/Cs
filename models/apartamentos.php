<?php
class apartamentos extends model {

	public function logado() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			return true; // retorna valor verdadeiro.
		} else {
			return false; // retorna valor false.
		}
	}

	public function getLista() {
		$array = array();

		$sql = "SELECT apartamentos.id, apartamentos.numero_apartamento, apartamentos.telefone AS apartamentos, condominios.id, condominios.nome AS condominios, blocos.id, blocos.numero AS blocos
				FROM apartamentos 
				INNER JOIN condominios ON condominios.id = apartamentos.condominios_id
				INNER JOIN blocos ON blocos.id = apartamentos.blocos_id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getListaApto() {
		$array = array();

		$sql = "SELECT * FROM condominios";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getListaBL() {
		$array = array();

		$sql = "SELECT * FROM blocos";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getAptoInfo($id) {
		$array = array();

		$sql = "SELECT apartamentos.id, apartamentos.condominios_id, apartamentos.blocos_id, apartamentos.numero_apartamento, apartamentos.telefone, apartamentos.senha_acesso AS apartamentos, condominios.id, condominios.nome AS condominios, blocos.id, blocos.numero AS blocos
				FROM apartamentos 
				INNER JOIN condominios ON condominios.id = apartamentos.condominios_id
				INNER JOIN blocos ON blocos.id = apartamentos.blocos_id WHERE apartamentos.id = $id ";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetch();
		}

		return $array;
	}

	public function add($condominio, $bloco, $apartamentos, $telefone, $senha) {
		$sql = "INSERT INTO apartamentos (condominios_id, blocos_id, numero_apartamento, telefone, senha_acesso)";
		$sql.= "VALUE ('$condominio', '$bloco', '$apartamentos', '$telefone', '$senha')";
		$this->db->query($sql);
	}

	public function edit($id, $apartamentos, $telefone, $senha) {
		$sql = "UPDATE apartamentos SET numero_apartamento = '$apartamentos', telefone = '$telefone', senha_acesso = '$senha' WHERE id = $id";
		$this->db->query($sql);
	}

	public function del($id) {
		$sql = "DELETE FROM apartamentos WHERE id = $id";
		$this->db->query($sql);
	}	
}

?> 