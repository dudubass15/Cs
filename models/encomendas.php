<?php
class encomendas extends model {

	public function ListarEncomendas() {
		$array = array();

		$user_id = $_SESSION['id'];
		$user_nome = $_SESSION['nome'];

		$sql = "SELECT encomendas.nome_produto, encomendas.empresa, encomendas.observacao, encomendas.status, encomendas.data_postagem AS encomendas,
			moradores.id, moradores.nome_morador, moradores.celular, moradores.cpf, moradores.email AS moradores,
			usuarios.id, usuarios.nome AS usuarios
			FROM encomendas
			INNER JOIN moradores ON moradores.id = encomendas.moradores_id
			INNER JOIN usuarios ON usuarios.id = moradores.usuarios_id WHERE usuarios.nome = '$user_nome'";
		$qry = $this->db->query($sql);

		if ($qry->rowCount() > 0 ) {
			$array = $qry->fetchAll();
		}

		return $array;
	}
}

?> 