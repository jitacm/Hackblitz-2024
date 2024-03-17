<?php
$servername = "localhost";
$username = "WaniShells";
$password = "wqE5VUapWQ2Y(ADJ";
$dbname = "hackthon";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


?>
