    <?php 
    $carro = null;
    if (isset($_get['id_carro'])== true) {
            $id_carro = $_get['id_carro'];
            require_once "conexao.php";
            $conexao = conectar();
            $sql = "SELECT * FROM carros WHERE id_carro = $id_carro";
            $resultado = mysqli_query($conexao,$sql);
            $carro = mysqli_fetch_assoc($resultado);
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="cadastrar-carro.php" method="post">
    <input type="hidden" name="id_carro" value=" <?=($carro == null) ? '' : $carro['id_carro'] ?> ">
    <input type="text" name="cor" value=" <?=($carro == null) ? '' : $carro['cor'] ?> ">
    <input type="marca" name="marca" value=" <?=($carro == null) ? '' : $carro['marca'] ?> ">
    <input type="hidden" name="nome_carro" value=" <?=($carro == null) ? '' : $carro['nome_carro'] ?> ">
    
</form>

    
</body>
</html>