<?php
$hostname="localhost";
$username="root";
$password="";
$database = "testing";

$dbConnected = @mysql_connect($hostname,$username,$password);
$dbselected = @mysql_select_db($database,$dbConnected);
$success = true;
if($dbConnected)
    if($dbselected)
    {
echo "SQL Database Connected!!  <br/>";
}
else {
  echo  "SQL Database Connection Failed !! Sorry Try Again !! <br /><br />";
  $success = false;
}
 if($success)
 {
     $selectquery = "SELECT Salutation , FirstName , LastName , CompanyID FROM tperson";
     $result = mysql_query($selectquery);
     $indx=1;
echo "<table border=1>";
echo "<tr>";
echo "<td> Salute </td>";
echo "<td> First Name </td>";
echo "<td> Last Name </td>";
echo "<td> Company ID </td>";
 echo "</tr>";
     while($rows = mysql_fetch_array($result,MYSQL_ASSOC))
     {
         $SALUTATION = $rows['Salutation'];
         $FIRSTNAME = $rows['FirstName'];
         $LASTNAME= $rows['LastName'];
         $COMPANYID = $rows['CompanyID'];
         
         echo "<tr>";
     echo "<td>".$SALUTATION." </td>";
      echo "<td> ".$FIRSTNAME."  </td>";
       echo "<td>".$LASTNAME."  </td>";
        echo "<td>".$COMPANYID."  </td>";
     echo "</tr>";
         $indx++;
     }
     mysql_free_result($selectquery);
 }
 ?>