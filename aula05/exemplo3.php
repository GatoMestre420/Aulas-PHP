<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<form action="" method="">
    <label for="nome"><br>Informe o nome do atleta:</label>
    <input type="text" name="nome">
    <label for="nome"><br>Informe a distancia do primeiro salto:</label>
    <input type="num" name="salto1">
    <label for="nome"><br>Informe a distancia do segundo salto :</label>
    <input type="text" name="salto1">
    <label for="nome"><br>Informe a distancia do terceiro salto:</label>
    <input type="text" name="salto3">
    <label for="nome"><br>Informe a distancia do quarto salto:</label>
    <input type="text" name="salto4">
    <label for="nome"><br>Informe a distancia do quinto salto:</label>
    <input type="text" name="salto5">


</form>

<body>




    <?php 

    $nome = $_GET['nome'];
    $salto[] =$_GET["salto1"];
    $salto[] =$_GET["salto2"];
    $salto[] =$_GET["salto3"];
    $salto[] =$_GET["salto4"];
    $salto[] =$_GET["salto5"];

    






?>


</body>

</html>