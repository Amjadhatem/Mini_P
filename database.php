<?php

$host = "localhost";
$daname = "login_db";
$username = "root";
$password = "";

$mysqli = new mysqli(hostname: $host , username: $username , password: $password , database: $daname);

if($mysqli->connect_errno){
    die("Connection Error: " . $mysqli->connect_error);
}

return $mysqli;

?>