<?php
session_start();

include "database_conn.php";

if (!empty($_POST)) {

    $username = mysqli_real_escape_string($db_connect, $_POST['username']);
    $password = sha1($_POST['password']);

    $query = "SELECT userid, username FROM users WHERE username = '$username' AND password = '$password'";
    $login = mysqli_query($db_connect, $query);

    if ($login) {
        if (mysqli_num_rows($login) === 1) {
            $userdata = mysqli_fetch_assoc($login);

            $_SESSION['id'] = $userdata['userid'];
            $_SESSION['username'] = $userdata['username'];

            header("Location: movies.php");
            exit();
        } else {
            header("Location: index.php?error=1");
            exit();
        }
    } else {
        echo "Erro na consulta: " . mysqli_error($db_connect);
    }
}
?>