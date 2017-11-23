<?php

session_start();

include("connection.php");

$query="SELECT * FROM passengers WHERE pasenger_id=".$_SESSION['pasenger_id'];

if(isset($_POST['submit'])
 
 {
   $result=mysqli_query(&link,$query);
   
 }

>