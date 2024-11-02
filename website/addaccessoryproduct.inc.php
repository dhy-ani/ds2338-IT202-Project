<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
//include('accessoryproduct.php');
if (isset($_SESSION['login'])) {
$productID = $_POST['AccessoryProductID'];
if ((trim($productID) == '') or (!is_numeric($productID))) {
   echo "<h2>Sorry, you must enter a valid product ID number</h2>\n";
} else {
   $productName = $_POST['AccessoryProductName'];
   $productCode=$_POST['AccessoryProductCode'];
   $categoryID = $_POST['AccessoryCategoryID'];
   $listPrice = $_POST['AccessoryListPrice'];
   $accessorySize = $_POST['AccessorySize'];
   $description = $_POST['AccessoryDescription'];
   $wholePrice = $_POST['AccessoryWholesalePrice'];
   $product = new Product(
       $productID,       
       $productName,
       $productCode,
       $categoryID,
       $listPrice,
       $accessorySize,
       $description,
       $wholePrice
   );
   $result = $product->saveProduct();
   if ($result)
       echo "<h2>New Product #$productID successfully added</h2>\n";
   else
       echo "<h2>Sorry, there was a problem adding that Product</h2>\n";
}} else {
   echo "<h2>Please login first</h2>\n";
}
?>

