<!--
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
-->
<h2>Select Product</h2>
<form name="accessoryproduct" method="post">
   <select name="AccessoryProductID" size="20">
   <?php
//include("accessoryproduct.php");
$products = Product::getProducts();
foreach ($products as $product) {
   $productID = $product->productID;
   $productName = $product->productName;
   $productCode = $product->productCode;
   $categoryID = $product->categoryID;
   $listPrice = $product->listPrice;
   $accessorySize=$product->accessorySize;
   $description= $product->description;
   $wholePrice= $product->wholePrice;
   $option = $productID . " - " . $productName .  " - " . $productCode . " - " . $listPrice ." - " .$categoryID . " - " . $accessorySize . " - " . $description . " - " . $wholePrice;
   echo "<option value=\"$AccessoryProductID\">$option</option>\n";
       }
       ?>
   </select>
</form>
