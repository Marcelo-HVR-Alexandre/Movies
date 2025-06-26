<?php
 
include "database_conn.php";
 
if (count($_POST) > 0)

{

    $username = $_POST["username"];

    $password =SHA1($_POST["password"]);
 
 
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
 
    if (mysqli_query($db_connect, $query)) {

        $message = 1;

    } else {

        $message = 4;

    }

}
 
header("Location: index.php?message=" . $message . ""); 

?>
 