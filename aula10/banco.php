<pre>

<?php 

$banco = new mysqli("localhost:3307" , "root", "", "minores");
//echo print_r($banco);


// echo "<br>------------------------------------------------------";
// $busca = $banco -> query("SELECT * FROM usuarios");
// echo print_r($busca);


// echo "<br>------------------------------------------------------";
// // $obj = $busca -> fetch_object();
// // echo print_r($obj);

// echo "<br>------------------------------------------------------";
// while($obj = $busca -> fetch_object()){
//     echo print_r($obj);
// }

// echo "<br>------------------------------------------------------";
//    $busca = $banco -> query("SELECT cod, usuario, nome, senha FROM usuarios WHERE usuario ='gdc1000'");

// $usu = $busca->fetch_object();
// echo print_r($usu);

// echo "<br> C:" . $usu->cod;
// echo "<br> U:" . $usu->usuario;
// echo "<br> N:" . $usu->nome;
// echo "<br> S:" . $usu->senha;



//$senha = password_hash($senha, PASSWORD_DEFAULT);


    function criarUsuario($usuario, $nome, $senha){
        global $banco;

        $senha = password_hash($senha, PASSWORD_DEFAULT);

        $q = "INSERT INTO usuarios(cod, usuario, nome, senha) VALUES (NULL, '$usuario', '$nome', '$senha')";
        
        $resp = $banco -> query($q);
        echo "<br> Query > $q";
        echo var_dump($resp);


    }

    // criarUsuario("Roberto", "roberto", "111");
    // criarUsuario("maria_22", "maria", "senha");
    // criarUsuario("clarinha_fc", "clara", "senha2");
    // criarUsuario("GatoMestre420", "Luan", "oraxiquiminores");


    // ---------------- UPDATE ---------------------------------
    // $novaSenha = 'pimba';
    // $q = "UPDATE usuarios SET senha='$novaSenha' WHERE usuario='clarinha_fc'";

    // $resp = $banco -> query($q);
    // echo "<br> Query : $q";
    // echo var_dump($resp);


    // ------------------- DELETE ------------------------------
    $q = "DELETE FROM usuarios WHERE usuario='maria_22'";

        $resp = $banco -> query($q);
        echo "<br> Query : $q";
        echo var_dump($resp);





?>
</pre>