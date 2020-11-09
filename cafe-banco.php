<?php

function alteraCafe($conexao, $id_cafe, $nome, $descricao, $tipos) {

	$query = "UPDATE cafe set nome= ?, descricao = ?, tipo_id =?  WHERE id_cafe = ?";
	$pstm = $conexao->prepare($query);
	$pstm->bind_param('ssii', $nome, $descricao, $id_cafe, $tipos);
	$rsult = $pstm->execute();
	return $result;
}

function listaCafe($conexao) {

	$cafes = array();

	$query = "SELECT id_cafe, c.nome as cafe_nome, c.descricao, t.nome as tipo_nome FROM cafe c inner join tipo t on c.tipo_id = t.id_tipo";
	$pstm = $conexao->prepare($query);
	$pstm->execute();
	$result = $pstm->get_result();

	while ($cafe = $result->fetch_assoc()) {
		array_push($cafes, $cafe);
	}
	return $cafes;
}

function buscaCafeId($conexao, $id) {

	$query = "SELECT * FROM cafe WHERE id_cafe = ?";
	$pstm = $conexao->prepare($query);
	$pstm->bind_param('i', $id);
	$result = $pstm->execute();
	return $result;
}
function deletaCafe($conexao, $id) {
	$query = "DELETE FROM cafe WHERE id_cafe =?";
	$pstm = $conexao->prepare($query);
	$pstm->bind_param('s', $id);
	return $pstm->execute();
}
function adicionaCafe($conexao, $nome, $descricao, $tipo) {

	$query = "INSERT INTO cafe SET nome =?, descricao=?, tipo_id=?";
	$pstm = $conexao->prepare($query);
	$pstm->bind_param('ssi', $nome, $descricao, $tipo);
	return $pstm->execute();
}

?>