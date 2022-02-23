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

                return $this->connect;

            } catch (PDOException $e) {
                exit('Failed to connect : ' . $e->getMessage());
            }
        }

        public function addRecord($name, $email, $message) {

            $sql = "INSERT INTO contact_details (name, email, message) VALUES (:name, :email, :message)";
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);
            $stmt->execute();

        }

        public function getRecords() {

            $sql = 'SELECT * FROM contact_details ORDER BY id ASC';
            $stmt = $this->connect->prepare($sql);
            $stmt->execute();
            
            return $stmt->fetchAll();

        }

    }

    $db = new DBConnection();

?>