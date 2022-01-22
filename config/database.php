<?php

class database{
    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbname = "deklaracija";

    public $database = null;

    public function __construct()
    {
        $this->database = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->database->connect_error) {
            die("Connection to Database failed: " . $this->database->connect_error);
        }
    }

    public function get($query) {
        $result = $this->database->query($query);

        $data = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        } else {
            return [];
        }
        return $data;
    }

    public function insert($table, $data) {
        $query = "INSERT INTO ".$table." (";

        $count = 0;
        foreach($data as $key => $value) {
            if($count > 0) {
                $query = $query.", ";
            }
            $query = $query.$key;
            $count++;
        }
        $query = $query.") VALUES (";

        $count = 0;
        foreach($data as $value) {
            if($count > 0) {
                $query = $query.", ";
            }
            $query = $query."'".$value."'";
            $count++;
        }
        $query = $query.")";
        //echo $query;
        return $this->database->query($query);
    }

    public function update($query) {
        return $this->database->query($query);
    }

    public function __destruct() {
        $this->database->close();
    }
}