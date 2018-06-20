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

	public function getListaEncomendas() {
		$array = array();

		$user = $_SESSION['id'];

		// $teste = "SELECT usuarios.nome, (select moradores.id from moradores WHERE moradores.id = usuarios.moradores_id) as moradores FROM usuarios";

		$sql = "SELECT * FROM encomendas WHERE moradores_id = $user";


		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

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

		$sql = "SELECT COUNT(*) FROM encomendas WHERE DAY(data_postagem) = '$data'"; // Filtra por dia
		// $sql = "SELECT COUNT(*) FROM encomendas WHERE MONTH(data_postagem) = '05'"; Filtrar por Mês.
		// $sql = "SELECT COUNT(*) FROM encomendas WHERE MONTH(data_postagem) = '05' and day(data_postagem) = '20'"; Filtrar por dia.
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getRelatorioMes() {
		$array = array();

		// $teste = "SELECT WEEKOFYEAR(data_postagem) FROM encomendas" YEAR;

		$timestamp = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));
		$data = gmdate("m", $timestamp);

		$sql = "SELECT COUNT(*) FROM encomendas WHERE MONTH(data_postagem) = '$data'";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function getRelatorioAno() {
		$array = array();

		$timestamp = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));
		$data = gmdate("Y", $timestamp);

		$sql = "SELECT COUNT(*) FROM encomendas WHERE YEAR(data_postagem) = '$data'";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}
}

?>
