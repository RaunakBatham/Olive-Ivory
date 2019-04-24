<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "olive-ivory";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if( !$conn ){
    die("Error Connecting to Database." . mysqli_error());
}