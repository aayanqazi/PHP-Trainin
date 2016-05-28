<?php
$File = fopen("../php/123.csv","r");
$i =0;
while(!feof($File))
{
   $thisLine = fgets($File);
   $personData[$i] = explode(",",$thisLine);
   $i++;
}
fclose($File);
$numrow = sizeof($personData);
echo "<table border=1>";
echo "<tr>";
echo "<td> Salute </td>";
echo "<td> First Name </td>";
echo "<td> Last Name </td>";
echo "<td> Company ID </td>";
 echo "</tr>";
 $i = 0;
 while($i < $numrow)
 {
     echo "<tr>";
     echo "<td>".$personData[$i][0]." </td>";
      echo "<td> ".$personData[$i][1]."  </td>";
       echo "<td>".$personData[$i][2]."  </td>";
        echo "<td>".$personData[$i][4]."  </td>";
     echo "</tr>";
     $i ++ ;
     
     
 }

?>