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

		$sql = "SELECT * FROM avisos";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function ViewAviso($id){
		$array = array();

		$sql = "SELECT * FROM avisos WHERE id = $id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function editAviso($id){
		$array = array();

		$sql = "SELECT * FROM avisos WHERE id = $id";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function add($titulo, $resumo, $texto, $usuario, $tag) {
		$sql = "INSERT INTO avisos (titulo, resumo, texto, usuario, data_postagem, horario, tag)";
		$sql.= "VALUE ('$titulo', '$resumo', '$texto', '$usuario', NOW(), NOW(), '$tag')";
		$this->db->query($sql);
	}

	public function edit($id, $titulo, $resumo, $texto, $tag) {
		$sql = "UPDATE avisos SET titulo = '$titulo', resumo = '$resumo', texto = '$texto', tag = '$tag' WHERE id = $id";
		$this->db->query($sql);
	}

	public function del($id) {
		$sql = "DELETE FROM avisos WHERE id = $id";
		$this->db->query($sql);
	}
}