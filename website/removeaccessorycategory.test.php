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
   echo "<h2>Category $categoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $categoryID</h2>\n";


?>
