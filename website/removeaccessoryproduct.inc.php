<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
//include("accessoryproduct.php");
// include("item.php");
if (isset($_SESSION['login'])) {
   if (!isset($_POST['AccessoryProductID']) or (!is_numeric($_POST['AccessoryProductID']))) {
      ?>
             <h2>You did not select a valid productID to delete.</h2>
             <a href="index.php?content=listaccessoryproduct">List items</a>
      <?php
   } else {
$productID = $_POST['AccessoryProductID'];
$product = Product::findProduct($productID);
$result = $product->removeProduct();
if ($result)
   echo "<div class='link-box'><h2>Product $productID removed</h2></div>\n";
else
   echo "<div class='link-box'><h2>Sorry, problem removing product $productID</h2></div>\n";
} }else {
   echo "<h2>Please login first</h2>\n";
}

?>



