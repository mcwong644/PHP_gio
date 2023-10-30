<?php
$server="Driver={Client Access ODBC Driver (32-bit)};System=192.168.0.100;Uid=user;Pwd=password;"; #the name of the iSeries
$server="Driver={iSeries Access ODBC Driver (32-bit)};System=192.168.0.100;Uid=user;Pwd=password;"; #the name of the iSeries
$server="Driver={IBM i Access ODBC Driver (32-bit)};System=192.168.0.100;Uid=user;Pwd=password;"; #the name of the iSeries
$user="a73ttf"; #a valid username that will connect to the DB
$pass="falken012"; #a password for the username

$conn=odbc_connect($server,$user,$pass); #you may have to remove quotes

#Check Connection
if ($conn == false) {
echo "Not able to connect to database...<br>";
}

#Query the Database into a result set - 
$result=odbc_exec($conn,"SELECT * FROM TITAN4SRC.BOOK2");

if (!$result)
  {exit("Error in SQL");}
echo "<table><tr>";
echo "<th>T§NDOC</th>";
echo "<th>T§DTDO</th></tr>";
while (odbc_fetch_row($result))
  {
  $ndoc=odbc_result($result,2);
  $dtdo=odbc_result($result,3);
  echo "<tr><td>$ndoc</td>";
  echo "<td>$dtdo</td></tr>";
  }
echo "</table>";

#close the connection
odbc_close($conn);
?>