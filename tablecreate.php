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
     $tablecreate = "CREATE TABLE testing.tcompany (ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, preName VARCHAR(50),Name VARCHAR(250),RegType VARCHAR(50),StreetA VARCHAR(150),StreetB VARCHAR(150),StreetC VARCHAR(150),Town VARCHAR(150),Country VARCHAR(50),PostCode VARCHAR(50) )" ;
     
   if (mysql_query($tablecreate))
    {
        echo "CREATE TABLE " ."Successfull !!! ";
    }
    else {
       echo " Unsuccessfull !!!";
    }
 } 
 
$createPersonTable_SQL = "CREATE TABLE testing.tPerson ( ";
				$createPersonTable_SQL .= "ID INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY , ";
				$createPersonTable_SQL .= "Salutation VARCHAR( 20 ) , ";
				$createPersonTable_SQL .= "FirstName VARCHAR( 50 ) , ";
				$createPersonTable_SQL .= "LastName VARCHAR( 50 ) NOT NULL, ";
				$createPersonTable_SQL .= "CompanyID INT ( 11 ) NOT NULL ";
				$createPersonTable_SQL .= ")";
	
				if (mysql_query($createPersonTable_SQL))  {	
					echo "'Create TABLE tPerson' -  Successful.<br /><br />";
                }
?>
 
 <a href="delete.php">Delete Table </a>
 </body>
 </html>