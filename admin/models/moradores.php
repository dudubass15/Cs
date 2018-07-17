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

		$sql = "SELECT condominios.id, condominios.id, condominios.nome AS condominios,
				blocos.id, blocos.id, blocos.numero AS blocos,
				apartamentos.id, apartamentos.id, apartamentos.numero_apartamento AS apartamentos,
				moradores.id, moradores.nome_morador, moradores.celular, moradores.cpf,
				moradores.email AS moradores
				FROM moradores
				LEFT JOIN condominios ON condominios.id = moradores.condominios_id
				LEFT JOIN blocos ON blocos.id = moradores.blocos_id
				LEFT JOIN apartamentos ON apartamentos.id = moradores.apartamentos_id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	// Abaixo precisa está presente, pois na view está sendo chamado uma forench utilizando o model condominios ...
	public function getListaCondominios() {
		$array = array();

		$sql = "SELECT * FROM condominios order by nome asc";
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

	public function getListaMoradores($id) {
		$array = array();

		$sql = "SELECT condominios.nome AS condominios, 
				blocos.numero, blocos.nome AS blocos,
				apartamentos.numero_apartamento, apartamentos.telefone AS apartamentos,
				moradores.nome_morador, moradores.celular, moradores.cpf, moradores.celular, moradores.email AS moradores
				FROM moradores
				LEFT JOIN condominios ON condominios.id = moradores.condominios_id
				LEFT JOIN blocos ON blocos.id = moradores.blocos_id
				LEFT JOIN apartamentos ON apartamentos.id = moradores.apartamentos_id
				WHERE moradores.id = $id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetch();
		}

		return $array;
	}

	public function getListaUser(){
		$array = array();

		$sql = "SELECT * FROM usuarios WHERE tipo = 2";

		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function add($condominio, $bloco, $apartamento, $nome, $celular, $cpf, $email, $usuario) {
		$sql = "INSERT INTO moradores (condominios_id, blocos_id, apartamentos_id, nome_morador, celular, cpf, email, usuarios_id)";
		$sql.= "VALUE ('$condominio', '$bloco', '$apartamento', '$nome', '$celular', '$cpf', '$email', '$usuario')";
		$this->db->query($sql);
	}

	public function edit($id, $condominio, $bloco, $apartamento, $nome, $celular, $cpf, $email, $usuario) {
		$sql = "UPDATE moradores SET condominios_id = '$condominio', blocos_id = '$bloco', apartamentos_id = '$apartamento', nome_morador = '$nome', celular = '$celular', cpf = '$cpf', email = '$email', usuarios_id = '$usuario' WHERE id = $id";
		$this->db->query($sql);
	}

	public function del($id) {
		$sql = "DELETE FROM moradores WHERE id = $id";
		$this->db->query($sql);
	}
}