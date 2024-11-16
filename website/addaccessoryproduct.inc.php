<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
//include('accessoryproduct.php');if (isset($_SESSION['login'])) {
    // Input Validation
    $productID = filter_input(INPUT_POST, 'AccessoryProductID', FILTER_VALIDATE_INT);
    $categoryID = filter_input(INPUT_POST, 'AccessoryCategoryID', FILTER_VALIDATE_INT);
    $listPrice = filter_input(INPUT_POST, 'AccessoryListPrice', FILTER_VALIDATE_FLOAT);
    $wholePrice = filter_input(INPUT_POST, 'AccessoryWholesalePrice', FILTER_VALIDATE_FLOAT);

    if (!$productID || !$categoryID || !$listPrice || !$wholePrice) {
        echo "<div class='link-box'><h2>All fields must have valid numeric values.</h2></div>\n";
        exit;
    }

    if (Product::findProduct($productID)) {
        echo "<div class='link-box'><h2>Sorry, a product with ID #$productID already exists.</h2></div>\n";
        exit;
    }
    else {
    $productName = htmlspecialchars($_POST['AccessoryProductName']);
    $productCode=htmlspecialchars($_POST['AccessoryProductCode']);
    $accessorySize = htmlspecialchars($_POST['AccessorySize']);
    $description = htmlspecialchars($_POST['AccessoryDescription']);
    $product = new Product(
        $productID,       
        $productName,
        $productCode,
        $categoryID,
        $listPrice,
        $accessorySize,
        $description,
        $wholePrice
    );
    $result = $product->saveProduct();
    if ($result){
            echo "<div class='link-box'><h2>New Product #$productID successfully added</h2></div>\n";
    }

   else{
       echo "<div class='link-box'><h2>Sorry, there was a problem adding that Product</h2></div>\n";
       echo "<div class='link-box'><h2>Please login first</h2></div>\n";
   }
}
?>

