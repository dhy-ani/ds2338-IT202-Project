<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
//include("accessoryproduct.php");
if (isset($_SESSION['login'])) {
   $productID = $_POST['AccessoryProductID'];
   $answer = $_POST['answer'];
   if ($answer == "Update Product") {
$productID = $_POST['AccessoryProductID'];
$product = Product::findProduct($productID);
$product->productID = $_POST['AccessoryProductID'];
$product->productName = $_POST['AccessoryProductName'];
$product->categoryID = $_POST['AccessoryCategoryID'];
$product->listPrice = $_POST['AccessoryListPrice'];
$result = $product->updateProduct();
if ($result) {
   echo "<div class='link-box'><h2>Product $productID updated</h2></div>\n";
} else {
   echo "<div class='link-box'><h2>Problem updating Product $productID</h2></div>\n";
}
} else {
   echo "<div class='link-box'><h2>Update Canceled for Product $productID</h2></div>\n";
}
} else {
   echo "<div class='link-box'><h2>Please login first</h2></div>\n";
}
?>
