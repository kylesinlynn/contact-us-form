<?php

    include_once('include/DBConnection.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST' and $_POST) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if ($name == '' or $name == null or $email == '' or $email == null or $message == '' or $message == null) {
            header('location:./index.php?error=true');
        } else {
            $db->addRecord($name, $email, $message);
        }

        $db->connect = null;
    }

    header('location:.');
?>