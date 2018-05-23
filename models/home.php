<?php
class home extends model {
	
	/*public function getLista($nome) {
		$array = array();

		$sql = "SELECT * FROM condominio ";

		if (!empty($nome)) {
			$sql.= "WHERE nome LIKE '%$nome%' ";
		}

		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}*/

	public function getListaCondominio() {
		$array = array();

		$sql = "SELECT * FROM condominio ";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getListaQuantidade() {
		$array = array();

		$data = date("Y-m-d");

		$sql = "SELECT COUNT(*) FROM encomendas WHERE data_postagem = '$data'"; // Filtra por dia
		// $sql = "SELECT COUNT(*) FROM encomendas WHERE MONTH(data_postagem) = '05'"; Filtrar por Mês.
		// $sql = "SELECT COUNT(*) FROM encomendas WHERE MONTH(data_postagem) = '05' and day(data_postagem) = '20'"; Filtrar por dia.
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}
	
}

?>