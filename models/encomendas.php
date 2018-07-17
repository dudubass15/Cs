<?php
class encomendas extends model {

	public function ListarEncomendas() {
		$array = array();

		$user_id = $_SESSION['id'];
		$user_nome = $_SESSION['nome'];

		$sql = "SELECT e.nome_produto
					 , e.empresa
					 , e.observacao
					 , e.status
					 , e.data_postagem
					 , m.id
					 , m.nome_morador
					 , m.celular
					 , m.cpf
					 , m.email
					 , u.id
					 , u.nome
				  FROM encomendas e
			INNER JOIN moradores m ON m.id = e.moradores_id
			INNER JOIN usuarios u ON u.id = m.usuarios_id 
				  WHERE u.nome = '$user_nome' 
				  AND e.status = '0' ";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0 ) {
			$array = $qry->fetchAll();
		}

		return $array;
	}

	public function ContagemEncomendas(){
		$array = array();

		$user_id = $_SESSION['id'];
		$user_nome = $_SESSION['nome'];

		$sql = "SELECT COUNT(*)
					 , moradores.id
					 , moradores.nome_morador
					 , moradores.celular
					 , moradores.cpf
					 , moradores.email
					 , usuarios.id
					 , usuarios.nome 
				  FROM encomendas
			INNER JOIN moradores ON moradores.id = encomendas.moradores_id
			INNER JOIN usuarios ON usuarios.id = moradores.usuarios_id 
				  WHERE usuarios.nome = '$user_nome' 
				  AND encomendas.status = '0' ";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0 ) {
			$array = $qry->fetchAll();
		}

		return $array;
	}
}