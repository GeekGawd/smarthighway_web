<?php
include "config.php";

    if (isset($_POST['username']) && isset($_POST['password'])){
        function validate($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $username=validate($_POST['username']);
        $password=validate($_POST['password']);

        if (empty($username)){
            header("Location: login.php?error=User Name is required");
            exit();
        }
        else if(empty($password)){
            header("Location: login.php?error=Password is required");
            exit();
        }
        else{
            // echo "valid input";
            header("Location: tolling.php");
            // $sql = "SELECT * from users"
        
        }
        
    }
    else{
        header("Location: tolling.php");
        exit();
    }
    ?>