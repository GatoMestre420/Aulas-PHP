<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercio 5 array - php</title>
</head>

<body>


    <?php 

        $numeros = array(1, 2, 3 , 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
        $impar = array();
        $par = array();


        for($i=0; $i < count($numeros);$i++){
            if($numeros[$i] %2 == 0){
                $par[] = $numeros[$i];
            }else{
                $impar[] = $numeros[$i];
            }
        }

        for($i=0; $i < count($numeros);$i++){
            echo $numeros[$i]. " ";
        }

        echo "<br>";
        
        for($i=0; $i < count($par);$i++){
            echo $par[$i] . " ";
        }

        echo "<br>";
    
        for($i=0; $i < count($impar);$i++){
            echo $impar[$i] . " ";
        }


?>

</body>

</html>