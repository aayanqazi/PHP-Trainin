<html>
    <head>
        <title>Data Base Connection</title>
        
        </head>
<body>
    
<?php


$hostname="localhost";
$username="root";
$password="";

$databaseName="testing";

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
    $dbName = "arslan";
    $drop_SQL = "DROP DATABASE ".$dbName;
    if(mysql_query($drop_SQL))
    {
        echo "DROP DATABASE ".$dbName." Successfull !!! ";
    }
    else {
       echo "DROP DATABASE ".$dbName." Unsuccessfull !!!";
    }
 } 


?>
 
 <a href="delete.php">Delete Table </a>
 </body>
 </html>