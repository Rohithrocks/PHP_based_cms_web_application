<div class="col-md-4">



<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>

    <form action="search.php" method="post">
        <div class="input-group">
        <input name="search" type="text" class="form-control">
        <span class="input-group-btn">
            <button name="submit" class="btn btn-default" type="submit">
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
    </div>
    </form>
    <!-- /.input-group -->
</div>






<!-- Blog Categories Well -->
<div class="well">
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-12   ">
            <ul class="list-unstyled">


            <?php  
                $query = "SELECT * FROM category";
                $select_all_category_query = mysqli_query($connection,$query);

                while($row = mysqli_fetch_assoc($select_all_category_query)) {
                    $cate_name = $row["cate_name"];

                    echo "<li> <a href='#'>{$cate_name}</a></li>";
                }

?>
               
            </ul>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>





<!-- Side Widget Well -->


</div>

</div>