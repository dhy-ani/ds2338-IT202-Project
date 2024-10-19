<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
include("accessorycategory.php");
$categories = Category::getCategories();
foreach($categories as $category) {
   $categoryID = $category->categoryID;
   $name = $categoryID . " - " . $category->categoryCode . ", " . $category->categoryName;
   echo "$name<br>";
}
?>
