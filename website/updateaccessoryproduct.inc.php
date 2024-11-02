<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
if (!isset($_POST['AccessoryProductID']) or (!is_numeric($_POST['AccessoryProductID']))) {
?>
   <h2>You did not select a valid productID value</h2>
   <a href="index.php?content=listaccessoryproducts">List products</a>
   <?php
} else {
   $productID = $_POST['AccessoryProductID'];
   $product = Product::findProduct($productID);
   if ($product) {
   ?>
       <h2>Update Product <?php echo $product->productID; ?></h2><br>
       <form name="accessoryproduct" action="index.php" method="post">
           <table>
               <tr>
                   <td>productID</td>
                   <td><?php echo $product->productID; ?></td>
               </tr>
               
               <tr>        
                    <td>Name</td>
                   <td><input type="text" name="AccessoryProductName" value="<?php echo $product->productName; ?>"></td>
               </tr>
               <tr>
                   <td>Category ID</td>
               <td><input type="text" name="AccessoryCategoryID" value="<?php echo $product->categoryID; ?>"></td>
               </tr>
               <tr>
                   <td>Product Code</td>
                 <td><input type="text" name="AccessoryProductCode" value="<?php echo $product->productCode; ?>"></td>
               </tr>
               <tr>
                   <td>Description</td>
                 <td><input type="text" name="AccessoryDescription" value="<?php echo $product->description; ?>"></td>
               </tr>
               <tr>
                   <td>List Price</td>
                 <td><input type="text" name="AccessoryListPrice" value="<?php echo $product->listPrice; ?>"></td>
               </tr>
               <tr>
                   <td>Whole Price:</td>
                   <td><input type="text" name="AccessoryWholesalePrice" value="<?php echo $product->wholePrice; ?>"></td>
                </tr>
                <tr>
                   <td>Accessory Size:</td>
                   <td><input type="text" name="AccessorySize" value="<?php echo $product->accessorySize; ?>"></td>
                </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Product">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="AccessoryProductID" value="<?php echo $productID; ?>">
           <input type="hidden" name="content" value="changeaccessoryproducts">
       </form>
   <?php   } else {
   ?>
       <h2>Sorry, product <?php echo $productID; ?> not found</h2>
       <a href="index.php?content=listaccessoryproducts">List products</a>
<?php
   }
}
?>
