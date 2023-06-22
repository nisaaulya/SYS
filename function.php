<?php

$sname = "localhost";
$unmae = "root";
$password = "";
$db_name = "websiteku";

$conn = mysqli_connect("localhost", "root", "", "websiteku");


function contact($data)
{
    global $conn;

    $name = $data['name'];
    $email = $data['email'];
    $phone = $data['phone'];
    $message = $data['message'];

    mysqli_query($conn, "INSERT INTO contact (contactID, contactName, contactEmail, contactPhone, contactMessage) VALUES('', '$name', '$email', '$phone', '$message')");

    return mysqli_affected_rows($conn);
}
