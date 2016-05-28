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
     $updat="UPDATE testing.tcompany SET NAME='SABIR' WHERE id=2";
    if(mysql_query($updat))
    {
        echo "UPDATE ";
    }
    else {
       echo "Unsuccessfull !!!";
    }
 } 


?>
 
 <a href="delete.php">Delete Table </a>
 </body>
 </html>