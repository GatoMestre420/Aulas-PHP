<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: <?php echo isset($_POST['cor']) ? $_POST['cor']:'#ffffff'?>" ;>
    <h1>
        Seja Bem vindo!
    </h1>
    <p>Escolha uma cor para a página</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        <label for="cor">Selecione uma cor</label>
        <input type="color" id="cor" name="cor">

        <button type="submit">Aplicar</button>
    </form>


</body>

</html>