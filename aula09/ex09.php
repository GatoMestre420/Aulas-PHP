<?php 

echo password_hash('senha123', PASSWORD_DEFAULT);

$hash = '';

if(password_verify('senha123', $hash)){
    echo '<br> Passoword is valid';
} else {
    echo '<br> Invalid password';
}

?>