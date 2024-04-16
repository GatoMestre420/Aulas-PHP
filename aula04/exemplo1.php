<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Repetição</title>
</head>

<body>


    <h1> -- FOR -- </h1>
    <?php 

for($i = 0; $i < 10; $i++){

    echo "<br> Meu for funciona !! -- Linha : {$i}";
        for($j = 0; $j < 5 ; $j++){
            echo " - coluna: {$j} | ";
        }

        
}


?>

    <h2> -- WHILE -- </h2>;
    <?php 

$a = 0;
    while($a < 10){
        echo " - {$a}";
        $a++;
    }

?>

    <h2> -- DO WHILE -- </h2>

    <?php 
    $var = 87;
    do{
        echo "<br> Numero: " . $var;
        $var += 3;

    }while($var<100);



?>

    <h2>LISTA / ARRAY</h2>

    <?php 

$comida = array("batata" , "Miojo" , "Polenta");
echo print_r($comida);


$comidas[3] = "Arroz";
$comidas[] = 30.5;
$comidas[] = true;
$comidas[20] = "Feijão";
echo print_r($comidas);

$totalComida = count($comidas);
echo "<br> Total:   {$totalComida}";


echo "<h4>Lista de compras: </h4>";
// for($i = 0; $i < $totalComida; $i++){
//     echo "<li> Item: {$i} - " . $comidas[$i];

// }

foreach($comidas as $comida)   //para cada $comida dentro do array $comidas faça:
{
    echo "<li> Item: - " . $comida;

}

echo "<h4>Array com indice str: </h4>";
$pessoa = array("nome" => "Luan","idade" => 19, "esta" => "Feliz !");
echo $pessoa["nome"];
echo $pessoa["idade"];
echo $pessoa["esta"];

foreach($pessoa as $chave => $valor){
    echo "<li> {$chave}  - {$valor}";

}

echo "<h4> Array de Array > :</h4>";
$varias_pessoas = array(
    array("Nome" => "Luan","idade" => 19, "esta" => "Feliz !"),
    array("Nome" => "Maria","idade" => 23, "esta" => "Cansada !"),
    array("Nome" => "João","idade" => 17, "esta" => "Triste !")
);

echo print_r($varias_pessoas);

for($i=0; $i < count($varias_pessoas); $i++){
    echo "<br> Uma pessoa";
    echo print_r($varias_pessoas[$i]);
    
    foreach($varias_pessoas[$i] as $chave => $valor){
        echo "<li> {$chave} - {$valor}";
    }
}

?>




</body>

</html>