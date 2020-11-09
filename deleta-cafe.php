<?php
require 'cafe-banco.php';
require 'conexao.php';
$msg = '';
if (isset($_GET['id']) && !empty($_GET['id'])) {
	$id = addslashes($_GET['id']);

	$excluir = deletaCafe($conexao, $id);

	if ($excluir) {
		$msg = "Item excluido com sucesso";
		header('Location: cafe-lista.php?$msg');
	} else {
		echo $msg = 'Erro ao excluir o Item';

	}

}

?>