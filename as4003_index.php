<!DOCTYPE html>
<html>
 
<body>
 <?php 
   //Storing DSN(Data Source Name created)
  $dsn="system_iseries400";
  $user="a73ttf";
  $password="falken012";
    
   //storing connection id in $conn
  $conn=odbc_connect($dsn,$user, $password);
 
  //Checking connection id or reference
  if (!$conn)
   {
   echo (die(odbc_error()));
   }
   else
  { 
      echo "Connection Successful !";
  }
  //Resource releasing
  odbc_close($conn);
  ?>
 
</body>
</html>