<?php 
     $conn = mysqli_connect('server','','','');
//only use it for testing when go online remove it (sql injection Hacking)
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}


