<?php
session_start();
if(isset($_POST["login-submit"]))
{
    require "dbh.inc.php";
    $username = $_POST["email"];
    $password = $_POST["password"];
    try{
        $db = Database();
        $query = $db->prepare("SELECT userName FROM users WHERE userName = :username AND userPassword = :password");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $hashedPW = hash('sha256', $password);
        $query->bindParam("password", $hashedPW, PDO::PARAM_STR);
        $query->execute();
        if($query->rowCount() > 0)
        {
            //login success
            $result = $query->fetch(PDO::FETCH_OBJ);
            $_SESSION["username"] = $result->userName;
            header("Location:../login.php?login=success");
        }
        else
        {
            header("Location:../index.php?login=failed");
        }
    }catch(PDOException $e){
        header("Location:../index.php?login=PDOException");
    }
}