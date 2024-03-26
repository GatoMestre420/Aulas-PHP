<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="GET">
        <label for="num"> <br> Digite o valor: </label>
        <input name="valor" type="number">

        <br>
        <button type="submit"> Enviar </button>


    </form>



    <?php

$val1 = $_GET['valor'];

echo "<h1> 15% do valor " . $val1 . " é : " . $val1 * 0.15;

?>

</body>

</html>