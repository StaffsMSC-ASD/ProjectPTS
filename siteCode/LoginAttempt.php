<?php

session_start();
include("connect.php");
if(isset($_POST['LOGIN'])){


$myusername = mysqli_real_escape_string($link,$_POST['username']);
$mypassword = mysqli_real_escape_string($link,$_POST['password']);

$query = "SELECT user_id FROM USERS WHERE username='$myusername' AND
password='$mypassword' ";

//Checking the existence of the entered username and password in the Database
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
$active = $row['active'];
$count = mysqli_num_rows($result);

/*If there is a match between the entered username,password and any row
  in the DB allow the user to Login else assign true value to  $loginfail */
      if($count == 1) {

         $_SESSION['login_user'] = $myusername;
         header("Location:HomePage.php");

      }else{
        $loginfail=TRUE;
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body>
  <header>
           <div class="container">
               <div id="branding" align="center">
                   <h1 align="center"><span class="highlight">The GreenLine</span>
                   Passenger Targeting System </h1>
             </div>

                <div class="wrapper">

             </div>
           </div>
  </header>


<?php
// If the boolean value of $loginfail is true print "Your Username or Password is invalid "
if($loginfail){
  echo "Your Username or Password is invalid <br><br>";
  echo '<a href="index.php">Back to Login Page</a>';
}
?>

</body>

</html>
