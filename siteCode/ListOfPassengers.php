<?php

session_start();

include("connect.php");

$query="SELECT * FROM PASSENGER_DETAIL WHERE firstname='".$_POST['Firstname']."' AND surname='".$_POST['Surname']."'AND age='".$_POST['Age']."'AND adress='".$_POST['Address']."'AND risk_type_id='".$_POST['RISK_TYPE_ID']."' ";

// Doing search according to the fields entered from SearchPassenger.php it could include any,combination of any or all of the criteria.

if(isset($_POST['searchPassenger']) AND (!empty($_POST['Firstname'])) AND (!empty($_POST['Surname']) AND (!empty($_POST['Age'])) AND (!empty($_POST['Address'])) AND isset($_POST['RISK_TYPE_ID'])))
{
  $result=mysqli_query($link,$query);
  if(!$result) {

     die("QUERY FAILED" . mysqli_error($link));
    }

}else if(isset($_POST['searchPassenger']) AND (!empty($_POST['Firstname']))  AND (empty($_POST['Surname'])) AND (empty($_POST['Age'])) AND (empty($_POST['Address'])))
{
	$query2="SELECT * FROM PASSENGER_DETAIL WHERE firstname='".$_POST['Firstname']."' ";
	$result=mysqli_query($link,$query2);
	if(!$result){
	  die("QUERY FAILED" . mysqli_error($link));
	}
}else if(isset($_POST['searchPassenger']) AND (!empty($_POST['Firstname'])) AND (!empty($_POST['Surname'])) AND (empty($_POST['Age'])) AND (empty($_POST['Address'])))
{
	$query3="SELECT * FROM PASSENGER_DETAIL WHERE firstname='".$_POST['Firstname']."' AND surname='".$_POST['Surname']."' ";
	$result=mysqli_query($link,$query3);
	if(!$result){
	  die("QUERY FAILED" . mysqli_error($link));
	}
}else if(isset($_POST['searchPassenger']) AND (!empty($_POST['Firstname'])) AND (empty($_POST['Surname'])) AND (!empty($_POST['Age'])) AND (empty($_POST['Address'])))
{
	$query3="SELECT * FROM PASSENGER_DETAIL WHERE firstname='".$_POST['Firstname']."' AND age='".$_POST['Age']."' ";
	$result=mysqli_query($link,$query3);
	if(!$result){
	  die("QUERY FAILED" . mysqli_error($link));
	}
}else if(isset($_POST['searchPassenger']) AND (!empty($_POST['Firstname'])) AND (empty($_POST['Surname'])) AND (empty($_POST['Age'])) AND (!empty($_POST['Address'])))
{
	$query4="SELECT * FROM PASSENGER_DETAIL WHERE firstname='".$_POST['Firstname']."' AND address='".$_POST['Address']."' ";
	$result=mysqli_query($link,$query4);
	if(!$result){
	  die("QUERY FAILED" . mysqli_error($link));
	}
}else if(isset($_POST['searchPassenger']) AND (!empty($_POST['Firstname'])) AND (!empty($_POST['Surname'])) AND (!empty($_POST['Age'])) AND (empty($_POST['Address'])))
{
	$query5="SELECT * FROM PASSENGER_DETAIL WHERE firstname='".$_POST['Firstname']."' AND surname='".$_POST['Surname']."' AND age='".$_POST['Age']."' ";
	$result=mysqli_query($link,$query5);
	if(!$result){
	  die("QUERY FAILED" . mysqli_error($link));
	}
}else if(isset($_POST['searchPassenger']) AND (!empty($_POST['Firstname'])) AND (!empty($_POST['Surname'])) AND (empty($_POST['Age'])) AND (!empty($_POST['Address'])))
{
	$query6="SELECT * FROM PASSENGER_DETAIL WHERE firstname='".$_POST['Firstname']."' AND surname='".$_POST['Surname']."' AND address='".$_POST['Address']."' ";
	$result=mysqli_query($link,$query6);
	if(!$result){
	  die("QUERY FAILED" . mysqli_error($link));
	}
}else if(isset($_POST['searchPassenger']) AND (!empty($_POST['Firstname'])) AND (empty($_POST['Surname'])) AND (!empty($_POST['Age'])) AND (!empty($_POST['Address'])))
{
	$query7="SELECT * FROM PASSENGER_DETAIL WHERE firstname='".$_POST['Firstname']."' AND age='".$_POST['Age']."' AND address='".$_POST['Address']."' ";
	$result=mysqli_query($link,$query7);
	if(!$result){
	  die("QUERY FAILED" . mysqli_error($link));
	}
}else if(isset($_POST['searchPassenger']) AND (empty($_POST['Firstname'])) AND (!empty($_POST['Surname'])) AND (!empty($_POST['Age'])) AND (empty($_POST['Address'])))
{
	$query8="SELECT * FROM PASSENGER_DETAIL WHERE surname='".$_POST['Surname']."' AND age='".$_POST['Age']."' ";
	$result=mysqli_query($link,$query8);
	if(!$result){
	  die("QUERY FAILED" . mysqli_error($link));
	}
}else if(isset($_POST['searchPassenger']) AND (empty($_POST['Firstname'])) AND (!empty($_POST['Surname'])) AND (empty($_POST['Age'])) AND (!empty($_POST['Address'])))
{
	$query9="SELECT * FROM PASSENGER_DETAIL WHERE surname='".$_POST['Surname']."' AND address='".$_POST['Address']."' ";
	$result=mysqli_query($link,$query9);
	if(!$result){
	  die("QUERY FAILED" . mysqli_error($link));
	}
}else if(isset($_POST['searchPassenger']) AND (empty($_POST['Firstname'])) AND (!empty($_POST['Surname'])) AND (!empty($_POST['Age'])) AND (!empty($_POST['Address'])))
{
	$query10="SELECT * FROM PASSENGER_DETAIL WHERE surname='".$_POST['Surname']."' AND age='".$_POST['Age']."' AND address='".$_POST['Address']."' ";
	$result=mysqli_query($link,$query10);
	if(!$result){
	  die("QUERY FAILED" . mysqli_error($link));
	}
}else if(isset($_POST['searchPassenger']) AND (empty($_POST['Firstname'])) AND (empty($_POST['Surname'])) AND (!empty($_POST['Age'])) AND (!empty($_POST['Address'])))
{
	$query11="SELECT * FROM PASSENGER_DETAIL WHERE age='".$_POST['Age']."' AND address='".$_POST['Address']."' ";
	$result=mysqli_query($link,$query11);
	if(!$result){
	  die("QUERY FAILED" . mysqli_error($link));
	}
}else if(isset($_POST['searchPassenger']) AND (empty($_POST['Firstname'])) AND (!empty($_POST['Surname'])) AND (empty($_POST['Age'])) AND (empty($_POST['Address'])))
{
	$query12="SELECT * FROM PASSENGER_DETAIL WHERE surname='".$_POST['Surname']."' ";
	$result=mysqli_query($link,$query12);
	if(!$result){
	  die("QUERY FAILED" . mysqli_error($link));
	}
}else if(isset($_POST['searchPassenger']) AND (empty($_POST['Firstname'])) AND (empty($_POST['Surname'])) AND (!empty($_POST['Age'])) AND (empty($_POST['Address'])))
{
	$query13="SELECT * FROM PASSENGER_DETAIL WHERE age='".$_POST['Age']."' ";
	$result=mysqli_query($link,$query13);
	if(!$result){
	  die("QUERY FAILED" . mysqli_error($link));
	}
}else if(isset($_POST['searchPassenger']) AND (empty($_POST['Firstname'])) AND (empty($_POST['Surname'])) AND (empty($_POST['Age'])) AND (!empty($_POST['Address'])))
{
	$query14="SELECT * FROM PASSENGER_DETAIL WHERE address='".$_POST['Address']."' ";
	$result=mysqli_query($link,$query14);
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
                        <th width="10%">User ID</th>
                        <th width="10%">Firstname</th>
                        <th width="10%">Surname </th>
                        <th width="10%">Age</th>
                        <th width="10%">Address</th>
						</tr>
                   <tr>
        <?php
		// Showing the details of the passengers.
		
		// If no passenger is found print "No Passenger found for the selected search criteria"
		if(empty($row)){
	    echo "<b>No Passenger found for the selected search criteria </b> <br>" ;
		echo '<a href="searchPassenger.php">Go Back</a>' ; 
        }
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


        </div>


        <footer class="mainFooter">
            <p><a href="#" title="The GreenLine System" TheTheGreenLineSystem.com> GreenLine Systems </a>, Passenger Targeting System :: Copyright &copy; 2017</br>
            Staffordshire University - MSc - Agile Software Development group project September - December 2017 </p>
        </footer>

        </body>
</html>
