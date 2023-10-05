<?php
$id_carro = $_POST['id_carro'];
$cor = $_POST['cor'];
$marca = $_POST['marca'];
$nome = $_POST['nome_carro'];

if ($id_carro == "") {

    $sql = "INSERT INTO carros (cor,marca,nome_carro) VALUES ('$cor','$marca','$nome')";

}else{ 
    $sql = "UPDATE carror SET cor = $cor, marca = $marca, nome_carro = $nome WHERE = id_carro = $id_carro";

}
require_once "conexao.php";
$conexao = conectar();
$resultado = mysqli_query($conexao,$sql);
if ($resultado) {
    echo "carro cadastrado";
    header("location:index1.php");
}else{
    echo "erro! o progamador não é bom he he he he";
}






?>