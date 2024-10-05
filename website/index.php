<?php
/*
Name:Dhyani Soni
Date:10/4/2024
Course Section:IT202-003
Phase 1 Assignment: Login and Logout
Email:ds2338
*/
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Welcome to Inventory Helper of Tea and Coffee Accessories Shop</title></head>
<body>
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
</body>
</html>
