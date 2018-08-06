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
				encomendas.id, encomendas.entregador, encomendas.empresa, encomendas.status AS encomendas
				FROM encomendas WHERE status = '1'
				LEFT JOIN condominios ON condominios.id = encomendas.condominios_id
				LEFT JOIN blocos ON blocos.id = encomendas.blocos_id
				LEFT JOIN apartamentos ON apartamentos.id = encomendas.apartamentos_id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getListaCondominio() {
		$array = array();

		$condominioID = $_SESSION['condominios_id'];

		if($condominioID == 0){
			$sql = "SELECT * FROM condominios";
			$qry = $this->db->query($sql);
		} else{
			$sql = "SELECT * FROM condominios WHERE id = '$condominioID'";
			$qry = $this->db->query($sql);
		}

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getListaBloco() {
		$array = array();

		$condominioID = $_SESSION['condominios_id'];

		if($condominioID == 0){
			$sql = "SELECT * FROM blocos";
			$qry = $this->db->query($sql);
		} else{
			$sql = "SELECT * FROM blocos WHERE condominios_id = '$condominioID'";
			$qry = $this->db->query($sql);
		}

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getListaApto() {
		$array = array();

		$condominioID = $_SESSION['condominios_id'];

		if($condominioID == 0){
			$sql = "SELECT * FROM apartamentos";
			$qry = $this->db->query($sql);
		} else{
			$sql = "SELECT * FROM apartamentos WHERE condominios_id = '$condominioID'";
			$qry = $this->db->query($sql);
		}

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getListaMorador() {
		$array = array();

		$condominioID = $_SESSION['condominios_id'];

		if($condominioID == 0){
			$sql = "SELECT * FROM moradores";
			$qry = $this->db->query($sql);
		} else{
			$sql = "SELECT * FROM moradores WHERE condominios_id = '$condominioID'";
			$qry = $this->db->query($sql);
		}

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getListaEncomendas() {
		$array = array();

		$condominioID = $_SESSION['condominios_id'];

		if($condominioID == 0){
			$sql = "SELECT 
					condominios.id, condominios.nome AS condominios,
					blocos.id, blocos.numero AS blocos,
					apartamentos.id, apartamentos.numero_apartamento AS apartamentos,
					moradores.id, moradores.nome_morador, moradores.celular, moradores.email AS moradores,
					encomendas.id, encomendas.nome_produto, encomendas.empresa, encomendas.observacao, 
					encomendas.status, encomendas.data_postagem AS encomendas
					FROM encomendas
					INNER JOIN condominios ON condominios.id = encomendas.condominios_id
					INNER JOIN blocos ON blocos.id = encomendas.blocos_id
					INNER JOIN apartamentos ON apartamentos.id = encomendas.apartamentos_id
					INNER JOIN moradores ON moradores.id = encomendas.moradores_id
					WHERE encomendas.status = '1'";
			$qry = $this->db->query($sql);
		} else{
			$sql = "SELECT 
					condominios.id, condominios.nome AS condominios,
					blocos.id, blocos.numero AS blocos,
					apartamentos.id, apartamentos.numero_apartamento AS apartamentos,
					moradores.id, moradores.nome_morador, moradores.celular, moradores.email AS moradores,
					encomendas.id, encomendas.nome_produto, encomendas.empresa, encomendas.observacao, 
					encomendas.status, encomendas.data_postagem AS encomendas
					FROM encomendas
					INNER JOIN condominios ON condominios.id = encomendas.condominios_id
					INNER JOIN blocos ON blocos.id = encomendas.blocos_id
					INNER JOIN apartamentos ON apartamentos.id = encomendas.apartamentos_id
					INNER JOIN moradores ON moradores.id = encomendas.moradores_id
					WHERE encomendas.status = '1'
					AND encomendas.condominios_id = '$condominioID'";
			$qry = $this->db->query($sql);
		}

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getEditEncomendas($id) {
		$array = array();

		$condominioID = $_SESSION['condominios_id'];

		if($condominioID == 0){
			$sql = "SELECT 
					condominios.id, condominios.nome AS condominios,
					blocos.id, blocos.numero AS blocos,
					apartamentos.id, apartamentos.numero_apartamento AS apartamentos,
					moradores.id, moradores.nome_morador, moradores.celular, moradores.email AS moradores,
					encomendas.id, encomendas.nome_produto, encomendas.empresa, encomendas.observacao, 
					encomendas.status, encomendas.data_postagem AS encomendas
					FROM encomendas
					INNER JOIN condominios ON condominios.id = encomendas.condominios_id
					INNER JOIN blocos ON blocos.id = encomendas.blocos_id
					INNER JOIN apartamentos ON apartamentos.id = encomendas.apartamentos_id
					INNER JOIN moradores ON moradores.id = encomendas.moradores_id
					WHERE encomendas.id = $id";
			$qry = $this->db->query($sql);
		} else{
			$sql = "SELECT 
					condominios.id, condominios.nome AS condominios,
					blocos.id, blocos.numero AS blocos,
					apartamentos.id, apartamentos.numero_apartamento AS apartamentos,
					moradores.id, moradores.nome_morador, moradores.celular, moradores.email AS moradores,
					encomendas.id, encomendas.nome_produto, encomendas.empresa, encomendas.observacao, 
					encomendas.status, encomendas.data_postagem AS encomendas
					FROM encomendas
					INNER JOIN condominios ON condominios.id = encomendas.condominios_id
					INNER JOIN blocos ON blocos.id = encomendas.blocos_id
					INNER JOIN apartamentos ON apartamentos.id = encomendas.apartamentos_id
					INNER JOIN moradores ON moradores.id = encomendas.moradores_id
					WHERE encomendas.id = $id
					AND encomendas.condominios_id = '$condominioID'";
			$qry = $this->db->query($sql);
		}

		if ($qry->rowCount() > 0) {
			$array = $qry->fetch();
		}

		return $array;
	}

	public function view_concluidas(){
		$array = array();

		$condominioID = $_SESSION['condominios_id'];

		if($condominioID == 0){
			$sql = "SELECT 
					condominios.id, condominios.nome AS condominios,
					blocos.id, blocos.numero AS blocos,
					apartamentos.id, apartamentos.numero_apartamento AS apartamentos,
					moradores.id, moradores.nome_morador, moradores.celular, moradores.email AS moradores,
					encomendas.id, encomendas.nome_produto, encomendas.empresa, encomendas.observacao, 
					encomendas.status, encomendas.data_postagem AS encomendas
					FROM encomendas
					INNER JOIN condominios ON condominios.id = encomendas.condominios_id
					INNER JOIN blocos ON blocos.id = encomendas.blocos_id
					INNER JOIN apartamentos ON apartamentos.id = encomendas.apartamentos_id
					INNER JOIN moradores ON moradores.id = encomendas.moradores_id
					WHERE encomendas.status = '0'";
			$qry = $this->db->query($sql);
		} else{
			$sql = "SELECT 
					condominios.id, condominios.nome AS condominios,
					blocos.id, blocos.numero AS blocos,
					apartamentos.id, apartamentos.numero_apartamento AS apartamentos,
					moradores.id, moradores.nome_morador, moradores.celular, moradores.email AS moradores,
					encomendas.id, encomendas.nome_produto, encomendas.empresa, encomendas.observacao, 
					encomendas.status, encomendas.data_postagem AS encomendas
					FROM encomendas
					INNER JOIN condominios ON condominios.id = encomendas.condominios_id
					INNER JOIN blocos ON blocos.id = encomendas.blocos_id
					INNER JOIN apartamentos ON apartamentos.id = encomendas.apartamentos_id
					INNER JOIN moradores ON moradores.id = encomendas.moradores_id
					WHERE encomendas.status = '0'
					AND encomendas.condominios_id = '$condominioID'";
			$qry = $this->db->query($sql);
		}

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function add($condominio, $bloco, $apartamentos, $morador, $nome_produto, $empresa, $observacao, $status) {
		$sql = "INSERT INTO encomendas (condominios_id, blocos_id, apartamentos_id, moradores_id, nome_produto, empresa, observacao, status, data_postagem, horario)";
		$sql.= "VALUE ('$condominio', '$bloco', '$apartamentos', '$morador', '$nome_produto', '$empresa', '$observacao', '$status', NOW(), NOW())";
		$this->db->query($sql);
	}

	public function edit($id, $condominio, $bloco, $apartamentos, $morador, $nome_produto, $empresa, $observacao, $status) {
		$sql = "UPDATE encomendas SET condominios_id = '$condominio', blocos_id = '$bloco', apartamentos_id = '$apartamentos', moradores_id = '$morador', nome_produto = '$nome_produto', empresa = '$empresa', observacao = '$observacao', status = '$status' WHERE id = $id";
		$this->db->query($sql);
	}

	public function arquivo($id, $status) {
		$sql = "UPDATE encomendas SET status = '$status', data_postagem = NOW(), horario = NOW() WHERE id = $id";
		$this->db->query($sql);
	}

	public function del($id) {
		$sql = "DELETE FROM encomendas WHERE id = $id";
		$this->db->query($sql);
	}

}