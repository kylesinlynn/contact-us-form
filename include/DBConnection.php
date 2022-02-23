<?php

    class DBConnection {
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $name = 'contact_us';

        public $connect = null;

        public function __construct() {
            try {

                $this->connect = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->name, $this->user, $this->pass);

                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                echo 'connected';

                return $this->connect;

            } catch (PDOException $e) {
                exit('Failed to connect : ' . $e->getMessage());
            }
        }

        public function addRecord($name, $email, $message) {

            $sql = "INSERT INTO contact_details (name, email, message) VALUE ($name, $email, $message)";

            $stmt = $this->connect->prepare($sql);
            
            $stmt->execute();

        }

    }

?>