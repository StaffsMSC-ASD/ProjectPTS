

<!DOCTYPE html>
<html>
     <head>
               <meta charset="UTF-8">
               <title>TheGreenSystem.com </title>
               <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Oswald|Raleway|Roboto|Source+Sans+Pro" rel="stylesheet">
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

       <h1> Search Flights</h1>

       <p>Use this form to search through flights by various criteria -- more blurb to be added </p>

           <form action = "ListOfFlights.php" method = "POST">
               <!-- Will replace table with CSS and divs -->
               <table>
                   <tr>
                       <td>Flight no: </td>
                       <td><input type = "text" name= "FlightNo"></td>
                   </tr>

                    <tr>
                       <td>Depart from</td>
                       <td> <input type = "text" name="DptFrom"></td>
                   </tr>
                    <tr>
                       <td>Destination:</td>
                       <td><input type = "text" name="Destination"></td>
                   </tr>


               </table>
               <p><input type="submit" name="searchFlight" value="Search Flights" />
               </p>
            </form>

       <!-- Not needed
       <h2 class="message">Already registered? <a href="#">Sign In</a></h2>
         <form class="login-form">

                          <input type="text" placeholder="username"/>
                          <input type="password" placeholder="password"/>
                          <button>login</button>

         </form>  -->

        </div>

    <footer class="mainFooter">
        <p><a href="#" title="The GreenLine System" TheTheGreenLineSystem.com> GreenLine Systems </a>, Passenger Targeting System :: Copyright &copy; 2017</br>
        Staffordshire University - MSc - Agile Software Development group project September - December 2017 </p>
    </footer>
  </body>
</html>
