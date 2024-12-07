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
   $productID = htmlspecialchars($_POST['AccessoryProductID']);
   $answer = htmlspecialchars($_POST['answer']);
   if ($answer == "Update Product") {
$productID = filter_input(INPUT_POST,'AccessoryProductID', FILTER_VALIDATE_INT);
$product = Product::findProduct($productID);
$product->productID = filter_input(INPUT_POST,'AccessoryProductID',FILTER_VALIDATE_INT);

$product ->productName = htmlspecialchars($_POST['AccessoryProductName']);
$product ->productCode = htmlspecialchars($_POST['AccessoryProductCode']);
$product ->description = htmlspecialchars($_POST['AccessoryDescription']);

$product->categoryID = filter_input(INPUT_POST,'AccessoryCategoryID',FILTER_VALIDATE_INT);

$product->wholePrice = filter_input(INPUT_POST,'AccessoryWholesalePrice',FILTER_VALIDATE_FLOAT);
$product->listPrice = filter_input(INPUT_POST,'AccessoryListPrice',FILTER_VALIDATE_FLOAT);

$product ->accessorySize = htmlspecialchars($_POST['AccessorySize']);
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
