<?php

session_start();

include("Connection.php");

passengers=array();

if(isset($_POST['search2']))
{
  $query="SELECT * FROM passenger_detail WHERE flight_number=".$_POST['flight_number']."AND risk_score=".$_POST['risk_score'].";";
  $passengers=mysqli_query($link,$query);
  while ($row = mysql_fetch_array($passengers,MYSQL_NUM)){
    echo $row[0], $row[1]),$row[2],$row[3],$row[4],$row[5],$row[6];
}

}

?>