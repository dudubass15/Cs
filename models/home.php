<?php
class home extends model {

	public function logado() {
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
			return true; // retorna valor verdadeiro.
		} else {
			return false; // retorna valor false.
		}
	}

	public function getListaEncomendas() {
		$array = array();

		$user = $_SESSION['id'];

		$condominioID = $_SESSION['condominios_id'];

		$sql = "SELECT e.id
		             , e.nome_produto
		             , e.empresa
		             , e.data_postagem
		             , e.horario
		             , e.status
		             , m.id
		             , m.nome_morador
		             , u.id
		             , u.login
		             , u.senha 
		          FROM encomendas e
		    INNER JOIN moradores m ON m.id = e.moradores_id
		    INNER JOIN usuarios u ON u.id = m.usuarios_id 
		         WHERE u.id = $user 
		           AND e.status = '1'
		           AND e.condominios_id = $condominioID";

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

	public function EditStats($id, $status) {
		$sql = "UPDATE encomendas SET status = '$status' WHERE id = $id";
		$this->db->query($sql);
	}
}