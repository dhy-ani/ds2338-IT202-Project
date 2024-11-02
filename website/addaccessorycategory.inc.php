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
if ((trim($categoryID) == '') or (!is_numeric($categoryID))) {
  echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
  $categoryCode = $_POST['AccessoryCategoryCode'];
  $categoryName = $_POST['AccessoryCategoryName'];
  $shelfNumber = $_POST['ShelfNumber'];
  $category = new Category($categoryID, $categoryCode, $categoryName,$shelfNumber);
  $result = $category->saveCategory();
  if ($result) {
      echo "<h2>New Category #$categoryID successfully added</h2>\n";
      echo "<h2>$category</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that category</h2>\n";
  }
}
} else {
  echo "<h2>Please log in first</h2>\n";
}

?>
