<?php
class moradores extends model {

	public function logado() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			return true; // retorna valor verdadeiro.
		} else {
			return false; // retorna valor false.
		}
	}

	// Abaixo precisa está presente, pois na view está sendo chamado uma forench utilizando o model condominios ...
	public function getListaCondominios() {
		$array = array();

		$sql = "SELECT * FROM condominios";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	// Abaixo precisa está presente, pois na view está sendo chamado uma forench utilizando o model blocos ...
	public function getListaBlocos() {
		$array = array();

		$sql = "SELECT * FROM blocos";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	// Abaixo precisa está presente, pois na view está sendo chamado uma forench utilizando o model blocos ...
	public function getListaApartamentos() {
		$array = array();

		$sql = "SELECT * FROM apartamentos";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}
		
		return $array;
	}

	public function add($condominio, $apartamento, $nome, $celular, $celular2, $cpf, $email) {
		$sql = "INSERT INTO moradores (condominios_id, apartamentos_id, nome_morador, celular, celular2, cpf, email)";
		$sql.= "VALUE ('$condominio', '$apartamento', '$nome', '$celular', '$celular2', '$cpf', '$email')";
		$this->db->query($sql);
	}

	public function del($id) {
		$sql = "DELETE FROM moradores WHERE id = $id";
		$this->db->query($sql);
	}	

}

?> 