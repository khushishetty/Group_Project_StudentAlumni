<?php

include "database_connect.php";

$fname = $_GET["firstname"];
$lname = $_GET["lastname"];
$email = $_GET["email"];
$type = $_GET["usertype"];
$message = $_GET["message"];

    
$sql = "INSERT INTO Contact (UserId, FirstName, LastName, Email, UserType, Message)
VALUES (NULL,'$fname', '$lname', '$email','$type','$message')";

$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

include "Contact.php";
?>
