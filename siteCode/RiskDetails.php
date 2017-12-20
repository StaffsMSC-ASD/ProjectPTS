<?php
session_start();

include("connect.php");

$query1="SELECT risk_type_id FROM PASSENGER_AET_RISK WHERE passenger_id='".$_SESSION['id']."' ";

if(!empty($_POST['getRisk']))

   {
	   $result1=mysqli_query($link,$query1);
	   if(!$result1){
		   die("QUERY 1 FAILED" . mysqli_error($link));
	   }while ($row = mysqli_fetch_array($result1,MYSQLI_NUM)){
 			$riskid2=$row[0];

 		}
    $query2="SELECT risk_score, risk_name FROM RISK_DETAIL WHERE risk_type_id='".$riskid2."' ";

	   $result2=mysqli_query($link,$query2);
	   if(!$result2){
		 die("QUERY 2 FAILED" . mysqli_error($link));
   }while ($row = mysqli_fetch_array($result2,MYSQLI_NUM)){
    $riskscore=$row[0];
    $riskname=$row[1];
	}
  if(empty($riskname)){
    $riskname="No Risk is associated with this passenger";
  }
}

?>

<!DOCTYPE html>
<html>
     <head>
               <meta charset="UTF-8">
               <title>TheGreenLineSystem PTS</title>
               <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Oswald|Raleway|Roboto|Source+Sans+Pro" rel="stylesheet">
               <link rel="stylesheet" type="text/css" href= "css/HomePage.css">



</head>
         <body>
           <header>
             <div class="container">
                 <div id="branding">
                     <h1><span class="highlight">The GreenLine</span> Passenger Targeting System </h1>
                </div>

                  <div>
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

       <h1 align="center"> View Risk Analysis Details</h1>
	   <?php
	   if($riskscore>=7){
         echo'<p align="center"><a href="#"><button class="btn btn-fill1">Dangerous</button></a></p>';
         echo '<b><p align="center">Risk Type: ' . $riskname . '</p></b>';
		 }else if($riskscore>2){
         echo'<p align="center"><a href="#"><button class="btn btn-fill2">Less Dangerous</button></a></p><br>';
         echo '<b><p align="center">Risk Type: ' . $riskname . '</p></b>';
		 }else if($riskscore<3) {
         echo'<p align="center"><a href="#"><button class="btn btn-fill3">Normal</button></a></p><br>';
         echo '<b><p align="center">Risk Type: ' . $riskname . '</p></b>';}



		  ?>
         </div>
    <footer class="mainFooter">
        <p><a href="#" title="The GreenLine System" TheTheGreenLineSystem.com> GreenLine Systems </a>, Passenger Targeting System :: Copyright &copy; 2017</br>
        Staffordshire University - MSc - Agile Software Development group project September - December 2017 </p>
    </footer>
        </body>
</html>
