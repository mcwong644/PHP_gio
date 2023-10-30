<?php
$hostname = "192.168.0.100";
$user = "A73TTF";
$driver="iSeries Access ODBC Driver";
$driver="IBM i Access ODBC Driver";
$password = "";//leave blank and prompt.  (works in windows not sure if it will work in other situations)
// $pdoConnection = new PDO("odbc:" . $hostname, $user, $password);
// $pdoConnection = new PDO("ibm:" . $hostname, $user, $password);
// $dbConnection = new PDO("{$driver};DATABASE=BLUDB;HOSTNAME=$hostname;PORT=50000;PROTOCOL=TCPIP;", "$user", "$password");
$dbConnection = new PDO("ibm:DRIVER={$driver};DATABASE=TITAN4SRC.BOOK2;HOSTNAME=$hostname;PORT=50000;PROTOCOL=TCPIP;", "$user", "$password");
// "ibm:DRIVER={IBM DB2 ODBC DRIVER}
$sql="SELECT SDKCOO,SDDOCO,SDDCTO FROM TITAN4SRC.BOOK2 WHERE SDDOCO=:SDDOCO AND SDDCTO=:SDDCTO";
$stmt = $pdoConnection->prepare($sql);
if (!$stmt)
{
    echo implode($this->_pdoConnection->errorInfo());
}
else
{
    $stmt->bindValue(":SDDOCO", 22001272);
    $stmt->bindValue(":SDDCTO", "LP");
}

if ($stmt->execute())
{
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
  {
      var_dump($row).PHP_EOL;
  }
}
else
{
  echo 'statement failed with '.$stmt->errorInfo();
}