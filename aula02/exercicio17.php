<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="" method="GET">
        <label for="num"><br> Informe a velocidade inicial em M/S</label>
        <input type="num" name="velo1">

        <br>

        <button type="Submit">Enviar</button>


    </form>



    <?php 


$velo_mps = $_GET['velo1'];
$velo_kmh = $velo_mps * 3.600;


echo "<br><h1> A velocidade de: " . $velo_mps . " metros por segundo: ";
echo "<br><h1> É igual a velocidade de " . $velo_kmh . " KM por hora: ";






?>


</body>

</html>