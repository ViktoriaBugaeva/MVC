<?php
$db = new PDO("mysql:host=localhost;dbname=testphp","Viktoria", "");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    $queryStr = "INSERT INTO Goods (name, price, comment) VALUES ('car', 10, 'red'), ('constructor', 30, 'plastic'), ('Teddy', 15, 'soft'), ('doll', 10, 'baby born'), ('bicycle', 70, 'blue')";
    $db->query($queryStr);    
}
 catch (PDOException $e) {
    echo $e->getMessage();
 }
