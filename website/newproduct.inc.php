<!--
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
-->
<div class='link-box'>
<h2>Enter New Product Information</h2>
<form name="newproduct" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="text" name="AccessoryProductID" size="4" required minlength="3" maxlength="10"></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="AccessoryProductName" size="20" required minlength="3" maxlength="100"></td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td><input type="text" name="AccessoryProductCode" size="10" required minlength="3" maxlength="10"></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><input type="text" name="AccessoryDescription" required minlength="100" maxlength="255"></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="AccessoryCategoryID" size="4" required minlength="3" maxlength="10"></td>
       </tr>
       <tr>
           <td>Whole Price:</td>
           <td><input type="number" name="AccessoryWholesalePrice" size="10" required min="0" max="500" step="0.01"></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="number" name="AccessoryListPrice" size="10" required min="0" max="100" step="0.01"></td>
       </tr>
       <tr>
           <td>Accessory Size:</td>
           <td><input type="text" name="AccessorySize"></td>
       </tr>


   </table><br>
   <input type="submit" value="Submit New Product">
   <input type="hidden" name="content" value="addaccessoryproduct">
</div>
</form>
