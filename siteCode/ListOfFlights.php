<?php

 session_start();

include("connect.php");
$query="SELECT * FROM FLIGHT_DETAIL WHERE flight_number='".$_POST['FlightNo']."' AND origin='".$_POST['DptFrom']."'AND destination='".$_POST['Destination']."' ";
$query2="SELECT * FROM FLIGHT_DETAIL WHERE destination='".$_POST['Destination']."' ";
$query3="SELECT * FROM FLIGHT_DETAIL ";
if(isset($_POST['searchFlight']) AND (!empty($_POST['FlightNo'])) AND (!empty($_POST['DptFrom'])) AND (!empty($_POST['Destination'])))
{
  $result=mysqli_query($link,$query);
  if(!$result) {

     die("QUERY FAILED" . mysqli_error($link));
   }
 }else if(isset($_POST['searchFlight']) AND (empty($_POST['FlightNo'])) AND (empty($_POST['DptFrom'])) AND (!empty($_POST['Destination'])))
   {
     $result=mysqli_query($link,$query2);
     if(!$result) {

        die("QUERY FAILED" . mysqli_error($link));
}
}


?>
<!DOCTYPE html>
<html>
     <head>
               <meta charset="UTF-8">
               <title>TheGreenSystem.com </title>
               <link rel="stylesheet" type="text/css" href= "css/HomePage.css">

    </head>
         <body>
           <header>
             <div class="container">
                 <div id="branding">
                     <h1><span class="highlight">The GreenLine</span> Passenger Targeting System </h1>
                </div>

                  <div class="wrapper">
                      <nav>
                        <ul>
                      <li><a href="HomePage.php">Home</a></li>
                      <li><a href="searchPassenger.php">Passenger Search</a></li>
                      <li><a href="searchFlights.php">Flight Search</a></li>
                      <li><a href="AdminHome.php">Admin Home</a></li>
                   </ul>
                       </nav>
                   </div>
               </div>
            </header>


              <div class="wrapper">

       <h1> Passenger Details Found</h1>

       <p>Use this form to search through flights by various criteria -- more blurb to be added </p>


               <table>
                    <tr>
                        <th width="20%">Flight No</th>
                        <th width="20%">Crew</th>
                        <th  width="20%">Destination</th>
                        <th width="20%">Origin</th>
                        <th width="20%">Flight Capacity</th>
                   </tr>
                    <tr>
				    <?php
		while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
		$flightnumber=$row[0];
		$airline=$row[1];
		$destination=$row[2];
		$origin=$row[3];
    $flightcapacity=$row[4];


		echo "<tr>";
    echo "<td> {$flightnumber} </td>";
		echo "<td> {$airline} </td>";
		echo "<td> {$destination} </td>";
		echo "<td> {$origin} </td>";
    echo "<td> {$flightcapacity} </td>";
    echo"</tr>";

		}
					?>
		</tr>
               </table>


        </div>


        <footer class="mainFooter">
            <p><a href="#" title="The GreenLine System" TheTheGreenLineSystem.com> GreenLine Systems </a>, Passenger Targeting System :: Copyright &copy; 2017</br>
            Staffordshire University - MSc - Agile Software Development group project September - December 2017 </p>
        </footer>

        </body>
</html>
