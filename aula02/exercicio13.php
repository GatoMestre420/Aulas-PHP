<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        <label for="num"> <br> Informe os valores: </label>
        <input name="valor" type="number">
        <label for="num"> <br> Informe os valores: </label>
        <input name="valor1" type="number">
        <label for="num"> <br> Informe os valores: </label>
        <input name="valor2" type="number">

        <br>

        <button type="submit"> Enviar</button>

    </form>



    <?php


$val1 = $_GET['valor'];
$val2 = $_GET['valor1'];
$val3 = $_GET['valor2'];
//$media = 
$media = ($val1 + $val2 + $val3) / 3;

echo "<h1>A média das notas é: " . $media;

?>

</body>

</html>