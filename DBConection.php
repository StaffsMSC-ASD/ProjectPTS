<?php 
     $conn = mysqli_connect('SERVER-NAME','ROOT',
                 'DB','PASSWORD');
//only use it for testing when go online remove it (sql injection Hacking)
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}


