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
   public $productCode;
   public $productName;
   public $categoryID;
   public $listPrice;
   public $accessorySize;
   public $description;
   public $wholePrice;
   function __construct($productID,$productCode, $productName,$categoryID,$listPrice,$accessorySize,$description,$wholePrice)
   {
       $this->productID = $productID;
       $this->productCode = $productCode;
       $this->productName = $productName;
       $this->categoryID = $categoryID;
       $this->listPrice = $listPrice;
       $this->accessorySize=$accessorySize;
       $this->description= $description;
       $this->wholePrice= $wholePrice;
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
           "issidssd",
           $this->productID,     // integer data type
           $this->productName,   // string data type
           $this->productCode,
           $this->description,
           $this->categoryID, // integer data type
           $this->wholePrice,
           $this->listPrice,   // float data type
           $this->accessorySize,


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
                $row['AccessoryProductCode'],
                $row['AccessoryProductName'],
                $row['AccessoryCategoryID'],
                $row['AccessoryListPrice'],
                $row['AccessorySize'],
                $row['AccessoryDescription'],
                $row['AccessoryWholesalePrice']
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
                $row['AccessoryProductCode'],
                $row['AccessoryProductName'],
                $row['AccessoryCategoryID'],
                $row['AccessoryListPrice'],
                $row['AccessorySize'],
                $row['AccessoryDescription'],
                $row['AccessoryWholesalePrice']
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
            "AccessoryCategoryID= ?, AccessoryProductCode=?, AccessorylistPrice= ?, AccessorySize= ?, AccessoryDescription=?,AccessoryWholesalePrice=? WHERE AccessoryProductID = $this->productID";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "ssidssd",
            $this->productName,
            $this->categoryID,
            $this->productCode,
            $this->listPrice,
            $this->accessorySize,
            $this->description,
            $this->wholePrice
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
 
}
?>
