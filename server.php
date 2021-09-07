<?php
$hostName = "localhost";
$user = "root";
$password = "user";
$database = "esr_database";
$port = 3306;

// Open a connection to the mysql server
$connection = mysqli_connect($hostName, $user, $password, $database, $port);

if (mysqli_connect_error()) {
    echo "Unable to connect to MySQL database. " . mysqli_connect_error();
} else {
    echo "connected!";
    // echo "<br>";
    // echo "Hello World!";
    // echo "Hello World2";
}
