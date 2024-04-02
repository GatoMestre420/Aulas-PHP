<?php 

$numero = array(1.1, 10.5 , 11.1, 5.1 , 1.1 , 22.5, 40.6, 50.3, 1.1, 33.3);

echo "numeros em ordem inversa: ";

for($i = count($numero)-1; $i >= 0; $i--){
    echo $numero[$i]." - ";
}

$totalnumero = count($numero);
echo "<br> Total: {$totalnumero}";

?>