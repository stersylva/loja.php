<?php include("cabecalho.php"); ?>
		<h1>Bem Vindo!</h1>


        <h2>Login</h2>
        <form action="login.php" method="post">
            <table class="table">
                <tr>
                    <td>Email</td>
                    <td><input class="form-control" type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Senha</td>
                    <td><input class="form-control" type="password" name="senha"></td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-primary">Login</button> </td>
                </tr>
            </table>
        </form>
	<?php include ("rodape.php"); ?>



<?php
/*Por padrão, quando uma requisição é bem sucedida,
o servidor devolve um código (um status) avisando o navegador que está tudo certo.
Quando tudo dá certo, o código é 200.
Quando você tenta acessar um endereço que não existe, o código é 404 (Page Not Found).
Erro no servidor? 500. Redirecionamento? 302.*/?>
