<?php 
class Ordersummary{
 
    // database connection and table name
    private $conn;
    private $table_name = "ordersummary";
 
    // object properties
    public $id;
    public $orderid;
    public $productname;
    public $price;
    public $quantity;
    
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
function read(){
 
    // select all query
    $query = "SELECT * FROM ordersummary";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
        }
    };
?>