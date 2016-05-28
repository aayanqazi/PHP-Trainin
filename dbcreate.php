<html>
    <head>
        <title>Data Base Connection</title>
        
        </head>
<body>
    
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
     $dbName="Arslan_Sabir";
    $drop_SQL = "CREATE DATABASE ".$dbName;
    if(mysql_query($drop_SQL))
    {
        echo "CREATE DATABASE ".$dbName." Successfull !!! ";
    }
    else {
       echo "CREATE DATABASE ".$dbName." Unsuccessfull !!!";
    }
 } 


?>
 
 <a href="delete.php">Delete Table </a>
 </body>
 </html>