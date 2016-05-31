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
    
            if($dbSuccess)
            {
              $preName = $_POST['pname'];
              $names = $_POST['name'];
              $Reg_Type = $_POST['reg'];
              $streetA = $_POST['streetA'];
              $streetB = $_POST['streetB'];
              $streetC = $_POST['streetC'];
              $town = $_POST['town'];
              $country = $_POST['country'];
              $postal = $_POST['pcode'];
              
              $insert_query = "INSERT INTO tcompany (preName,Name,RegType,StreetA,StreetB,StreetC,Town,Country,PostCode)";
              $insert_query .= " VALUES ('".$preName."','".$names."','".$Reg_Type."','".$streetA."','".$streetB."','".$streetC."','".$town."','".$country."','".$postal."')";
              if(mysql_query($insert_query))
              {
                  echo "Congratulation You Are SingUp !!!! ";
              }
              else 
              {
                  echo "Failed !!! ";
                  
              }
              
            }
?>
