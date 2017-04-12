<?php
/**
 * Created by PhpStorm.
 * User: ster
 * Date: 02/01/2017
 * Time: 21:33
 */
function listaCategorias($conexao){
    $categorias = array();
    $query = "select * from categorias";
    $resultado = mysqli_query($conexao, $query);
    while ($categoria = mysqli_fetch_assoc($resultado)){
        array_push($categorias, $categoria);
    }
    return $categorias;
}