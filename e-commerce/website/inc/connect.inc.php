<?php
   $databaseHost = 'e-commerce-db-svc';
   $databaseName = 'grocery';
   $databaseUsername = 'pawank';
   $databasePassword = '@pawan';

   $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
   if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
//	mysql_connect("localhost","root","") or die("Couldn't connect to SQL server");
//	mysql_select_db("grocerydb") or die("Couldn'ttt select DB");
?>
