<?php

$host = 'localhost';
$dbname = 'countryyellowpages';
$user = 'root';
$password = '';

$connectionstring =  "mysql:host=$host;dbname=$dbname";

$conn = new PDO($connectionstring, $user,'');

  // if ($conn) {
  //   echo "Success";
  // } else {
  //   echo "Error";
  // }


 ?>
