
<?php
session_start();
include("connect.php");
// Get the list of passengers in the flight selected from ListOfFlights.php page
$query="select a.passenger_id,a.firstname,a.surname,a.age,a.address from PASSENGER_DETAIL as a join PASSENGER_AET_FLIGHT as b on a.PASSENGER_ID=b.PASSENGER_ID WHERE b.flight_number='".$_GET['id']."' ";

$result=mysqli_query($link,$query);
	if(!$result) {

     die("QUERY FAILED" . mysqli_error($link));
    }
		
?>
 <!DOCTYPE html>
<html>
     <head>
               <meta charset="UTF-8">
               <title>TheGreenLineSystem PTS</title>
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
            
       <h1>List of Passengers</h1>

       <p>List of Passengers on Flight number: <?php echo $_GET['id'];?></p>
                        
           
               <table>
               <tr>
                        <th width="10%">User ID</th>
                        <th width="10%">Firstname</th>
                        <th width="10%">Surname </th>
                        <th width="10%">Age</th>
                        <th width="10%">Address</th>
						</tr>
                   <tr>
        <?php
		//Showing the list of Passengers in the selected flight from ListOfFlights.php
        while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
 		$userid=$row[0];
 		$firstname=$row[1];
 		$surname=$row[2];
 		$age=$row[3];
 		$address=$row[4];

 		echo "<tr>";
        echo "<td> {$userid} </td>";
 		echo "<td> {$firstname}</td>";
 		echo "<td> {$surname}</td>";
 		echo "<td> {$age} </td>";
 		echo "<td> {$address} </td>";
 		echo '<td><a href="PassengerDetails.php?id=',$userid,'">select</a></td>';
 		echo"</tr>";

 		}
 					?>
		</tr>

               </table>
               
       <form action = "someAction" method = "POST">
       <p><input type="submit" name="getRisk" value="View Risk Analysis Details" />
               </p> 
       </form>

              </div>
      
                 
         <footer class="mainFooter">
            <p><a href="#" title="The GreenLine System" TheTheGreenLineSystem.com> GreenLine Systems </a>, Passenger Targeting System :: Copyright &copy; 2017</br>
            Staffordshire University - MSc - Agile Software Development group project September - December 2017 </p>
        </footer>
             
        </body>
</html>