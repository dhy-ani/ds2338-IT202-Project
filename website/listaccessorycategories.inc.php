<!--
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
-->
<h2>Select Category</h2>
<form name="categories" method="post">
   <select name="AccessoryCategoryID" size="20">
       <?php
   //    include("accessorycategory.php");
       $categories = Category::getCategories();
       foreach ($categories as $category) {
           $categoryID = $category->categoryID;
           $name = $categoryID . " - " . $category->categoryCode . ", " . $category->categoryName . ", " . $category->shelfNumber;
           echo "<option value=\"$categoryID\">$name</option>\n";
       }
       ?>
   </select>
</form>

