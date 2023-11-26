<?php 
class Userdetails{
 
    // database connection and table name
    private $conn;
    private $table_name = "userdetails";
 
    // object properties
    public $id;
    public $fullname;
    public $uname;
    public $email;
    public $pnumber;
    public $address;
    
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
function read(){
 
    // select all query
    $query = "SELECT * FROM userdetails";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
        }
    };
?>