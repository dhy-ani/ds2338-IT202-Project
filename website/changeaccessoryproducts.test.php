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
$product->productID = $_GET['AccessoryProductID'];
$product->productName = $_GET['AccessoryProductName'];
$product->categoryID = $_GET['AccessoryCategoryID'];
$product->listPrice = $_GET['AccessoryListPrice'];
$result = $product->updateProduct();
if ($result) {
   echo "<h2>Product $productID updated</h2>\n";
} else {
   echo "<h2>Problem updating item $productID</h2>\n";
}
?>
