<!DOCTYPE html>
<html>

<head>
    <title>Formulário PHP</title>
</head>

<body>

    <h2>Exemplo de Formulário PHP</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nome: <input type="text" name="nome">
        <br><br>
        Email: <input type="text" name="email">
        <br><br>
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    echo "<h2>Dados submetidos com sucesso:</h2>";
    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email;
}
?>

</body>

</html>