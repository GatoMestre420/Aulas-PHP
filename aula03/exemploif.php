<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo IF ex1</title>
</head>

<body>



    <form action="" method="GET">
        <label for="num"> <br> Digite o ano que você nasceu: </label>
        <input name="ano" type="number">

        <br>
        <button type="submit"> Enviar</button>
    </form>

    <?php 


$ano = $_GET['ano'];
$idade = 2024 - $ano;
echo "<br> IDADE: " . $idade;

if($idade >= 18 && $idade < 70){
    echo "<br>Você deve Votar!!!!";
}
else if(($idade > 16 && $idade < 18) || $idade > 70){
    echo "<br> Você tem direito a votar! ";
}
else if($idade < 18){
    echo "<br>Você não pode votar!!";
}


?>

</body>

</html>