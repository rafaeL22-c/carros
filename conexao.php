<?php
function conectar(){
    $local = "localhost";
    $usuario = "root";
    $senha ="";
    $bd = "carros";


    $conexao = mysqli_connect($local,$usuario,$senha,$bd);

    return $conexao;
}
if ($conexao==true) {
    echo "o progamador é bom";
}else{
    echo "o progamador é paia";
}













?>