<?php
class home extends model {

	public function getListaEncomendas() {
		$array = array();

		$user = $_SESSION['id'];

		$sql = "SELECT encomendas.id, encomendas.nome_produto, encomendas.empresa, encomendas.data_postagem, encomendas.horario, encomendas.status AS encomendas,
		moradores.id, moradores.nome_morador AS moradores,
		usuarios.id, usuarios.login, usuarios.senha AS usuarios
		FROM encomendas
		INNER JOIN moradores ON moradores.id = encomendas.moradores_id
		INNER JOIN usuarios ON usuarios.id = moradores.usuarios_id WHERE usuarios.id = $user AND encomendas.status = '1'";

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

	public function EditStats($id, $status) {
		$sql = "UPDATE encomendas SET status = '$status', data_postagem = NOW(), horario = NOW() WHERE id = $id";
		$this->db->query($sql);
	}
}

?>