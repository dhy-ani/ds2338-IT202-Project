
<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338@njit.edu
*/
session_start();
include("accessorycategory.php");
include("accessoryproduct.php");
?>
<!DOCTYPE html>
<html>
<head><title>Welcome to Inventory Helper of Tea and Coffee Accessories Shop</title></head>
<body>
<header>
       <?php include("header.inc.php"); ?>
   </header>
   <section style="height: 425px;">
       <nav style="float: left; height: 100%;">
           <?php include("nav.inc.php"); ?>
       </nav>

   <section id="container">
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>
