<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario1</title>
</head>

<body>

    <!-- <form action="" metho="GET">
        <label for="text"><br>Nome: </label>
        <input type="text" name="nome">
        <label for="text"><br>Email: </label>
        <input type="text" name="email">
        <label for="num"><br>telefone: </label>
        <input type="number" name="telefone">
        <label for="text"><br>Escola: </label>
        <input type="text" name="escola">
        <label for="text"><br>bairro: </label>
        <input type="text" name="bairro">
        <br>
        <button type="submit">Enviar</button>


    </form> -->

    <?php 

    function formulario($mtd, ...$item){
        echo "<form action=\"resposta.php\" method=\"{$mtd}\">";
        for($i=0;$i<count($item); $i++) {
            $strcampo = $item[$i];
            echo"<label for=\"\"$strcampo</label>";
            echo"<input type\"text\" name=\"$strcampo\">";
            echo '<br>';

        }
        echo "<input type='submit'>Enviar</input>";
        echo "</form>";
        
    };

    // echo formulario("get","nome","casa", "bairro");

    // $formulario = array($_GET["nome"], $_GET["email"], $_GET["telefone"], $_GET["escola"], $_GET["bairro"]);
    $ventilador = "vrum";
    $carrinhoMercado = "nhecnhec";

    



    ?>


</body>

</html>