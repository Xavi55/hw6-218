<?php include '../view/header.php'; ?>
<main>
    <h1>Add New Category</h1>
    <form action="." method="post" id="add_category_form">
        <input type="hidden" name="action" value="addCategory">

        <label>Name:</label>
        <input type="text" name="cName" />
        <br><br>

        <input type="submit" value="Add Category" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_products">View Product List</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>


