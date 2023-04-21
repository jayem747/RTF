<?php
session_start();

function connection(){
$conn = "";
// Connect to the database
try {
    $servername = "localhost";
    $dbname = "netfish";
    $username = "root";
    $password = "";
  
    $conn = new PDO(
        "mysql:host=$servername; dbname=$dbname", $username, $password
    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
   return $conn;
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
}

?>