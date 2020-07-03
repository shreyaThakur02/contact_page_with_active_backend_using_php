<?php

error_reporting(0);
ini_set('display_errors', 0);

require('config.php');

extract($_POST);

$sql = "INSERT into contactus (name,email,subject,message,created_date) VALUES('" . $name . "','" . $email . "','" . $subject . "','" . $message . "','" . date('Y-m-d') . "')";


$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


// echo "Thank You For Contacting Us ";
header("Location: thanks.php");


$conn->close();


?>