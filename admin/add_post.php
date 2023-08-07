<?php include "includes/admin_header.php"; ?>

<?php 

// if($connection) echo "connected";

?>

<body>

    <div id="wrapper">



        <!-- Navigation -->
<?php include "includes/admin_navigation.php" ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>


<?php insert_posts(); ?>






                        <form action="" method="post" enctype="multipart/form-data">    
     
     
     <div class="form-group">
        <label for="title">Post Title</label>
         <input type="text" class="form-control" name="post_title">
     </div>

     <div class="form-group">
         
         <label for="post_category">Post Category ID</label>
         <input type="text" class="form-control" name="post_category_id">
         
     </div>
     
    <div class="form-group">
        <label for="title">Post Author</label>
        <input type="text" class="form-control" name="post_author">
    </div>
    
   <div class="form-group">
        <label for="post_status">Post Status</label>
        <input type="text" class="form-control" name="post_status">
    </div>
    
   <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" name="post_img">
    </div>
  
    <div class="form-group">
        <label for="post_tags">Post Tags</label>
        <input type="text" class="form-control" name="post_tags">
    </div>
     
     <div class="form-group">
        <label for="post_content">Post Content</label>
        <textarea name="post_content" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    
    <div class="form-group">
    
    <input type="submit" class="btn btn-primary" name="create_post" value="Publish">
    
    </div>
    
    
    
</form>










                                             
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   <?php include "includes/admin_footer.php" ?>
</body>

</html>
