<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP aula 01 </title>
</head>

<body>

    <h1> Aula de PHP - RELEMBRANDO HTML </h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt delectus, quasi pariatur maxime quam veritatis
        est suscipit earum, inventore aliquid eaque in iusto adipisci sint. Atque fugit maxime numquam perspiciatis!</p>


    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, labore sit tempore blanditiis explicabo omnis ad.
        Ipsam, odio magni doloribus culpa ad quibusdam iste distinctio, fuga laudantium similique, sequi fugiat!Lorem
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, sunt exercitationem? Laborum officia hic
        similique soluta ab tenetur, eos accusantium! Nostrum ex expedita sed, facere id dolor cupiditate est quae!</p>

    <?php
    
        echo "<h2> Olá Mundo! </h2>";
        print "<h3> Também Funciona </h3>";

        $numero = 3;
        $numero2 = 5;
        $numero3 = $numero + $numero2;

        echo " -> " . $numero . " + " . $numero2 . " = ". $numero3;
    ?>


</body>

</html>