<?php

    if(isset($_POST['submit'])){
        $email = $_POST["email"];
        $pwd = $_POST["psw"];

        require_once 'dbh.inc.php';
        require_once 'function.inc.php';

        if(emptyInputLogin($email, $pwd) !== false){
            header('Location: ../Signup.php?error=emptyinput');
            exit();
        }

        loginUser($conn, $email, $pwd);

    }
    else{
        header('Location: ../Login.php');
    }
?>