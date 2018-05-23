<?php
class blocos extends model {

	public function logado() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			return true; // retorna valor verdadeiro.
		} else {
			return false; // retorna valor false.
		}

	}

	// Abaixo precisa está presente, pois na view está sendo chamado uma forench utilizando o model condominios ...

	public function getLista() {
		$array = array();

		$sql = "SELECT blocos.id, blocos.numero, blocos.nome AS bloco, condominios.nome AS condominio
				FROM blocos 
				INNER JOIN condominios ON condominios.id = blocos.condominios_id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	// Aqui abaixo só serve para mostrar os nomes dos Condomínios cadastrados na página de cadastro dos blocos ..

	public function getListaBloco() {
		$array = array();

		$sql = "SELECT * FROM condominios order by nome asc";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function ListarBloco($id) {
		$array = array();

		$sql = "SELECT blocos.id, blocos.numero, blocos.nome AS blocos, 
				condominios.id, condominios.nome AS condominios
				FROM blocos
				INNER JOIN condominios ON condominios.id = blocos.condominios_id
				WHERE blocos.id = $id ";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetch();
		}

		return $array;
	}

	public function add($condominio, $numero, $nome) {
		$sql = "INSERT INTO blocos (condominios_id, numero, nome_bloco)";
		$sql.= "VALUE ('$condominio', '$numero', '$nome')";
		$this->db->query($sql);
	}

	public function edit($id, $numero, $nome) {
		$sql = "UPDATE blocos SET numero = '$numero', nome_bloco = '$nome' WHERE id = $id";
		$this->db->query($sql);
	}

	public function del($id) {
		$sql = "DELETE FROM blocos WHERE id = $id";
		$this->db->query($sql);
	}
}

?>
