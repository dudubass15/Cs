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

		if($condominioID == 0){
			$sql = "SELECT c.id
						 , c.nome
						 , a.id
						 , a.titulo
						 , a.resumo
						 , a.texto
						 , a.tag
						 , a.usuario
						 , a.data_postagem
						 , a.horario 
					FROM avisos a
					INNER JOIN condominios c ON c.id = a.condominios_id";
			$qry = $this->db->query($sql);
		} else{
			$sql = "SELECT * FROM avisos WHERE condominios_id = '$condominioID'";
			$qry = $this->db->query($sql);
		}

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function ViewAviso($id){
		$array = array();

		$condominioID = $_SESSION['condominios_id'];

		if($condominioID == 0){
			$sql = "SELECT * FROM avisos WHERE id = $id";
			$qry = $this->db->query($sql);
		} else{
			$sql = "SELECT * FROM avisos WHERE id = $id AND condominios_id = '$condominioID'";
			$qry = $this->db->query($sql);
		}

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function editAviso($id){
		$array = array();

		$condominioID = $_SESSION['condominios_id'];

		if($condominioID == 0){
			$sql = "SELECT * FROM avisos WHERE id = $id";
			$qry = $this->db->query($sql);
		} else{
			$sql = "SELECT * FROM avisos WHERE id = $id AND condominios_id = '$condominioID'";
			$qry = $this->db->query($sql);
		}

		if ($qry->rowCount() > 0) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function add($condominio, $titulo, $resumo, $texto, $usuario, $tag) {
		$sql = "INSERT INTO avisos (condominios_id, titulo, resumo, texto, usuario, data_postagem, horario, tag)";
		$sql.= "VALUE ('$condominio', '$titulo', '$resumo', '$texto', '$usuario', NOW(), NOW(), '$tag')";
		$this->db->query($sql);
	}

	public function edit($id, $condominio, $titulo, $resumo, $texto, $tag) {
		$sql = "UPDATE avisos SET condominios_id = '$condominio' titulo = '$titulo', resumo = '$resumo', texto = '$texto', tag = '$tag' WHERE id = $id";
		$this->db->query($sql);
	}

	public function del($id) {
		$sql = "DELETE FROM avisos WHERE id = $id";
		$this->db->query($sql);
	}
}