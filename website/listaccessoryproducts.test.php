<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
include("accessoryproduct.php");
$products = Product::getProducts();
foreach ($products as $product) {
   $productID = $product->productID;
   $productName = $product->productName;
   $productPrice = $product->listPrice;
   $option = $productID . " - " . $productName .  " - " . $productPrice;
   echo "$option<br>";
}
?>
