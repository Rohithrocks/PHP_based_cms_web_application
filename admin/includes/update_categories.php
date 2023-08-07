
<label for="cat_title">Edit Category</label>


<?php // get the edit values to the update box

if(isset($_GET['edit'])) {

$cat_id= $_GET['edit'];

$query = "SELECT * FROM categories WHERE cat_id = {$cat_id}";
$select_categories_id = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_categories_id)) {
$cat_id = $row["cat_id"];
$cat_name = $row["cat_name"];
?>

<form action="" method="post">

<div class="form-group">
</div>

<input value="<?php if(isset($cat_name)) { echo $cat_name; } ?>" class="form-control" type="text" name="cat_name">


<?php } } ?>


<?php update_categories(); ?>



<div class="form-group">
<input class="btn btn-primary" type="submit" name="update" value="update category">
</div>
</form>

