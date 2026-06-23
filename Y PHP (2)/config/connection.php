<?php

$_SERVER="localhost";
$_USERNAME="root";
$_PASSWORD="";
$dbname="2509b1_php";

$conn = mysqli_connect($_SERVER, $_USERNAME, $_PASSWORD, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "Connected successfully";
}

?>