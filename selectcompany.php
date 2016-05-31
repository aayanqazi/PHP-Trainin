<html>
    <head>
        <title>Data Base Connection</title>
        
        </head>
<body>
    
<?php


$hostname="localhost";
$username="root";
$password="";
$database = "testing";

$dbConnected = @mysql_connect($hostname,$username,$password);
$dbSlected = @mysql_select_db($database,$dbConnected);
$success = true;
if($dbConnected)
{
if($dbSlected)
{
echo "SQL Database Connected!!  <br/>";
}
else {
  echo  "SQL Database Connection Failed !! Sorry Try Again !! <br /><br />";
  $success = false;
}
}
 if($success)
 {
     $tcompany = "SELECT ID,preName,Name FROM tcompany ORDER by Name" ;
     
     $querry = mysql_query($tcompany);
     
     echo "<form action = 'ListPeopleCompany.php' method ='POST'>";
     echo '<select name= "CompanyID">';
     echo '<option value="0" label ="Select Company" selected="selected">..Select Company.. </option>';
     while($row = mysql_fetch_array($querry,MYSQL_ASSOC))
     {
         $ID = $row['ID'];
         $preName = $row['preName'];
         $company = $row['Name'];
         $reg = $row['RegType'];
         $fullcoyname=trim($preName." ".$company." ".$reg);
         echo '<option value='.$ID.'>'.$fullcoyname.'</option>';
     }
     echo "</select>";
     echo "<input type='submit' />";
     mysql_free_result($querry);
     
 }
 
 ?>
     