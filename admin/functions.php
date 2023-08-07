

<?php




function insert_categories() {

    global  $connection;

    if (isset($_POST['submit'])) {
        // Validate and sanitize the input
        $cat_name = trim($_POST['cat_name']);
    
        $cat_name = mysqli_real_escape_string($connection, $cat_name);
    
        if($cat_name == "" || empty($cat_name)) {
    
            echo "This field cannot be empty";
    
        } else {
    
        // Insert the data into the database
        $query = "INSERT INTO categories (cat_name) VALUES ('$cat_name')";
        $result_categories_name = mysqli_query($connection, $query);
    
        if (!$result_categories_name) {
            die('Failed to add category');
        }
    }
    
    header("Location: admin_categories.php");
    exit;
    
    }


}


function delete_categories() {
     
    global $connection;


    
if(isset($_GET['delete'])) {

    $cat_id = $_GET['delete'];

    $query = "DELETE FROM categories WHERE cat_id = {$cat_id}";

    $result_categories_delete = mysqli_query($connection,$query);

    if(!$result_categories_delete) {
        die("Failed to delete the category");
    }
    header("Location: admin_categories.php");
exit;

}

}






function findall_categories() {
     
    global $connection;


$query = "SELECT * FROM categories";
$select_categories = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_categories)) {
    $cat_id = $row["cat_id"];
    $cat_name = $row["cat_name"];

    echo "<tr>";
    echo  "<td>{$cat_id}</td>";
    echo  "<td>{$cat_name}</td>";
    echo  "<td><a href='admin_categories.php?delete={$cat_id}'>Delete</a></td>";
    echo  "<td><a href='admin_categories.php?edit={$cat_id}'>Edit</a></td>";
    echo "</tr>";

}



}


function update_categories() {
     
    global $connection;
    global $cat_id;


if(isset($_POST['update'])) {
    $cat_name = $_POST['cat_name'];
    
    
    $query = "UPDATE categories SET ";
    $query .= "cat_name = '$cat_name'";
    $query .= "WHERE cat_id = $cat_id";
    
    $result_update = mysqli_query($connection,$query);
    if(!$result_update) {
    die("Failed to update category");
    }
    
    header("Location: admin_categories.php");
    }
    

}







function delete_posts() {
     
     global $connection;
 
 
     
 if(isset($_GET['delete'])) {
 
     $post_id = $_GET['delete'];
 
     $query = "DELETE FROM posts WHERE post_id = {$post_id}";
 
     $result_post_delete = mysqli_query($connection,$query);
 
     if(!$result_post_delete) {
         die("Failed to delete the post");
     }
     header("Location: admin_posts.php");
 exit;
 
 }
 
 }



 function findall_posts() {


    global $connection;

    
$query = "SELECT * FROM posts";
$select_posts = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_posts)) {
    $post_id = $row["post_id"];
    $post_author = $row["post_author"];
    $post_title = $row["post_title"];
    $post_category_id = $row["post_category_id"];
    $post_status = $row["post_status"];
    $post_img = $row["post_img"];
    $post_content = $row["post_content"];
    $post_tags = $row["post_tags"];
    $post_comment = $row["post_comment_count"];
    $post_date = $row["post_date"];

    echo "<tr>";
    echo "<td>$post_id</td>";
    echo "<td>$post_author</td>";
    echo "<td>$post_title</td>";
    echo "<td>$post_category_id</td>";
    echo "<td>$post_status</td>";
    echo "<td><img width=100 src='../images/$post_img' alt='image'></td>";
    echo "<td>$post_content</td>";
    echo "<td>$post_tags</td>";
    echo "<td>$post_comment</td>";
    echo "<td>$post_date</td>";
    echo "<td><a href='admin_posts.php?source=edit_post&post_id={$post_id}'>Edit</a></td>";
    echo "<td><a href='admin_posts.php?delete={$post_id}'>Delete</a></td>";
    echo "<tr>";


}


 }


function insert_posts() {

    global $connection;

    
if(isset($_POST['create_post'])) {


    $post_author = $_POST["post_author"];
    $post_title = $_POST["post_title"];
    $post_category_id = $_POST["post_category_id"];
    $post_status = $_POST["post_status"];

    $post_img = $_FILES['post_img']['name'];
    $post_image_temp = $_FILES['post_img']['tmp_name'];


    $post_content = $_POST["post_content"];
    $post_tags = $_POST["post_tags"];

    $post_comment = 4;
    $post_date = date('d-m-y');



    move_uploaded_file($post_image_temp,"../images/$post_img");


    $query = "INSERT INTO posts(post_author,post_title,post_category_id,post_status,post_img,post_content,post_tags,post_comment_count,post_date) ";
    $query .= "VALUES('$post_author','$post_title',$post_category_id,'$post_status','$post_img','$post_content','$post_tags','$post_comment',now())";

    
    $result_post_publish = mysqli_query($connection,$query);

    if(!$result_post_publish) {
        die("Failed to save the post data");
    }

    header("Location: add_post.php");

}

}


 ?>
 