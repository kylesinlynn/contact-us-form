<?php

    include_once('include/DBConnection.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST' and $_POST) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $db = new DBConnection();
        
        $db->addRecord($name, $email, $message);
        
    }

    // header('location:.');

?>