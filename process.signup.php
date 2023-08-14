<?php
if(empty($_POST["fname"]) || empty($_POST["lname"])){
    die("Name is requierd");
}

if(! filter_var($_POST["email"] , FILTER_VALIDATE_EMAIL)){
    die("Valid email is required");
}

if(! preg_match("/[a-z]/i" , $_POST["password"])){
    die("Password must contain at least one letter");
}

if(! preg_match("/[0-9]/i" , $_POST["password"])){
    die("Password must contain at least one Number");
}

if($_POST["password"] !== $_POST["password_confirmation"]){
    die("Passwords must match");
}

if(! preg_match("/[0-9]/i" , $_POST["mobile"])){
    die("Mobile number must at least 10 number");
}

// ------------For sequir Password-----------
$password_hash = password_hash($_POST["password"] , PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (F_Name , L_Name , Email , Password , Mobile , Date)
        VALUES (? , ? , ? , ? , ? , ? )" ;

$stmt = $mysqli->stmt_init();

if( ! $stmt->prepare($sql)){
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssssss", $_POST["fname"], $_POST["lname"], $_POST["email"], $password_hash, $_POST["mobile"], $_POST["dateInput"]);

if ($stmt->execute()) {
    header("Location: signup.success.html");
    exit;
}


// Execute the prepared statement
else {
    if($mysqli->errno === 1062){
        die("email already taken");
    }
    else{
        die($mysqli->error . " " . $mysqli->errno);
    }
}

// Close the prepared statement
$stmt->close();

?>