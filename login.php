<?php
/**
 * Created by PhpStorm.
 * User: stefania
 * Date: 11/04/17
 * Time: 21:44
 */
include("conecta.php");
include ("banco_usuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
echo $usuario;
/**if ($usuario==null){
    header("Location: index.php?login=false");
} else {
    header("Location: index.php?login=true");
}
die();*/