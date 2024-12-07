<?php
ob_start();
include("accessorycategory.php");
include("accessoryproduct.php");
$totalCategories = Category::getTotalCategories();
$totalItems = Product::getTotalItems();
$listpricetotal = Product::getTotalListPrice();
$listwholetotal = Product :: getTotalWholePrice();
$doc = new DOMDocument("1.0");
$website = $doc->createElement("website");
$website = $doc->appendChild($website);
$categories = $doc->createElement("AccessoryCategory", $totalCategories);
$categories = $website->appendChild($categories);
$items = $doc->createElement("AccessoryProduct", $totalItems);
$items = $website->appendChild($items);
$listprice = $doc->createElement("listpricetotal", $listpricetotal);
$listprice = $website->appendChild($listprice);

$wholeprice = $doc->createElement("listwholetotal", $listwholetotal);
$wholeprice = $website->appendChild($wholeprice);

$output = $doc->saveXML();
header("Content-type: application/xml");
ob_end_clean();
echo $output;
?>
