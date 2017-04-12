<?php
include("cabecalho.php");
include("conecta.php");
include("banco_produto.php");

$id = $_POST['id'];
removeProduto($conexao, $id);
header("Location: produto_lista.php?removido=true");
die();
?>

//codigo 200 está tudo ok, 404 tem alguma coisa erada com o servidor
/* 300