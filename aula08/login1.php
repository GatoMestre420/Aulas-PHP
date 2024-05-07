<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    session_start();
    echo session_id();
    echo "br";

    
    function exibirFormulario()
    {
        echo "<form action=\"\" method=\"POST\">";
        echo "<label for=\"text\"><br>Usuario: </label>";
        echo "<input type=\"text\" name=\"usu\">";
        echo "<br>";
        echo "<label for=\"text\"><br>Senha: </label>";
        echo "<input type=\"text\" name=\"senha\">";
        echo "<br>";
        echo "<button type=\"submit\">Enviar</button>";
        echo "</form>";
    }

    $usuarios = [
        ["usu" => "miggas", "nome" => "miguel", "senha" => "123"],
        ["usu" => "gdc1000", "nome" => "danilo", "senha" => "abc"],
        ["usu" => "xorza", "nome" => "gabriel", "senha" => "123jf@"],
    ];

    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuarioInput = $_POST['usu'] ?? null;
        $senhaInput = $_POST['senha'] ?? null;
        $usuarioValido = false;

        foreach ($usuarios as $usuario) {
            if ($usuario['usu'] == $usuarioInput && $usuario['senha'] == $senhaInput) {
                $usuarioValido = true;
                $nome = $usuario['nome'];
                break;
            }
        }

        if ($usuarioValido) {
            echo "Sucesso no login, Bem vindo " . $nome . "!";
        }else if($usuarioInput == null || $senhaInput == null){
            echo "Digite as informações!";
            exibirFormulario();
        } else {
            echo "Login não encontrado!";
            exibirFormulario();
        }
    } else {
        echo "Fazer Login";
        exibirFormulario();
    }



    ?>

</body>

</html>