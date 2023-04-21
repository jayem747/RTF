<?php
include_once('C:\xampp\htdocs\lessen\alalessen\periode-eindopdrachten\NETFISH\DBconnection\connection.php');

function update_user_account($password, $email)
{
    $connect = connection(); // Maak een connectie aan met de database
    $query = $connect->prepare("UPDATE users SET password = ? WHERE email = ?");

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);   
        $data = array($hashed_password, $email); // Maak een array aan met de gebruikersnaam, emailadres en de id van de ingelogde gebruiker
        
         try {
            $query->execute($data); // Voer de query uit
            header("Location: ../homepage/index.php"); // Redirect de gebruiker naar de account pagina
            
        } catch (PDOException $e) {
            header("Location: ../passwordpage/index.php"); // Redirect de gebruiker naar de account pagina
        }
}

?>