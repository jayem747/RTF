<?php
 
include('C:\xampp\htdocs\lessen\alalessen\periode-eindopdrachten\NETFISH\DBconnection\connection.php');
$conn = connection();  

if(isset($_POST['register'])) {
    
    // Collect and validate user input
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    
    // Hash password for storage
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
  	$insert = $conn->prepare($sql);
    $data = array($name, $email, $hashed_password);
    try {
      $insert->execute($data);
      header('location: ../../loginpage/index.php');
    }
    catch(pdoexception $e) {
      echo $e;
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
      
?>
