
<?php

require 'cabecalho.php';
require 'conexao.php';
require 'cafe-banco.php';
require 'tipo-banco.php';

$tipos = listatipo($conexao);

?>

<h1 class="text-center">Adicionar café</h1>



<div class="container">

	<form method="POST" action="recebeadicionacafe.php">

		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" class="form-control">
		</div>
		<div class="form-group">
			<label for="desricao">Descrição</label>
			<input type="text" name="descricao" class="form-control"  >
		</div>

		<div class="form-group">
			<label for="tipo">Tipo</label>
			<select class="form-control" name="tipos">
		<?php
foreach ($tipos as $tipo):

?>
		<option value="<?php echo $tipo['id_tipo']; ?>"><?php echo $tipo['nome']; ?>
		</option>
		<?php
endforeach;
?>
			</select>
		</div>

		<button class="btn btn-success btn-lg">Adicionar Café</button>
	</form>
<?php
require 'footer.php';
