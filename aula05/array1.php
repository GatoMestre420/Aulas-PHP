<?php 

$numeros = array("1" , "2", "3" , "4" , "5");

echo "Numeros: ";
for($i = 0; $i < count($numeros); $i++){
    echo $numeros[$i] . "  -  " ;
}



$totalnumeros = count($numeros);
echo "<br> Total: {$totalnumeros}";



?>