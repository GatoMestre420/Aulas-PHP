<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="GET">
        <label for="num"> <br> Digite o numero: </label>
        <input name="valor" type="number">

        <br>
        <button type="submit"> Enviar </button>



        <<?php 



$valor = $_GET['valor'];

echo "<h1> 5% do valor " . $valor . " é :" . $valor * 0.05;
echo "<h1> 50% do valor " . $valor . " é " . $valor * 0.50;




?> </body>

</html>