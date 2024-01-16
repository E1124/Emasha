<?php

echo "</pre>";
  if(isset($_POST["submit"])){
        $Fname = $_POST["fname"];
        $Lname = $_POST["lname"];
        $Email = $_POST["email"];
        $Password = $_POST["pwdd"];
        $Confirm_password = $_POST["confirm_password"];

            require_once 'dbh.inc.php';
            require_once 'function.inc.php';

            $emptyInputs= emptyInputs($Email,$Password,$Confirm_password,$Fname,$Lname);
            $invalidEmail = invalidEmail($Email);           // check valid email
            $pwdMatch = pwdMatch($Password, $Confirm_password);
            $uidExists = uidExists($conn, $Email);

            if($emptyInputs !==false){
                header("Location: ../Signup.php?error=emptyinput");
                exit();
            }

            if($invalidEmail!==false){
                    header("Location: ../Signup.php?error=invalidEmail");
                    exit();
            }
            
            if($pwdMatch!==false){
                    header("Location: ../Signup.php?error=passwordmissmatch");
                    exit();
            }
            if($uidExists!==false){
                header("Location: ../Signup.php?error=passworduidExists");
                exit();
            }

            

            else{
                createUser($conn, $Fname, $Lname, $Email, $Password);
                header("Location: ../Login.php?error=non");
            }





  }

  ?>