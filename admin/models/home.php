<?php
class home extends model {

	public function getListaCondominio() {
		$array = array();

		$sql = "SELECT * FROM condominio ";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getRelatorioDia() {
		$array = array();

		$timestamp = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));
		$data = gmdate("d/m/Y", $timestamp);

		$condominioID = $_SESSION['condominios_id'];

		if($condominioID == 0){
			$sql = "SELECT COUNT(*) FROM encomendas WHERE DAY(data_postagem) = '$data'"; // Filtra por dia
			$qry = $this->db->query($sql);
		} else{
			$sql = "SELECT COUNT(*) FROM encomendas WHERE DAY(data_postagem) = '$data' AND condominios_id = '$condominioID'"; // Filtra por dia
			$qry = $this->db->query($sql);
		}

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getRelatorioMes() {
		$array = array();

		$timestamp = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));
		$data = gmdate("m", $timestamp);

		$condominioID = $_SESSION['condominios_id'];

		if($condominioID == 0){
			$sql = "SELECT COUNT(*) FROM encomendas WHERE MONTH(data_postagem) = '$data'";
			$qry = $this->db->query($sql);
		} else{
			$sql = "SELECT COUNT(*) FROM encomendas WHERE MONTH(data_postagem) = '$data' AND condominios_id = '$condominioID'";
			$qry = $this->db->query($sql);
		}

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getRelatorioAno() {
		$array = array();

		$timestamp = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));
		$data = gmdate("Y", $timestamp);

		$condominioID = $_SESSION['condominios_id'];

		if($condominioID == 0){
			$sql = "SELECT COUNT(*) FROM encomendas WHERE YEAR(data_postagem) = '$data'";
			$qry = $this->db->query($sql);
		} else{
			$sql = "SELECT COUNT(*) FROM encomendas WHERE YEAR(data_postagem) = '$data' AND condominios_id = '$condominioID'";
			$qry = $this->db->query($sql);
		}
		
		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}
}