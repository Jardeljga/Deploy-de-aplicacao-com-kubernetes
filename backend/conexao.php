<?php
$servername = "conexao-banco-de-dados";
$username = "root";
$password = "Bootcamp@123";
$database = "bootcamp";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
