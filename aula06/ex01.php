<?php 

include_once "form.php";

echo formulario("GET", "nome", "casa" , "bairro");
echo formulario("POST", "nome", "casa" , "bairro");
echo formulario("REQUEST", "nome", "casa" , "bairro");



//formulario("nome" , "email");





?>