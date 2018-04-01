<?php
class moradores extends model {

	public function logado() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			return true; // retorna valor verdadeiro.
		} else {
			return false; // retorna valor false.
		}
	}

	public function index() {
		$array = array();

		$sql = "SELECT condominios.id, condominios.nome AS condominios, 
				blocos.id, blocos.numero AS blocos,
				apartamentos.id, apartamentos.numero_apartamento AS apartamentos, 
				moradores.nome_morador, moradores.celular, moradores.celular2, moradores.cpf,
				moradores.email AS moradores
				FROM moradores
				INNER JOIN condominios ON condominios.id = moradores.condominios_id
				INNER JOIN blocos ON blocos.id = moradores.blocos_id
				INNER JOIN apartamentos ON apartamentos.id = moradores.apartamentos_id";

		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
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

	public function add($condominio, $apartamento, $bloco, $nome, $celular, $celular2, $cpf, 
		$email) {
		$sql = "INSERT INTO moradores (condominios_id, apartamentos_id, blocos_id, nome_morador, celular, celular2, cpf, email)";
		$sql.= "VALUE ('$condominio', '$apartamento', '$bloco', '$nome', '$celular', '$celular2', '$cpf', '$email')";
		$this->db->query($sql);
	}

	public function del($id) {
		$sql = "DELETE FROM moradores WHERE id = $id";
		$this->db->query($sql);
	}	

}

?> 