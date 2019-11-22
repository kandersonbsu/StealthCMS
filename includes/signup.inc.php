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
        $sql = "SELECT userName FROM users WHERE userName=?";
        $stmt = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location:../signup.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultTick = mysqli_stmt_num_rows($stmt);
            if($resultTick != 0)
            {
                header("Location:../signup.php?error=usernametaken&email=".$email);
                exit();
            }
            else
            {
                $sql = "INSERT INTO users (userName, userEmail, userPassword) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($connection);
                if(!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location:../signup.php?error=sqlerror");
                    exit();
                }
                else
                {
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
                    mysqli_stmt_execute($stmt);
                    header("Location:../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}
else
{
    header("Location:../signup.php");
    exit();
}
