<?php
class emails extends model{
	
	public function buscaID(){

		$array = array();

		$sql = "SELECT encomendas.id FROM encomendas ORDER BY id DESC LIMIT 1";

		$qry = $this->db->query($sql);

		$teste = $this->db->lastInsertId();
		
		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;

	}

	public function buscaEmail($id){
		$array = array();

		$sql = "SELECT m.email
			    ,m.nome_morador
			    ,c.nome
				,e.id
				FROM encomendas e
				LEFT JOIN moradores m ON m.id = e.moradores_id
				LEFT JOIN condominios c ON c.id = e.condominios_id
				WHERE e.id = $id ";

		$qry = $this->db->query($sql);
		
		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}
}
?>