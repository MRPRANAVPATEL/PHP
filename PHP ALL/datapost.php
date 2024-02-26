<?php

include "conection.php";


$full_name = $_POST["full_name"];
$departure_location = $_POST["departure_location"];
$arrival_location =  $_POST["arrival_location"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO pranavdata (full_name, departure_location, arrival_location, contact, address, email, password) VALUES ('$full_name', '$departure_location', '$arrival_location', '$contact', '$address', '$email', '$password')";

$rs = $conection->query($sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>