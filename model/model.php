<?php
define("DBNAME","message");
define("DBUSER","root");
define("DBPASS","vagrant");


try{
  $conn = new PDO("mysql:host=localhost;dbname=".DBNAME,DBUSER,DBPASS);
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo $e->getMessage();
}
 ?>
