<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
if (!isset($_REQUEST['AccessoryCategoryID']) or (!is_numeric($_REQUEST['AccessoryCategoryID']))) {
?>
   <h2><div class='link-box'>You did not select a valid categoryID to view.</h2>
   <a href="index.php?content=listaccessorycategories">List Categories</a></div>
<?php
} else {
   $categoryID = $_REQUEST['AccessoryCategoryID'];
   $category = Category::findCategory($categoryID);
   if ($category) {
       echo "<div class='link-box'><h2>$category</h2></div>";
       echo "<br><br>\n";
   } else {
       echo "<div class='link-box'><h2>Sorry, category $categoryID not found</h2></div>\n";
   }
}
?>
