<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercio 4 - array - PHP</title>
</head>



<body>


    <?php 

    $letras = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o");

    for($i = 0; $i < count($letras); $i++){
        if($letras[$i] != 'a' && $letras[$i] != 'e' && $letras[$i] != 'i' && $letras[$i] != 'o' && $letras[$i] != 'u' ){
            echo  " " . $letras[$i];
        }
        
        
    }








?>

</body>

</html>