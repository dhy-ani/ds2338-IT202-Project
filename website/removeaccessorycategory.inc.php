<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
//error_log("\$_GET " . print_r($_GET, true));
//include("accessorycategory.php");
if (isset($_SESSION['login'])) {
   if (!isset($_REQUEST['AccessoryCategoryID']) or (!is_numeric($_REQUEST['AccessoryCategoryID']))) {
      ?>
             <h2>You did not select a valid categoryID to delete.</h2>
             <a href="index.php?content=listaccessorycategories">List Categories</a>
      <?php
       } else {
$categoryID = $_POST['AccessoryCategoryID'];
$category = Category::findCategory($categoryID);
$result = $category->removeCategory();
if ($result)
   echo "<div class='link-box'><h2>Category $categoryID removed</h2></div>\n";
else
   echo "<div class='link-box'><h2>Sorry, problem removing category $categoryID</h2></div>\n";
       }
} else {
   echo "<H2>Please login first</h2>\n";
}


?>
