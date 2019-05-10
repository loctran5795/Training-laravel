<?php require_once('db.php') ?>
<?php require_once('head.php') ?>
<?php require_once('header.php') ?>
<?php 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $notice = '';
    
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $content = $_POST['content'];
        $id = $_SESSION['id'];
        if ($_FILES['image']['error'] == 0) {
            $path = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], "images-post/" . $path);

            $sql = "INSERT INTO posts(image_post)
            VALUES ('$path')";
        }
        if ($title && $description && $content && $path) {
            $sql = "INSERT INTO posts(title, description, content, account_id, image_post)
            VALUES ('$title', '$description', '$content', '$id', '$path')";
        }
    }
    if ($conn->query($sql) === TRUE) {
        $notice= 'post successfully';
    } else {
        $notice = "Please fill true information";
    }
}
$conn->close();
?>
<div class="postBox">
    <?= $notice ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">Image</label>
        <input type="file" name="image">
        <label for="">title</label>
        <input class="formBox" type="text" name="title">
        <label for="">description</label>
        <input class="formBox" type="text" name="description">
        <label for="">content</label>
        <textarea class="area" type="text" row="5" name="content" placehoder="what do you think....???"></textarea>
        <!-- <input type="file" name="image"> -->
        <button class="button" name="submit" value='1'>Post</button>
    </form>
</div>



<?php require_once('footer.php') ?>