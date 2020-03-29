<?php

if(isset($_POST["signup-submit"]))
{
    require "dbh.inc.php";
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordConf = $_POST["passwordConf"];

    if(empty($username) || empty($email) || empty($password) || empty($passwordConf))
    {
        header("Location:../signup.php?error=emptyfields&username=".$username."&email=".$email);
        exit();
    }
    elseif( !filter_var($email, FILTER_VALIDATE_EMAIL)&& !preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        header("Location:../signup.php?error=invalidemailusername");
        exit();
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location:../signup.php?error=invalidemail&username=".$username);
        exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        header("Location:../signup.php?error=invalidusername&email=".$email);
        exit();
    }
    elseif(!($password == $passwordConf))
    {
        header("Location:../signup.php?error=passwordcheck&email=".$email."&username=".$username);
        exit();
    }
    else
    {
        try{
            $db = Database();
            $query = $db->prepare("INSERT INTO users(userName, userEmail, userPassword) VALUES(:userName,:userEmail,:userPassword)");
            $query->bindParam("userName", $username, PDO::PARAM_STR);
            $query->bindParam("userEmail", $email, PDO::PARAM_STR);
            $hashedPW = hash('sha256', $password);
            $query->bindParam("userPassword", $hashedPW, PDO::PARAM_STR);
            $query->execute();
            header("Location:../signup.php?signup=$username");
        }catch(PDOException $e){
            header("Location:../signup.php?error=sqlerror");
            exit($e->getMessage());
        }
    }
}
else
{
    header("Location:../signup.php");
    exit();
}
