<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
error_log("\$_GET " . print_r($_GET, true));
include("accessorycategory.php");
$categoryID = $_GET['AccessoryCategoryID'];
$category = Category::findCategory($categoryID);
$result = $category->removeCategory();
if ($result)
   echo "<div class='link-box'><h2>Category $categoryID removed</h2></div>\n";
else
   echo "<div class='link-box'><h2>Sorry, problem removing category $categoryID</h2></div>\n";


?>
