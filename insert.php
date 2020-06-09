
<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "preethabala";
 $db = "hotel_booking";
 $con = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 
if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 


 

$sql="INSERT INTO nametable (fname, lname)VALUES('$_POST[fname]','$_POST[lname]')";
if ($con->query($sql)){
echo "New record is inserted sucessfully";
}
 
echo "1 record added";
 

$con->close();

?>