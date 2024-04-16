<?php

    echo "<h1> FUNCOES </h1>";

    function nomeBonito() {
        echo "<p> Testando a minha funcao bonita. </p>";
    
    }

    nomeBonito();
    nomeBonito();
    nomeBonito();
    nomeBonito();

    function criarTitulo($texto) {
        echo "<h2>  . ($texto).  </h>";
    }

    function tituloLegal($texto){
        echo "<h3> ############";
        echo "## " . $texto . "##";
        echo"############ </h3>";

        tituloLegal("Exercicio 01");

        criarTitulo("Contas");

        function calcularMedia($nome, $nota1, $nota2){
            $media = ($nota1 + $nota2) / 2;

        
        if($media >=7){
            echo "<p>O Aluno(a) {$nome} foi 
            aprovado com média {$media}. </p>";
        }else {
            echo "<p>O Aluno(a) {$nome} foi reprovado com 
            média ... melhor não saber. ({$media})</p>";
        }
            
        }

        calcularMedia("João", 3.0, 7.0);
        calcularMedia("Murilo", 8.0, 6.0);
        calcularMedia("Gabriela", 8.0, 7.5);
        calcularMedia("João", 3.0, 5.0);

    function somar($num1, $num2){
        $soma = $num1 + $num2;
        echo "<li> {$num1} + {num2} = {soma}";

    }
    }
    
    echo "Listinha de somas: ";
    somar(2, 2);
    somar(5, 8);
    somar(10, 77);

    function somarNumero(...$numeros){
        //echo "<br>! . print_r($numeros);
        $soma = 0;
        echo "<li>";
        for ($i=0; $i < count($numeros); $i++) {
            $soma += $numeros[$i] . " + ";
        }
        echo " = " . $soma;
        
    }

    somarNumero(2,2);
    somarNumero(2, 2, 10, 32);
    somarNumero(2, 2, 80, 34, 47);

    function seila($nome, $numero, $texto, ...$numeros) {
        echo "<br>";
        echo print_r($numeros);
    }

    seila("nome", 10, "textao", 10, 5, 17, 22, "outro",
    "mais um texto", true, false, 10, "textinho");

    $sebastiao = true;
    if($sebastiao){
        echo "<br><br>teste";

        function telhado(){
            echo "Estou arrumando o telhado...";
        }
    }
    
    if($sebastiao){
        telhado();
    }
    
    quebra();

    function chico(){

        echo " - Eu tentei - ";
        function moedas(){

            echo " - não contava com a minha astucia - ";

        }
    }

    chico();
    moedas();
    
    quebra();
    tituloLegal("Coisas 'Normais'");

    function subtrair($n1, $n2){
        $resposta = $n1 - $n2;
        return $resposta;
    }

    $rep = subtrair(30, 30);
    echo $resp;

    quebrinha();
    echo subtrair(40, 10);

    function subtrairDiferente(&$var){
        $var = 80;
        echo "Var: " . $var;
    }

    $pizza = 10;

    echo"<br>Pizza: " . $pizza;
    subtrairDiferente($pizza);
    echo "<br>Pizza; " . $pizza;

    quebra();

    function divisao($num1, $num2){
        echo ($num1);
        echo ($num2);
        $resp = $num1 / $num2;
        echo "<br> {num} / {num2} = {resp}";
    }

    divisao(10, 5);
    
    ?>