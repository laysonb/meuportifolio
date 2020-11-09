<?php

require_once 'cabecalho.php';
require_once 'conexao.php';
require_once 'cafe-banco.php';

?>
	<h1>Lista de café</h1>
	<table class="table table-striped table-bodered">
		<tr class="text-center bg-dark" style="color:#FFF;">
			<th>Nome</th>
			<th>Descrição</th>
			<th>Tipo</th>
			<th>Acções</th>
		</tr>
	<?php

$cafes = listaCafe($conexao);
foreach ($cafes as $cafe) {
	?>
		<tr class="text-center">
			<td><?php echo $cafe['cafe_nome'] ?></td>
			<td><?php echo $cafe['descricao'] ?></td>
			<td><?php echo $cafe['tipo_nome'] ?></td>
			<td>
				<a href="edita-cafe.php?id=<?php echo $cafe['id_cafe']; ?>" class="btn btn-primary">Alterar</a>
				<a href="deleta-cafe.php?id=<?php echo $cafe['id_cafe']; ?>" class="btn btn-danger">Delete</a>
			</td>
		</tr>

	<?php
}
?>

	</table>

<?php require_once 'footer.php';?>
