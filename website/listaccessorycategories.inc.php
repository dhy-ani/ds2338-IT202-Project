<!--
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
-->
<script language="javascript">
   function listbox_dblclick() {
       document.accessorycategories.displaycategory.click()
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this category?");
       }
       if (userConfirmed) {
           if (target == 0) categories.action = "index.php?content=displaycategory";
           if (target == 1) categories.action = "index.php?content=removeaccessorycategory";
           if (target == 2) categories.action = "index.php?content=updateaccessorycategory";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<div class='link-box'><h2>Select Category</h2></div>
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
   <br>
   <input type="submit" onClick="button_click(0)" name="displaycategory" value="View Category">
   <input type="submit" onClick="button_click(1)" name="removeaccessorycategory" value="Delete Category">
   <input type="submit" onClick="button_click(2)" name="updateaccessorycategory" value="Update Category">

</form>

