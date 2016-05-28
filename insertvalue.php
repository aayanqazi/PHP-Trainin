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
     $tableinsert = "INSERT INTO testing.tcompany(preName,Name,RegType,StreetA,StreetB,StreetC,Town,Country,PostCode) VALUES('Sabir','Arsalan','None','Super Plaza','BHeempora','Karachi','Saddar Town','Pakistan','40697')" ;
     
   if (mysql_query($tableinsert))
    {
        echo "CREATE TABLE " ."Successfull !!! ";
    }
    else {
       echo " Unsuccessfull !!!";
    }
 } 
 
?>
 
 <a href="delete.php">Delete Table </a>
 </body>
 </html>