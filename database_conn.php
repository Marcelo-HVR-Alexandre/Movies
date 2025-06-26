<?php

$hostname = 'localhost'; // hostname
$database_username = 'root'; // database username
$database_password = ''; // database password
$database_name = 'code'; // database name


$db_connect = mysqli_connect($hostname, $database_username, $database_password, $database_name);

if (!$db_connect) {
    die('Erro de ligação à Base de Dados: ' . mysqli_connect_error());
}
?>