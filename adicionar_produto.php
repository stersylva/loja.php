<?php include("cabecalho.php"); 
 include ("conecta.php");
 include ("banco_produto.php");



$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
if (array_key_exists('usado', $_POST)){
	$usado = "true";
} else{
	$usado = "false";
}


if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) {?>
	<div class="alert alert-success">
		<p> O Produto <?= $nome; ?>, <?= $preco; ?>  adicinado com sucesso!</p>
	</div>
<?php } else {
	$msg = mysqli_error($conexao);
	?>
	<div class="alert alert-danger">
	<p>O Produto <?= $nome; ?>, <?= $preco; ?>não foi adicionado:<?=$msg?> </p>
	</div>
<?php

}
?>
<?php include("rodape.php"); ?>