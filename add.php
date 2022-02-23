<?php

    include_once('include/DBConnection.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST' and $_POST) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $db = new DBConnection();

        // $sql = "INSERT INTO contact_details (name, email, message) VALUE ($name, $email, $message)";

        // $stmt = $db->connect->prepare($sql);
            
        // $stmt->execute();
        
    }

    // header('location:.');

?>