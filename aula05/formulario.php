<?php 

// echo ' < form actio="" method ="GET">';

function formulario($nome, $numeros){

    for($i=0; $i<$numeros; $i++){
    echo "<br";
    echo "<label><br> Numero  " . ($i+1) . " </label> ";
    echo '<input name="num ' . ($i+1) . ' "type="text">';

}

echo '<br><br><button type="submit">Enviar</button> ';


}

formulario($nome, 10);


?>