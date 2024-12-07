<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
//include("accessorycategory.php");
if (isset($_SESSION['login'])) {
   $categoryID = $_POST['AccessoryCategoryID'];
   $answer = $_POST['answer'];
   if ($answer == "Update Category") {
$categoryID = htmlspecialchars($_POST['AccessoryCategoryID']);
$category = Category::findCategory($categoryID);
$category->categoryID = htmlspecialchars($_POST['AccessoryCategoryID']);
$category->categoryCode = htmlspecialchars($_POST['AccessoryCategoryCode']);
$category->categoryName = htmlspecialchars($_POST['AccessoryCategoryName']);
$category->shelfNumber = htmlspecialchars($_POST['ShelfNumber']);
$result = $category->updateCategory();
if ($result) {
   echo "<div class='link-box'><h2>Category $categoryID updated</h2></div>\n";
} else {
   echo "<div class='link-box'><h2>Problem updating category $categoryID</h2></div>\n";
}
} else {
   echo "<h2>Update Canceled for category $categoryID</h2>\n";
}
} else {
echo "<h2>Please login first</h2>\n";
}

?>
