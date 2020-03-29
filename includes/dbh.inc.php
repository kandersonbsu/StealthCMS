<?php

$servername="localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";

//TODO: Add in block for the remote server name
define('servername', 'us-cdbr-iron-east-05.cleardb.net');
define('username', 'b2b6bcdb20cf3a');
define('password', '5dd350c0');
define('dbname', 'heroku_40e4688a774732a');

//define('servername', 'localhost');
//define('username', 'root');
//define('password', '');
//define('dbname', 'loginsystem');

function Database(){
    try{
        $handle = new PDO('mysql:host='.servername.';dbname='.dbname.'', username, password);
        return $handle;
    }catch(PDOException $e){
        echo $e->getMessage();
        die("Connection to Database failed!");
    }
}

//$connection = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

//if(!$connection)
//{
//    die("Connection to Database failed! ".mysqli_connect_error());
//}
