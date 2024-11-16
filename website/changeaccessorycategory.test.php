<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
include("accessorycategory.php");
$categoryID = htmlspecialchars($_GET['AccessoryCategoryID']);
$category = Category::findCategory($categoryID);
$category->categoryID = htmlspecialchars($_GET['AccessoryCategoryID']);
$category->categoryCode = htmlspecialchars($_GET['AccessoryCategoryCode']);
$category->categoryName = htmlspecialchars($_GET['AccessoryCategoryName']);
$category->shelfNumber = htmlspecialchars($_GET['ShelfNumber']);
$result = $category->updateCategory();
if ($result) {
   echo "<div class='link-box'><h2>Category $categoryID updated</h2></div>\n";
} else {
   echo "<div class='link-box'><h2>Problem updating category $categoryID</h2></div>\n";
}
?>
