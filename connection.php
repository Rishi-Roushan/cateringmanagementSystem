<?php
$host = "localhost";
$user = "root";
$password = "register@123";
$db = "cateringmanagementSystem";

$conn = mysqli_connect($host, $user, $password, $db);
if ($conn) {
    echo "";
} else {
    echo "connection failed";
}