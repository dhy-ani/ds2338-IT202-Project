<style>
   form[name="AccessoryCategory"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   form[name="AccessoryCategory"] label {
       text-align: left;
       padding-right: 5px;
   }
   form[name="AccessoryCategory"] input[type="text"] {
       width: 100%;
   }
   form[name="AccessoryCategory"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>
<?php
if (!isset($_REQUEST['AccessoryCategoryID']) or (!is_numeric($_REQUEST['AccessoryCategoryID']))) {
    ?>
     <h2>You did not select a valid categoryID to update.</h2>
     <a href="index.php?content=listaccessorycategories">List Categories</a>
     <?php
    } else {
$categoryID = $_POST['AccessoryCategoryID'];
$category = Category::findCategory($categoryID);
if ($category) {
?>
   <h2>Update Category <?php echo $categoryID; ?></h2><br>
   <form name="AccessoryCategory" action="index.php" method="post">
       <label for="AccessoryCategoryCode">Category Code:</label>
       <input type="text" name="AccessoryCategoryCode" id="AccessoryCategoryCode" value="<?php echo $category->categoryCode; ?>">
       <label for="AccessoryCategoryName">Category Name:</label>
       <input type="text" name="AccessoryCategoryName" id="AccessoryCategoryName" value="<?php echo $category->categoryName; ?>">
       <label for="ShelfNumber">Shelf Number:</label>
       <input type="number" name="ShelfNumber" id="ShelfNumber" value="<?php echo $category->shelfNumber; ?>">

       <input type="submit" name="answer" value="Update Category">
       <input type="submit" name="answer" value="Cancel">
       <input type="hidden" name="AccessoryCategoryID" value="<?php echo $categoryID; ?>">
       <input type="hidden" name="content" value="changeaccessorycategory">
   </form>
<?php
} else {
?>
   <h2>Sorry, category <?php echo $categoryID; ?> not found</h2>
<?php
}
}
?>
<script language="javascript">
   document.category.AccessoryCategoryCode.focus();
   document.category.AccessoryCategoryCode.select();
</script>
