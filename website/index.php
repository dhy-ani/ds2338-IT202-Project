
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

<head><title>Welcome to Inventory Helper of Tea and Coffee Accessories Shop</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="icon" type="image/jpg" href="image/logo.jpg">
</head>
<script language="javascript" type="text/javascript">
   function getRealTime() {
       // retrieve the DOM objects to place the content
       var domcategories = document.getElementById("accessoryCategorycount");
       var domitems = document.getElementById("accessoryProductcount");
       var domlistpricetotal = document.getElementById("listpricetotal");
       var domlistwholetotal = document.getElementById("listwholetotal");
       //send the GET request to retrieve the data
       var request = new XMLHttpRequest();
       request.open("GET", "realtime.php", true);
       request.onreadystatechange = function() {
           if (request.readyState == 4 && request.status == 200) {
               //parse the XML document to get each data element
               var xmldoc = request.responseXML;
               var xmlcategories = xmldoc.getElementsByTagName("AccessoryCategory")[0];
               var categories = xmlcategories.childNodes[0].nodeValue;

               var xmlitems = xmldoc.getElementsByTagName("AccessoryProduct")[0];
               var items = xmlitems.childNodes[0].nodeValue;

               var xmllistpricetotal = xmldoc.getElementsByTagName("listpricetotal")[0];
               var listpricetotal = xmllistpricetotal.childNodes[0].nodeValue;

               var xmllistwholetotal = xmldoc.getElementsByTagName("listwholetotal")[0];
               var listwholetotal = xmllistwholetotal.childNodes[0].nodeValue;

               domcategories.innerHTML = categories;
               domitems.innerHTML = items;
               domlistpricetotal.innerHTML = listpricetotal;
               domlistwholetotal.innerHTML = listwholetotal;
           }
       };
       request.send();
   }
</script>

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
       <aside>
           <?php include("aside.inc.php"); ?>
           <script language="javascript" type="text/javascript")>
               getRealTime();
               setInterval(getRealTime, 5000);
           </script>
       </aside>
   </section>
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>
