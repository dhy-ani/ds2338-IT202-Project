<!--
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
-->
<script language="javascript">
   function listbox_dblclick() {
       document.accessoryproduct.updateaccessoryproduct.click()
   }


   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this product?");
       }
       if (userConfirmed) {
           if (target == 1) accessoryproduct.action = "index.php?content=removeaccessoryproduct";
           if (target == 2) accessoryproduct.action = "index.php?content=updateaccessoryproduct";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<div class='link-box'><h2>Select Product</h2></div>
<form name="accessoryproduct" method="post">
   <select ondblclick="listbox_dblclick()" name="AccessoryProductID" size="20">
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
   echo "<option value=\"$productID\">$option</option>\n";
       }
       ?>
   </select>
   <br>
   <input type="submit" onClick="button_click(1)" name="removeaccessoryproduct" value="Delete Product">
   <input type="submit" onClick="button_click(2)" name="updateaccessoryproduct" value="Update Product">

</form>
