<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "shopping";

// create database connection
$con = mysqli_connect($serverName, $userName, $password, $dbName);
// check database connection
if (mysqli_connect_error()) {
    echo "failed to connect";
    exit();
} else {
    echo "";
}
