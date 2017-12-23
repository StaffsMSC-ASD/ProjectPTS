<?php
session_start();
include 'connect.php';

$FIRSTNAME = $_POST['FIRSTNAME'];
$SURNAME = $_POST['SURNAME'];
$AGE = $_POST['AGE'];
$ADDRESS = $_POST['ADDRESS'];



$sql = "INSERT INTO PASSENGER_DETAIL (FIRSTNAME, SURNAME, AGE, ADDRESS )
    
VALUES ('$FIRSTNAME', '$SURNAME', '$AGE', '$ADDRESS')";  
//$result = $conn->query($sql);

$result = mysqli_query($link , $sql);

header("Location: HomePage.php");





