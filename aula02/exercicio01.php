<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
</head>

<body>



    <form action="" method="GET">
        <label for="num"> Digite um numero: </label>
        <input name="num" type="number">

        <button type="submit">Enviar</button>
    </form>

    <?php

    $num =$_GET['num'];


    echo "<h1> O numero informado é: " . "$num </h1>";

    ?>

</body>

</html>