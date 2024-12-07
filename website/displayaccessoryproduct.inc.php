<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
if (!isset($_REQUEST['AccessoryProductID']) or (!is_numeric($_REQUEST['AccessoryProductID']))) {
?>
   <h2><div class='link-box'>You did not select a valid productID to view.</h2>
   <a href="index.php?content=listaccessoryproducts">List Products</a></div>
<?php
} else {
   $productID = $_REQUEST['AccessoryProductID'];
   $product = Product::findProduct($productID);
   if ($product) {
       echo "<div class='link-box'><h2>$product</h2></div>";
       echo "<br><br>\n";
   } else {
       echo "<div class='link-box'><h2>Sorry, category $productID not found</h2></div>\n";
   }
}
?>
