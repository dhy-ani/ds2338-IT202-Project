<!--
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
-->
<h2>Enter New Product Information</h2>
<form name="newproduct" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="text" name="AccessoryProductID" size="4"></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="AccessoryProductName" size="20"></td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td><input type="text" name="AccessoryProductCode" size="10"></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="AccessoryCategoryID" size="4"></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="text" name="AccessoryListPrice" size="10"></td>
       </tr>
       <tr>
           <td>Accessory Size:</td>
           <td><input type="text" name="AccessorySize"></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><input type="text" name="AccessoryDescription"></td>
       </tr>
       <tr>
           <td>Whole Price:</td>
           <td><input type="text" name="AccessoryWholesalePrice" size="10"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Product">
   <input type="hidden" name="content" value="addaccessoryproduct">
</form>
