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
$ID = $_POST['CompanyID'];

if($ID == 0)
{
    header("location:comedit.php");
}
 if($success)
 {
     
     $select= "SELECT * FROM tcompany WHERE ID = ".$ID.""; 
     $query = mysql_query($select);
      while($rows = mysql_fetch_array($query,MYSQL_ASSOC))
     {
         $current_preName = $rows['preName'];
         $current_Name = $rows['Name'];
         $current_reg = $rows['RegType'];
         $current_StreetA = $rows['StreetA'];
         $current_StreetB = $rows['StreetB'];
         $current_StreetC = $rows['StreetC'];
         $current_Town = $rows['Town'];
         $current_country = $rows['Country'];
         $current_postal = $rows['PostCode'];

     echo $select;
     echo "<h2>COMPANY EDIT FORM</h2>";
     echo "<form action ='companyupdate.php' method = 'POST'>";
     echo "<input type ='hidden' value='$ID ' name='ID' />";
     echo "<p>Pre Name: <input type='text' name='pname' value='$current_preName'  /> </p>";
     echo "<p>Name: <input type='text' name='name' value='$current_Name'  required /> </p>";
      echo "<p>Reg Type: <input type='text' name='reg' value='$current_reg'  required /> </p>";
       echo "<p>Street A: <input type='text' name='streetA' value='$current_StreetA'  required /> </p>";
        echo "<p>StreetB: <input type='text' name='streetB' value='$current_StreetB'  required /> </p>";
         echo "<p>Street C: <input type='text' name='streetC' value='$current_StreetC'  required /> </p>";
          echo "<p>Town: <input type='text' name='town' value='$current_Town'  required /> </p>";
           echo "<p>Country: <input type='text' name='country' value='$current_country'  required /> </p>";
            echo "<p>Postal Code: <input type='text' name='pcode' value='$current_postal'  required /> </p>";
            echo "<input type='submit' value='SUBMIT'";
            echo "</form>";
            echo "<hr>";
 }
      echo "</form>";
      echo "<br /";
 }    
?>
            
            <html>
            <a href ='comedit.php'> SELECT NEW COMPANY </a>
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <a href ='index.html'> QUIT - to homepage </a>
 </html>
