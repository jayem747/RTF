<?php
 
 include_once('C:\xampp\htdocs\lessen\alalessen\periode-eindopdrachten\NETFISH\DBconnection\connection.php');
 $conn = connection();
 
 function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
 }
 
 if (isset($_POST["login"])) {
     $username = test_input($_POST["username"]);
     $password = test_input($_POST["password"]);
 
     // Select the user with the provided username
     $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
     $stmt->execute([$username]);
     $user = $stmt->fetch();
 
     if ($user) {
         // If a user was found, check the password
         if (password_verify($password, $user['password'])) {
             // If the password matches, redirect to the homepage
             header("location: ../../homepage/index.php");
         } else {
             // If the password doesn't match, show an error message
             echo "<script language='javascript'>";
             echo "alert('WRONG INFORMATION')";
             echo "</script>";
             die();
         }
     } else {
         // If no user was found, show an error message
         echo "<script language='javascript'>";
         echo "alert('WRONG INFORMATION')";
         echo "</script>";
         die();
     }
 }
?>
