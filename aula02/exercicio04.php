<form action="" method="GET">
    <label for="num"><br> informe a Primeira nota </label>
    <input name="nota1" type="number">

    <button type="submit">Enviar</button>
</form>

<?php

$media1 = 6.0;
$media2 = 7.0;
$media3 = 10.0;

echo "<h1> A média das três notas é : " . ($media1 + $media2 + $media3)  / 3;


?>