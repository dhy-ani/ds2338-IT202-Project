<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
include("accessoryproduct.php");
$productID = $_GET['AccessoryProductID'];
$product = Product::findProduct($productID);
$result = $product->removeProduct();
if ($result)
   echo "<h2>Product $productID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing item $productID</h2>\n";
?>
