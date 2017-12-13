<?php
/*
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
*/
session_start();

include("Connection.php");

$query="SELECT * FROM PASSENGER_DETAIL WHERE firstname='".$_POST['Firstname']."' AND surname='".$_POST['Surname']."'AND age='".$_POST['Age']."'AND adress='".$_POST['Address']."'AND risk_type_id='".$_POST['RISK_TYPE_ID']."' ";

if(isset($_POST['searchPassenger']) AND (!empty($_POST['Firstname'])) AND (!empty($_POST['Surname']) AND (!empty($_POST['Age'])) AND (!empty($_POST['Address'])) AND isset($_POST['RISK_TYPE_ID'])))
{
  $result=mysqli_query($link,$query);
  if(!$result) {
    
     die("QUERY FAILED" . mysqli_error($link));    
    }

}else if(isset($_POST['searchPassenger']) AND isset($_POST['RISK_TYPE_ID']) AND (empty($_POST['Firstname'])) AND (empty($_POST['Surname'])) AND (empty($_POST['Age'])) AND (empty($_POST['Address'])))
{
	$query2="SELECT * FROM PASSENGER_DETAIL WHERE risk_type_id='".$_POST['RISK_TYPE_ID']."' ";
	$result=mysqli_query($link,$query2);
	if(!$result){
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
                        <th width="20%">User ID</th>
                        <th width="20%">Firstname</th>
                        <th width="20%">Surname </th>
                        <th width="20%">Age</th>
                        <th width="20%">Address</th>
						</tr>
                   <tr>
				    <?php
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
		echo "<td> {$addres} </td>";
		echo '<td><a href="PassengerDetails.php?id=',$userid,'">select</a></td>';
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