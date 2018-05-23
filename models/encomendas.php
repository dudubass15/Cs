<?php
class encomendas extends model {

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
				modores.id, moradores.nome_morador AS moradores,
				encomendas.id, encomendas.entregador, encomendas.empresa AS encomendas
				FROM encomendas
				INNER JOIN condominios ON condominios.id = encomendas.condominios_id
				INNER JOIN blocos ON blocos.id = encomendas.blocos_id
				INNER JOIN apartamentos ON apartamentos.id = encomendas.apartamentos_id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getListaCondominio() {
		$array = array();

		$sql = "SELECT * FROM condominios order by nome asc";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getListaBloco() {
		$array = array();

		$sql = "SELECT * FROM blocos";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getListaApto() {
		$array = array();

		$sql = "SELECT * FROM apartamentos";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getListaMorador() {
		$array = array();

		$sql = "SELECT * FROM moradores";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getListaEncomendas() {
		$array = array();

		$sql = "SELECT condominios.id, condominios.nome AS condominios,
				blocos.id, blocos.numero AS blocos,
				apartamentos.id, apartamentos.numero_apartamento AS apartamentos,
				moradores.id, moradores.nome_morador, moradores.celular, moradores.email AS moradores,
				encomendas.id, encomendas.nome_produto, encomendas.empresa, encomendas.observacao, encomendas.data_postagem AS encomendas
				FROM encomendas
				INNER JOIN condominios ON condominios.id = encomendas.condominios_id
				INNER JOIN blocos ON blocos.id = encomendas.blocos_id
				INNER JOIN apartamentos ON apartamentos.id = encomendas.apartamentos_id
				INNER JOIN moradores ON moradores.id = encomendas.moradores_id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function add($condominio, $bloco, $apartamentos, $morador, $nome_produto, $empresa, $observacao) {
		$sql = "INSERT INTO encomendas (condominios_id, blocos_id, apartamentos_id, moradores_id, nome_produto, empresa, observacao, data_postagem)";
		$sql.= "VALUE ('$condominio', '$bloco', '$apartamentos', '$morador', '$nome_produto', '$empresa', '$observacao', NOW())";
		$this->db->query($sql);
	}

}

?> 