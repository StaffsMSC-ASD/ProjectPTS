<?php


session_start();
include 'connect.php';

$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];
$USER_TYPE = $_POST['USER_TYPE'];


// For testing only
//echo $first."<br>";
//echo $last."<br>";
//echo $uid."<br>";
//echo $pwd."<br>";

$sql = "INSERT INTO USERS (USERNAME, PASSWORD, USER_TYPE)
    
VALUES ('$USERNAME', '$PASSWORD', '$USER_TYPE')";  
//$result = $conn->query($sql);

$result = mysqli_query($link , $sql);

header("Location: HomePage.php");


