<?php
class apartamentos extends model {

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

	public function add($condominio, $bloco, $apartamentos, $telefone, $senha) {
		$sql = "INSERT INTO apartamentos (condominios_id, blocos_id, numero_apartamento, telefone, senha_acesso)";
		$sql.= "VALUE ('$condominio', '$bloco', '$apartamentos', '$telefone', '$senha')";
		$this->db->query($sql);
	}

	public function del($id) {
		$sql = "DELETE FROM apartamentos WHERE id = $id";
		$this->db->query($sql);
	}	
}

?> 