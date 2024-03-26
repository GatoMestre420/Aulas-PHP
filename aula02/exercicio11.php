<?php

$altura = 1.80;
$sexo = "F";


if ($sexo == "F") {

    echo "<h1> Seu peso Ideal é: " . (62.1 * $altura) - 44.7;
} else if ($sexo == "M") {

    echo "<h1> Seu peso ideal é : " . (72.7 * $altura) - 58;
}