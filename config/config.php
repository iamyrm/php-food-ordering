<?php

// Avoiding to access congig.php
if (!isset($_SERVER['HTTP_REFERER'])) {
   header("location: http://localhost/ya/php/food-ordering-ecom/index.php");
   exit;
}

try {
   define("HOST", "localhost");
   define("DBNAME", "practice-food-ecom");
   define("USER", "root");
   define("PASS", "yagya");

   $conn = new PDO("mysql:host=" . HOST . ";dbname=" . DBNAME . ";", USER, PASS);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
   echo $e->getMessage();
}
