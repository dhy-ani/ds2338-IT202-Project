<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
require_once('database.php');
$emailAddress = htmlspecialchars($_POST['emailAddress']);
$password = $_POST['password'];
if(filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
   $query = "SELECT firstName, lastName, pronouns FROM teaandCoffeeAccessoriesManagers " .
        "WHERE emailAddress = ? AND password = SHA2(?,256)";
$db = getDB();
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($firstName, $lastName,$pronouns);
$fetched = $stmt->fetch();
$name = "$firstName $lastName $pronouns";
if ($fetched && isset($name)) {
   echo "<h2>Welcome to Inventory Helper of Tea and Coffee Accessories Shop, $name</h2>\n";
   $_SESSION['login'] = true;

   $_SESSION['emailAddress'] = $emailAddress;
   $_SESSION['firstName'] = $firstName;
   $_SESSION['lastName'] = $lastName;
   $_SESSION['pronouns'] = $pronouns;
header("Location: index.php");
} else {
   echo "<div class='link-box'><h2>Sorry, login information was incorrect on Tea and Coffee Accessories Shop</h2></div>\n";
   echo "<div class='link-box'><a href=\"index.php\">Please try again</a></div>\n";
}
} else {
   echo "<div class='link-box'><h2>Please enter a valid email address</h2></div>\n";
   echo "<div class='link-box'><a href=\"index.php\">Please try again</a><div>\n";
}
?>
