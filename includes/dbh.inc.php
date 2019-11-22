<?php
/*
$servername="localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";
*/
//TODO: Add in block for the remote server name
$servername = "ec2-54-227-245-146.compute-1.amazonaws.com";
$dBUsername = "ywracqjqjwphhz";
$dBPassword = "9bb886781b1c8cdb4baedba375fb0313e2625e5b6cf6ea99e28644661235346e";
$dBName = "d29qbatk7ppsi6";

$connection = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$connection)
{
    die("Connection to Database failed! ".mysqli_connect_error());
}
