<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="GET">
        <label for="num"><br>Informe a 1ª nota :</label>
        <input type="num" name="nota1">
        <label for="num"><br>Informe a 2ª nota :</label>
        <input type="num" name="nota2">
        <label for="num"><br>Informe a 3ª nota :</label>
        <input type="num" name="nota3">
        <label for="num"><br>Informe a 4ª nota :</label>
        <input type="num" name="nota4">

        <br>

        <button type="Submit">Enviar</button>

    </form>


    <?php 

$notas[] = $_GET["nota1"];
$notas[] = $_GET["nota2"];
$notas[] = $_GET["nota3"];
$notas[] = $_GET["nota4"];

for ($i = 0; $i < count($notas); $i++) {
    $soma += $notas[$i]; 
}



for($i = 0; $i < count( $notas );   $i++) { 
    echo "Nota ".$i+1 . ": " . $notas[$i] . "<br>";

}

$mediaFinal = $soma / count($notas);

echo "<br> A média das 4 notas é : " . $soma/count($notas) . "<br>";


    if($mediaFinal >= 70){
        echo "Aluno Aprovado!";
    }elseif ($mediaFinal < 70 && $mediaFinal >= 50) {
        echo "Aluno em Recuperação!";
    } else {
        echo "Aluno Reprovado! ";
    }
    


?>
</body>

</html>