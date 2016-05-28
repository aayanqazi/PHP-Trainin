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
    $userName="Arsalan Sabir";
    echo "<a href='output.php?user=".$userName."'> Send User Name </a>";
 } 
 else {
     echo "Failed";
 }
 ?>