<?php include ("cabecalho.php");
 include ("conecta.php");
 include ("banco_produto.php");?>

<?php
if(array_key_exists("removido", $_GET )&& $_GET["removido"]==true){
?>
    <p class="alert-success">Produto apagado com sucesso. </p>
<?php
    }
?>



<table class="table table-striped table-bordered">
    <?php

        $produtos = listarProdutos($conexao);
        foreach($produtos as $produto):
    ?>
    <tr>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['preco'] ?></td>
        <td><?= substr($produto['descricao'], 0, 40) ?></td>
        <td><a class="btn btn-primary"
                href="produto_altera_formulario.php?id=<?=$produto['id']?>">alterar</a> </td>
        <td>
            <form action="remove_produto.php?id=<?=$produto['id']?>" method="post">
                  <input type="hidden" name="id" value="<?=$produto['id']?>">
                  <button class="btn btn-danger">remover</button>
            </form>
        </td>
    </tr>
    <?php
        endforeach;
    ?>
</table>

<?php include ("rodape.php");?>
