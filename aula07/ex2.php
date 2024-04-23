<!DOCTYPE html>
<html>

<head>
    <title>Formulário PHP com Validação</title>
</head>

<body>

    <h2>Exemplo de Formulário PHP com Validação</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nome: <input type="text" name="nome">
        <br><br>
        Email: <input type="text" name="email">
        <br><br>
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php

    session_start();
    $nome = $_SESSION["nome"];
    $_SESSION["pessoa"] = [
        "nome" => "João",
        "idade" => 19,
    ];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Validar se o nome e o e-mail foram preenchidos
    if (empty($nome) || empty($email)) {
        echo "<p style='color:red;'>Por favor, preencha todos os campos.</p>";
    } else {
        // Validar o formato do e-mail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color:red;'>Formato de e-mail inválido.</p>";
        } else {
            echo "<h2>Dados submetidos com sucesso:</h2>";
            echo "Nome: " . $nome . "<br>";
            echo "Email: " . $email;
        }
    }
}
?>

</body>

</html>