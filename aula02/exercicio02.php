<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>

<body>



    <form action="" method="GET">
        <label for="num"> Digite um numero:</label>
        <input name="num" id="num" type="text">

        <button type="submit">Enviar</button>

    </form>

    <?php

    $raio = $_GET['num'];
    $perimetro = $raio * M_PI;
    $area = (M_PI) * ($raio * $raio);

    echo "<h1> Raio " . "$raio</h1>" . "<br>";
    echo "<h1> Perimetro:  " . "$perimetro</h1>" . "<br>";
    echo "<h1> Area:  " . "$area</h1>";

    echo "<h3>  </h3>";
    echo "<br>";
    echo "Abs - modulo: " . abs($raio);
    echo "<br>Potencia : " . pow($raio, 4);
    echo "<br>Raiz Quadrada: " . sqrt($raio);

    echo "<br>ArredondaR NORMAL: " . round($raio);
    echo "<br> Arredondar p/ baixo: " . floor($raio);
    echo "<br> Arredondar para cima: " . ceil($raio);
    echo "<br> Parte inteira: " . intval($raio);


    echo "</p>";

    echo "<h3> Mini Matemática </h3>";

    $a = 4; //4
    $b = 5; //5
    $c = $a + $b; //9

    $c = $c + 5;
    $c += 5;

    $b = $b + $a;
    $b += $a;

    $a = $a + 1;
    $a += 1;
    $a++;

    $b = $b - 1;
    $b -= 1;
    $b--;

    $a++;
    ++$a;

    $b--;
    --$b;

    $b = 1999;
    echo "Valor:" . $b;

    ?>

</body>

</html>