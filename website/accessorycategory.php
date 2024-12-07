<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
require_once('database.php');

class Category
{
   public $categoryID;
   public $categoryCode;
   public $categoryName;
   public $shelfNumber;
   function __construct($categoryID, $categoryCode, $categoryName,$shelfNumber)
   {
       $this->categoryID = $categoryID;
       $this->categoryCode = $categoryCode;
       $this->categoryName = $categoryName;
       $this->shelfNumber= $shelfNumber;
   }
   function __toString()
   {
       $output = "<h2>Category Number: $this->categoryID</h2>\n" .
           "<h2>$this->categoryCode, $this->categoryName</h2>\n";
       return $output;
   }
   function saveCategory()
   {
       $db = getDB();
       $query = "INSERT INTO AccessoryCategories VALUES (?, ?, ?, ?, NOW())";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issi",
           $this->categoryID,
           $this->categoryCode,
           $this->categoryName,
           $this->shelfNumber
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }   
   static function getCategories()
   {
       $db = getDB();
       $query = "SELECT * FROM AccessoryCategories";
       $result = $db->query($query);
       if (mysqli_num_rows($result) > 0) {
           $categories = array();
           while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
               $category = new Category(
                   $row['AccessoryCategoryID'],
                   $row['AccessoryCategoryCode'],
                   $row['AccessoryCategoryName'],
                   $row['ShelfNumber']
               );
               array_push($categories, $category);
               unset($category);
           }
           $db->close();
           return $categories;
       } else {
           $db->close();
           return NULL;
       }
   }
   static function findCategory($categoryID)
   {
       $db = getDB();
       $query = "SELECT * FROM AccessoryCategories WHERE AccessoryCategoryID = $categoryID";
       $result = $db->query($query);
       $row = $result->fetch_array(MYSQLI_ASSOC);
       if ($row) {
           $category = new Category(
               $row['AccessoryCategoryID'],
               $row['AccessoryCategoryCode'],
               $row['AccessoryCategoryName'],
               $row['ShelfNumber']
           );
           $db->close();
           return $category;
       } else {
           $db->close();
           return NULL;
       }
   }
   function updateCategory()
   {
       $db = getDB();
       $query = "UPDATE AccessoryCategories SET AccessoryCategoryID = ?, AccessoryCategoryCode = ?, " .
           "AccessoryCategoryName = ?, ShelfNumber=? ".
           "WHERE AccessoryCategoryID = $this->categoryID";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "issi",
           $this->categoryID,
           $this->categoryCode,
           $this->categoryName,
           $this->shelfNumber,
       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
   function removeCategory()
   {
       $db = getDB();
       $query = "DELETE FROM AccessoryCategories WHERE AccessoryCategoryID = $this->categoryID";
       $result = $db->query($query);
       $db->close();
       return $result;
   }
   static function getTotalCategories()
{
   $db = getDB();
   $query = "SELECT count(AccessoryCategoryID) FROM AccessoryCategories";
   $result = $db->query($query);
   $row = $result->fetch_array();
   if ($row) {
       return $row[0];
   } else {
       return NULL;
   }
}

}



