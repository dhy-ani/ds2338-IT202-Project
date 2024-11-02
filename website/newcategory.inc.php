<!--
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
-->
<h2>Enter New Category Information</h2>
<form name="newcategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="AccessoryCategoryID" size="4"></td>
       </tr>
       <tr>
           <td>Category Code:</td>
           <td><input type="text" name="AccessoryCategoryCode" size="20"></td>
       </tr>
       <tr>
           <td>Category Name:</td>
           <td><input type="text" name="AccessoryCategoryName" size="50"></td>
       </tr>
       <tr>
            <td>Shelf Number:</td>
            <td><input type="text" name="ShelfNumber" size="3"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addaccessorycategory">
</form>
