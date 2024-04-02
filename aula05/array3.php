<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 03 - Array - php</title>
</head>

<body>

    <form action="" method="GET">
        <label for="num"> <br> Digite a primeira nota: </label>
        <input type="number" name="nota1">
        <label for="num"> <br> Digite a segunda nota: </label>
        <input type="number" name="nota2">
        <label for="num"> <br> Digite a terceira nota: </label>
        <input type="number" name="nota3">
        <label for="num"> <br> Digite a quarta nota: </label>
        <input type="number" name="nota4">

        <br>
        <button type="submit">Enviar</button>

    </form>

    <?php

    $notas = array($_GET['nota1'] , $_GET['nota2'], $_GET['nota3'],$_GET['nota4']);

    // $nota1 = $_GET['nota1'];
    // $nota2 = $_GET['nota2'];
    // $nota3 = $_GET['nota3'];
    // $nota4 = $_GET['nota4'];
    $cont = 0;

    for($i = 0; $i < sizeof($notas); $i ++){
        $cont += $notas[$i];
    }

    $media = $cont/sizeof($notas);

    echo "<br> Média das notas é: " . $media;

    

?>

</body>

</html>