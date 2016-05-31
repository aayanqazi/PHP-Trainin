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
     $ID = $_POST['ID'];
     $preName = $_POST['pname'];
     $companyName = $_POST['name'];
     $Reg = $_POST['reg'];
     $streetA = $_POST['streetA'];
  $streetB = $_POST['streetB'];
  $streetC = $_POST['streetC'];
 $town = $_POST['town'];
  $country = $_POST['country'];
  $postal = $_POST['pcode'];
     
     $update = "UPDATE tcompany SET preName = '.$preName.' , Name = '.$companyName.', RegType='.$Reg.', StreetA='.$streetA.', StreetB='.$streetB.', StreetC='.$streetC.', Town='.$town.', Country='.$country.', PostCode='.$postal.' WHERE ID = '.$ID.' ";
   
   echo $update;
   if(mysql_query($update))
   {
       echo "Succesfully Updated !!!";
   }
   
   else {
       echo "Failed !!Try Again ";
   }
 }
