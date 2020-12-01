<?php

class Database {
private $user = "root";
private $password = "admin1234*";
private $database = "gamet";
private $host = "localhost";

public $con = null;

    public function __construct()
    {
        $this->con = new mysqli($this->host,$this->user,$this->password,$this->database);
       if ($this->con->connect_error) {
            die("Connection Failed: " . $this->con->connect_error);
       }
    }

    public function __destruct()
    {
        $this->terminate();
    }

    public function terminate() {
        if($this->con!=null) {
            $this->con->close();
            $this->con = null;
        }
    }


}


