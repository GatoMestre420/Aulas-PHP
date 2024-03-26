<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="GET">
        <label for="num"><br> Informe o numero 1</label>
        <input name="num1" type="number">

        <label for="num"><br> Informe o numero 1</label>
        <input name="num2" type="number">

        <br>
        <button type="submit"> enviar </button>
    </form>

    <?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$resultado = ($num1 + $num2) * $num1;

echo "<h1> O resultado da soma dos dois primeiros numeros e multiplicado pelo primeiro é  : " . $resultado;

?>
</body>

</html>