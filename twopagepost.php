<?php


$hostname="localhost";
$username="root";
$password="";

$dbConnected = @mysql_connect($hostname,$username,$password);
$success = true;
if($dbConnected)
{
echo "SQL Database Connected!!  <br/>";
}
else {
  echo  "SQL Database Connection Failed !! Sorry Try Again !! <br /><br />";
  $success = false;
}

 if($success)
 {
    echo " <form action='output2.php' method='POST'>";
    echo "Enter First Name <br />";
    echo "<input type='text' name='fname' />";
    echo "<br /> Enter Last Name <br />";
    echo "<input type='text' name='lname' />";
    echo "<br/> <input type='submit' value='Submit'> ";
    echo "</form>";
 } 
 else {
     echo "Failed";
 }
 ?>