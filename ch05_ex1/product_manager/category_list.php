<?php include '../view/header.php'; 

?>
<main>

    <h1>Category List</h1>
    <table>
        <tr>
        <th>Name</th>
        
        </tr>        
        <!-- add category rows here -->
        <?php foreach ($categories as $category) : ?>
          
          <tr>
            <td>
            <?php echo $category['categoryName']; ?>
            </td>
            <td> <input type="submit" value="delete"></td>
        </tr>
          <?php endforeach; ?>
    </table>

    <h2>Add Category</h2>
    <form action="index.php" method="post"
              id="add_category_form">
              <input type="hidden" name="action" value="add_category">
             
            <label>Name Category:</label>
            <input type="text" name="categoryName"><br>
            <input type="submit" value="Add Category"><br>
        </form>

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>