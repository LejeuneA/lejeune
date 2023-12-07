<?php
 $firstName = $_POST['firstName'];
 $lastName = $_POST['lastName'];
 $userEmail = $_POST['userEmail'];
 $message = $_POST['message'];

//  Database connection
$conn = new mysqli('localhost', 'root', '', 'lejeune_github');
if ($conn->connect_error) {
    die('connection Failed : ' .$conn->connect_error);
}else {
    $stmt = $conn->prepare("insert into registration(firstName, lastName, userEmail, message) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstName, $lastName, $userEmail, $message);
    $stmt->execute();
    echo "Registration Successfull...";
    $stmt->close();
    $conn->close();
}

































 ?>