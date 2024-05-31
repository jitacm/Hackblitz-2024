<?php

include "db_connection.php";


$fullname = mysqli_real_escape_string($connection,$_POST['fullname']);
$email= filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
$password= mysqli_real_escape_string($connection,$_POST['password']);


$stmt = $connection->prepare("insert into login(fullname, email, password)
values(?, ?, ?)");
$stmt->bind_param("sss", $fullname, $email,$password);
$stmt->execute();
$response = ['success' => true, 'message' => 'Registration successful'];
echo json_encode($response);
$stmt->close();
$connection->close();

?>
