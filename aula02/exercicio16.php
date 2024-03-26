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
        <input type="number" name="num1">
        <label for="num"><br> Informe o numero 2</label>
        <input type="number" name="num2">

        <br>

        <button type="submit"> Enviar </button>


    </form>




    <?php 


    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $somaQuad = ($num1 * $num1) + ($num2 * $num2);

    echo "<br><h1> O Resultado da soma dos quadrado é : " . $somaQuad;





?>

</body>

</html>