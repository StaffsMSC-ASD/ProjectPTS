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