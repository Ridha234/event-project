<?php 
include 'connect.php'; 
session_start();

$title = $_POST['title'];
$desc = $_POST['description'];
$date = $_POST['date'];
$admin_id = $_SESSION['user_id'];

$conn->query("INSERT INTO events (title,description,date,admin_id) 
VALUES ('$title','$desc','$date','$admin_id')");

header("Location: admin.php");