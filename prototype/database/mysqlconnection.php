<?php

Class Connection {
    private $host;
    private $user;
    private $password;
    private $db;

    protected function connect() {
        
    $this->host = "localhost";
    $this->user = "admin";
    $this->password = "admin";
    $this->db = "students";

        $conn = new mysqli($this->host, $this->user, $this->password, $this->db);
        return $conn;
    }

}

?>