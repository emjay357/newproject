<?php
const SERVER_NAME = "localhost";
const DB_USERNAME = "root";
const DB_PASSWORD = ""; 

class product {
    private $connection;
    public function __construct(){
        $connectionString = "mysql:host=".SERVER_NAME;
        $this->connection = new PDO($connectionString, DB_USERNAME, DB_PASSWORD);
        $this->createDatabaseAndTable();
    }
    public function createDatabaseAndTable(){
        $sql = "CREATE DATABASE IF NOT EXISTS eproject";
        $this->connection->exec($sql);
        $sql = "USE eproject";
        $this->connection->exec($sql);
        $sql = "CREATE TABLE IF NOT EXISTS product(".
                "PRODUCT_ID CHAR(100) NOT NULL UNIQUE,".
                "PRODUCT_NAME VARCHAR(100),".
                "PRODUCTIMG VARCHAR(40)".");";
        $this->connection->exec($sql);
    }
    public function inputproduct($productid,$productname,$productimg){
        $sql = "INSERT INTO product(PRODUCT_ID ,PRODUCT_NAME ,PRODUCTIMG) ".
               "VALUES(:id ,:productname ,:img);";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $productid);
        $stmt->bindParam(':productname', $productname);
        $stmt->bindParam(':img', $productimg);
        $stmt->execute();
                echo "$productid"."<br>";
                echo "product name: $productname"."<br>";
                echo "product img: $productimg";
    }
    public function productsearch($productid){
        $sql = "SELECT PRODUCT_NAME AS productn, PRODUCTIMG AS producti FROM product".
               " WHERE PRODUCT_ID = :productid";                    
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':productid', $productid);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $result = $stmt->fetch();
        return array("productname" => $result["productn"], 
                     "productimg" => $result["producti"]); 
    }
}
    ?>