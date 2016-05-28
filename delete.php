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
     $delete="DELETE FROM testing.tcompany WHERE id=1";
    if(mysql_query($delete))
    {
        echo "DELETED ";
    }
    else {
       echo "Unsuccessfull !!!";
    }
 } 


?>
 
 <a href="delete.php">Delete Table </a>
 </body>
 </html>