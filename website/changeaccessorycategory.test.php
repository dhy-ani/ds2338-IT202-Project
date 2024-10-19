<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
include("accessorycategory.php");
$categoryID = $_GET['AccessoryCategoryID'];
$category = Category::findCategory($categoryID);
$category->categoryID = $_GET['AccessoryCategoryID'];
$category->categoryCode = $_GET['AccessoryCategoryCode'];
$category->categoryName = $_GET['AccessoryCategoryName'];
$category->shelfNumber = $_GET['ShelfNumber'];
$result = $category->updateCategory();
if ($result) {
   echo "<h2>Category $categoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating category $categoryID</h2>\n";
}
?>
