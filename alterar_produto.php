<?php include("cabecalho.php");
include ("conecta.php");
include ("banco_produto.php");


$id = $_POST['id'];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
if (array_key_exists('usado', $_POST)){
    $usado = "true";
} else{
    $usado = "false";
}


if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)) {?>
    <div class="alert alert-success">
        <p> O Produto <?= $nome; ?>, <?= $preco; ?>  alterado com sucesso!</p>
    </div>
<?php } else {
    $msg = mysqli_error($conexao);
    ?>
    <div class="alert alert-danger">
        <p>O Produto <?= $nome; ?>, <?= $preco; ?>não foi alterado:<?=$msg?> </p>
    </div>
    <?php

}
?>
<?php include("rodape.php"); ?>