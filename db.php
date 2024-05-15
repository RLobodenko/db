<?php
class db {
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'root';
    private $dbname = 'testdb';
    private $mysqli  = new mysqli($this->host, $this->user, $this->password, $this->dbname);

    //function __construct()
    //{
       // $this->mysqli = 
    //}

    public function getLoginAdmin($id){
        return $this->mysqli->query("select login from users where id = $id")->fetch_assoc()['login'];
    }
    public function getId($id){
        return $id;
    }
}

