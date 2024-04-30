<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php



function ($exibirFormulario){
echo "<form action=\"\" method=\"POST\">";
echo "<label for=\"text\"><br>usuario: </label>";
echo "<input type=\"text\" name=\"usu\">";

echo "<form action=\"\" method=\"POST\">";
echo "<label for=\"text\"><br>Senha: </label>";
echo "<input type=\"text\" name=\"senha\">";
echo "<br>";
echo "<button type=\"submit\">Enviar</button>";
echo "</form>";
};



$usuarios = [
    ["usu" => "miggas", "nome" => "miguel" , "senha" => "123"],
    ["usu" => "gdc1000", "nome" => "danilo" , "senha" => "abc"],
    ["usu" => "xorza", "nome" => "gabriel" , "senha" => "123jf@"],
];

    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        $usuarioInput = $_POST['usu'];
        $senhaInput = $_POST['senha'];
        $usuarioValido = false;



       if(is_null($usuario) && is_null($senha)){
        echo "fazer Login";
        include_once "form-login.php";
       }else{
        if(verUsuarios($usuario, $senha)){
            echo "--fazendo login";
            echo "<br> Bem vindo...";
        }else{
            echo "-- tente Novamente";
            incluce_once "form-login.php";
        }
       }


    foreach($usuarios as $usuario){
        if($usuario['usu'] == $usuarioInput && $usuario['senha'] == $senhaInput){
            $usuarioValido = true;
            $nome= $usuario['usu'];
            $exibirFormulario = false;
            break;
        }else{
            $login = false;
            break;
        }
        
    }
    
    if($usuarioValido == true){
        echo "Sucesso no login, Bem vindo " . $nome;
        $login = true;
    }else{
        echo "Login não encontrado!";
        
    }

} 


?>

</body>

</html>