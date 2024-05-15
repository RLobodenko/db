<?php
use PHPUnit\Framework\TestCase; 


class dbTest extends TestCase{
    protected $connection;

    public function setUp(): void{
         //parent::setUp();
         $host = 'localhost';
         $user = 'root';
         $password = 'root';
         $dbname = 'testdb';
         
         //$str_connection = "mysql:host=$host;dbname=$dbname";

            //$this->connection = new PDO($str_connection, $user, $password);
        $this->connection = new mysqli($host, $user, $password, $dbname);
    }

    public function testDatabaseConnection(){
        $this->assertNoNull($this->connection);
    }
    public function testSelectQuery(){
        $query = 'select * from users limit 1';
        $emp = $this->connection->query($query);
        $this->assertNotEmpty($emp);
    }
    

   
}