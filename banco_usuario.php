<?php
/**
 * Created by PhpStorm.
 * User: stefania
 * Date: 11/04/17
 * Time: 21:47
 */
function buscaUsuario ($conexao, $email, $senha){
    $senhaMd5 = md5($senha);
    $query = "select * from usuario where email='{$email}' and senha='{senha}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}