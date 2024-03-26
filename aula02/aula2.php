<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula02</title>
</head>

<body>



    <form action="" method="GET">

        <label for=" num"><br> Digite um numero:<br> </label>
        <input name="num" id="num" type="text">

        <label for="text"><br> Digite um texto:<br> </label>
        <input name="text" id="text" type="text">

        <label for="numR"><br> Digite um numero real:<br> </label>
        <input name="numR" id="numR" type="number">

        <label for="nome"><br> Digite seu nome: <br> </label>
        <input name="nome" type="text">

        <label for="idade"><br> Digite sua idade: <br> </label>
        <input name="idade" type="number">

        <label for="curso"><br>Digite o curso: <br></label>
        <input name="curso" type="text">


        <button type="submit"><br> Enviar <br></button>
    </form>

    <?php

    //comentarios PHP

    echo "<h1> Olá Mundo! </h1>";

    $num = $_GET['num'];
    $texto = $_GET['text'];
    $float = $_GET['numR'];
    $bool = false;

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $faculdade = $_GET['curso'];

    echo "<div>";
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Facudade: " . $faculdade . "<br>";
    echo "Texto " . $texto . "<br>";
    echo "Numero Inteiro: " . $num . "<br>";
    echo "Numero Real: " . $float . "<br>";
    echo "</div>";





    ?>

</body>

</html>