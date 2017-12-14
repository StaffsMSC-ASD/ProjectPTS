<?php

// Start the session 

 session_start();
// use the database connection for your server  here instate DBConection.php.
 include 'DBConection.php';
// use the table in your server here instate of PEOPLE
 $sql = "SELECT * FROM PEOPLE";
        $result = $conn->query($sql);
    

?>



<!doctype html>
<html>
    <head>
               <meta charset="UTF-8">
        <title>Passenger Targeting System</title>
        <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Oswald|Raleway|Roboto|Source+Sans+Pro" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href= "css/HomePage.css">
        <meta name="viewport" content="width=device-width, inital-1.8">      
       <style>
                table,tr.th,td
             {
                border: 1px solid red;
             }
     </style>
        
    </head>

    <body>
                <div id="container">

                <header>The GreenLine</span> Passenger Targeting System</a></header>

                <div id="main">

                        
               <h1>Applications</h1>
        
                    <table>
                        <tr>
                            
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Surname </th>
                        <th>Age</th>
                        <th>Adress</th>
                        <th>Risk Type Id</th>
                      </tr>
                       
                       <?php while($row = $result->fetch_assoc()):?>
                           <tr> 
                    <td><?php echo $row['PASSENGER_ID'];?></td>
                     <td><?php echo $row['   FIRSTNAME'];?></td>
                     <td><?php echo $row['  SURNAME'];?></td>
                     <td><?php echo $row[' AGE'];?></td>
                     <td><?php echo $row['ADDRESS'];?></td>
                     <td><?php echo $row['RISK_TYPE_ID'];?></td>
                        </tr>
                      <?php endwhile;?>
                      
                     
                    </table>
                
            
            </div>
                
        </div>
         <footer class="mainFooter">
        <p><a href="#" title="The GreenLine System" TheTheGreenLineSystem.com> GreenLine Systems </a>, Passenger Targeting System :: Copyright &copy; 2017</br>
        Staffordshire University - MSc - Agile Software Development group project September - December 2017 </p>
    </footer>
    </body>
</html>