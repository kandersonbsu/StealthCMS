<?php
/*
$servername="localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";
*/
//TODO: Add in block for the remote server name
$servername = "us-cdbr-iron-east-05.cleardb.net";
$dBUsername = "b2b6bcdb20cf3a";
$dBPassword = "5dd350c0";
$dBName = "heroku_40e4688a774732a";

$connection = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$connection)
{
    die("Connection to Database failed! ".mysqli_connect_error());
}
