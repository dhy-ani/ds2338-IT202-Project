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
  $categoryID = filter_input(INPUT_POST, 'AccessoryCategoryID', FILTER_VALIDATE_INT);
if ((trim($categoryID) == '') or (!is_int($categoryID))) {
  echo "<div class='link-box'><h2>Sorry, you must enter a valid category ID number</h2></div>\n";
} else {
  $categoryCode = htmlspecialchars($_POST['AccessoryCategoryCode']);
  $categoryName = htmlspecialchars($_POST['AccessoryCategoryName']);
  $shelfNumber = htmlspecialchars($_POST['ShelfNumber']);
  $category = new Category($categoryID, $categoryCode, $categoryName,$shelfNumber);
  $result = $category->saveCategory();
  if ($result) {
      echo "<div class='link-box'><h2>New Category #$categoryID successfully added</h2></div>\n";
      echo "<div class='link-box'><h2>$category</h2>\n";
  } else {
      echo "<div class='link-box'><h2>Sorry, there was a problem adding that category</h2></div>\n";
  }
}
} else {
  echo "<div class='link-box'><h2>Please log in first</h2></div>\n";
}

?>
