<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
require_once('database.php');
class Product
{
   public $productID;
   public $productName;
   public $productCode;
   public $description;
   public $categoryID;
   public $wholePrice;
   public $listPrice;
   public $accessorySize;


   function __construct($productID, $productName,$productCode,$description,$categoryID,$wholePrice, $listPrice,$accessorySize)
   {
       $this->productID = $productID;
       $this->productName = $productName;
       $this->productCode = $productCode;
       $this->description= $description;
       $this->categoryID = $categoryID;
       $this->wholePrice= $wholePrice;
       $this->listPrice = $listPrice;
       $this->accessorySize=$accessorySize;
   }
   function __toString()
   {
       $output = "<h2>Product : $this->productID</h2>" .
           "<h2>Name: $this->productName</h2>\n";
       "<h2>Category ID: $this->categoryID at $this->listPrice</h2>\n";
       return $output;
   }
   function saveProduct()
   {
       $db = getDB();
       $query = "INSERT INTO AccessoryProducts VALUES (?,?, ?, ?, ?, ?, ?, ?, NOW())";
       $stmt = $db->prepare($query);
       $stmt->bind_param(
           "isssidds",
           $this->productID,     // integer data type
           $this->productName,   // string data type
           $this->productCode,
           $this->description,
           $this->categoryID, // integer data type
           $this->wholePrice,
           $this->listPrice,   // float data type
           $this->accessorySize


       );
       $result = $stmt->execute();
       $db->close();
       return $result;
   }
    static function getProducts()
    {
    $db = getDB();
    $query = "SELECT * FROM AccessoryProducts";
    $result = $db->query($query);
    if (mysqli_num_rows($result) > 0) {
        $products = array();
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $product = new Product(
                $row['AccessoryProductID'],
                $row['AccessoryProductName'],
                $row['AccessoryProductCode'],
                $row['AccessoryDescription'],
                $row['AccessoryCategoryID'],
                $row['AccessoryWholesalePrice'],
                $row['AccessoryListPrice'],
                $row['AccessorySize'],

            );
            array_push($products, $product);
        }
        $db->close();
        return $products;
    } else {
        $db->close();
        return NULL;
    }
    }
    static function findProduct($productID)
    {
        $db = getDB();
        $query = "SELECT * FROM AccessoryProducts WHERE AccessoryProductID = $productID";
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($row) {
            $product = new Product(
                $row['AccessoryProductID'],
                $row['AccessoryProductName'],
                $row['AccessoryProductCode'],
                $row['AccessoryDescription'],
                $row['AccessoryCategoryID'],
                $row['AccessoryWholesalePrice'],
                $row['AccessoryListPrice'],
                $row['AccessorySize']


            );
            $db->close();
            return $product;
        } else {
            $db->close();
            return NULL;
        }
    }
    function updateProduct()
    {
        $db = getDB();
        $query = "UPDATE AccessoryProducts SET AccessoryProductName= ?, " .
            "AccessoryProductCode=?,AccessoryDescription=?,AccessoryCategoryID= ?, AccessoryWholesalePrice=?, AccessorylistPrice= ?, AccessorySize= ?  WHERE AccessoryProductID = $this->productID";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "sssidds",
            $this->productName,
            $this->productCode,
            $this->description,
            $this->categoryID,
            $this->wholePrice,
            $this->listPrice,
            $this->accessorySize
        );
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
    function removeProduct()
    {
        $db = getDB();
        $query = "DELETE FROM AccessoryProducts WHERE AccessoryProductID = $this->productID";
        $result = $db->query($query);
        $db->close();
        return $result;
    }
    static function getTotalItems()
    {
   $db = getDB();
   $query = "SELECT count(AccessoryProductID) FROM AccessoryProducts";
   $result = $db->query($query);
   $row = $result->fetch_array();
   if ($row) {
       return $row[0];
   } else {
       return NULL;
   }
    }
    static function getTotalListPrice()
    {
        $db = getDB();
        $query = "SELECT sum(AccessoryListPrice) FROM AccessoryProducts";
        $result = $db->query($query);
        $row = $result->fetch_array();
        if ($row) {
            return $row[0];
        } else {
            return NULL;
        }
    }
    static function getTotalWholePrice()
    {
        $db = getDB();
        $query = "SELECT sum(AccessoryWholesalePrice) FROM AccessoryProducts";
        $result = $db->query($query);
        $row = $result->fetch_array();
        if ($row) {
            return $row[0];
        } else {
            return NULL;
        }
    }

 
}
?>
