<?php
        function emptyInputs($Fname,$Lname,$Email,$Password,$Confirm_password){
          

            if(empty($Fname) || empty($Lname) || empty($Email) || empty($Password) || empty($Confirm_password)){
                    $result = true;
            }
            else{
                $result = false;
            }
            return $result;
        }

        function invalidEmail($Email){
      
                if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
                    $result = true;
                }
                else{
                    $result = false;
                }
                return $result;
    }

        function pwdMatch($Password , $Confirm_password){
    
        if($Password !== $Confirm_password){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function uidExists($conn, $Email){
        $sql = "SELECT * FROM signup WHERE 	email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../Signin.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "s", ($Email));
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            return false;
        }
        mysqli_stmt_close($stmt);

       

    }

    function createUser($conn, $Fname, $Lname, $Email, $Password){
        $sql  = "INSERT INTO signup (FirstName, LastName, Email, pwd) VALUES (?,?,?,?) ;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:../Login.php?error=stmtfailed");
            exit();
        }

        $hashedpwd = password_hash($Password, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $Fname, $Lname, $Email, $hashedpwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location:../Login.php?error=none");
        exit();
    }



////////////////////////       login



function emptyInputLogin($email, $pwd){
        
        if(empty($email) || empty($pwd)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function loginUser($conn, $email, $pwd){
        $userExists = uidExists($conn, $email, $email);
        if($userExists === false){
            header("location: ../Signup.php?error=wronglogin1");
            exit();
        }
    
        $pwdHashed = $userExists["pwd"];
        $checkpwd = password_verify($pwd, $pwdHashed);
    
        if($checkpwd === false){
            header('Location: ../Signup.php?error=wronglogin2');
            exit();
        }
        
        else  if($checkpwd === true){
            session_start();
            $_SESSION["email"] = $userExists["Email"];  
            $_SESSION["pwdd"] = $userExists["pwd"];
            header('Location: ../HomeRegistered.php?error=none');
            exit();
        }
    }
