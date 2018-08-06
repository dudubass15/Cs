<?php
class avisos extends model {

	public function logado() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			return true; // retorna valor verdadeiro.
		} else {
			return false; // retorna valor false.
		}
	}

	public function IndexAviso(){
		$array = array();

		$condominioID = $_SESSION['condominios_id'];

		$sql = "SELECT * FROM avisos WHERE condominios_id = '$condominioID'";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function ViewAviso($id){
		$array = array();

		$condominioID = $_SESSION['condominios_id'];

		$sql = "SELECT * FROM avisos WHERE id = $id AND condominios_id = '$condominioID'";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}
}