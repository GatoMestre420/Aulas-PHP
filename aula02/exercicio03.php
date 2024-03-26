<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>

<body>



    <form action="" method="GET">

        <label for="num"><br>informe o primeiro numero: </label>
        <input name="num1" type="text">

        <label for="num"><br>informe o Segundo numero: </label>
        <input name="num2" type="text">
        <br>
        <button type="submit">Enviar</button>
    </form>

    <?php

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    echo "<h1> A soma dos numeros é: " . $num1 + $num2;

    ?>

</body>

</html>