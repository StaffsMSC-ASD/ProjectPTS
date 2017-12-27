<?php

 session_start();

include("ListOfFlightsBE.php");

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

                   </ul>
                       </nav>
                   </div>
               </div>
            </header>


              <div class="wrapper">

       <h1> Flight Details Found</h1>

       <p>Flight details: </p>


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
		// Showing the list of flights with their details.
		
		// If no passenger is found print "No Flight found for the selected search criteria"
		if(empty($row)){
	    echo "<b>No Flight found for the selected search criteria</b> <br>" ;
		echo '<a href="searchFlights.php">Go Back</a>' ; 
        }
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
	    echo '<td><a href="FlightDetails.php?id=',$flightnumber,'">select</a></td>';
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
