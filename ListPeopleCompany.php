<?php
$hostname = "localhost";
			$username = "root";
			$password = "";			
			$databaseName = "testing";

			$dbConnected = @mysql_connect($hostname, $username, $password);
			$dbSelected = @mysql_select_db($databaseName,$dbConnected);

			$dbSuccess = true;
			if ($dbConnected) {
				if (!$dbSelected) {
					echo "DB connection FAILED<br /><br />";
					$dbSuccess = false;
				}		
			} else {
				echo "MySQL connection FAILED<br /><br />";
				$dbSuccess = false;
			}

//	 Execute code ONLY if connections were successful 	
if ($dbSuccess)
 {
     $ID = $_POST['CompanyID'];
     $select= "SELECT * FROM tcompany WHERE ID = '$ID'"; 
     $query = mysql_query($select);
      while($rows = mysql_fetch_array($query,MYSQL_ASSOC))
     {
         $preName = $rows['preName'];
         $Name = $rows['Name'];
         $reg = $rows['RegType'];
         $fullCompanyName = trim($preName." ".$Name."<br \> ". $reg );
         $StreetA = $rows['StreetA'];
         $StreetB = $rows['StreetB'];
         $StreetC = $rows['StreetC'];
         $Town = $rows['Town'];
         $country = $rows['Country'];
         $postal = $rows['PostCode'];
         $FULL_ADRESS = $StreetA."<br /> ".$StreetB . "<br />".$StreetC."<br />".$Town."<br />".$country."<br />".$postal;
     }

mysql_free_result($query);
$index =0;
 $selectquery = "SELECT * FROM tperson WHERE ID=".$ID."";
 $execute = mysql_query($selectquery);
 while($rows = mysql_fetch_array($execute,MYSQL_ASSOC))
     {
         $person_array[$index]['Salutation'] = $rows['Salutation'];
         $person_array[$index]['FirstName'] = $rows['FirstName'];
         $person_array[$index]['LastName'] = $rows['LastName'];
        $index++;
     }
     $numsize = sizeof($person_array);
     mysql_free_result($execute);
     
     echo $fullCompanyName;
     echo "<br /> <br /> <hr>";
     echo $FULL_ADRESS;
     echo "<br /><br /><hr>";
     for ($in =0; $in<$numsize;$in++)
     {
         echo $person_array[$in]['Salutation'];
echo $person_array[$in]['FirstName'];
echo $person_array[$in]['LastName'];
     }
     
 }
    ?>