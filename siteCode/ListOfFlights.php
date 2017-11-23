<?php

session_start();

include("Connection.php");

flights=array();

if(isset($_POST['search3']));
{
  $query="SELECT * FROM FLIGHT_DETAIL WHERE destination=".$_POST[destination]."AND origin=".$_POST[origin].";";
  $flights=mysqli_query($link,$query);
    while ($row = mysql_fetch_array($flights,MYSQL_NUM)){
    echo $row[0], $row[1]),$row[2],$row[3],$row[4];
  
  }
?>