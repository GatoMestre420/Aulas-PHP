<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php 

    $jogos = array("Fallout" , "MassEffect", "Skyrin");
    echo print_r($jogos);

    $jogos[3] = "GTA";
    $jogos [4] = "Rocket League";
    echo print_r($jogos);

    $totalJogos = count($jogos);  
    echo "<br> Total:  {$totalJogos}";    


    











?>




</body>

</html>