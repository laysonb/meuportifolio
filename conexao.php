<?php
#$conexao = mysqli_connect('localhost', 'root', '', 'cafeimetrodb');
#mysqli_set_charset($conexao, 'utf8'	);

$conexao = new mysqli('localhost', 'root', '', 'cafeimetrodb');
$conexao->set_charset('utf8');
?>