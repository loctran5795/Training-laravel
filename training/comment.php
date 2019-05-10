<?php require_once('db.php') ?>
<?php

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    if (isset($_POST['cmt'])) {
        $postId = $_POST['post_id'];
        $content = $_POST['content'];
        $accountId = $_SESSION['id'];
        $sql = "SELECT * FROM comment WHERE post_id = '$postId' AND account_id = '$accountId' AND content = '$content";
        $result = mysqli_query($conn,$sql);
        $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
        if (!isset($rows[0])) {
            $sql = "INSERT INTO comment(account_id, post_id, content)
                    VALUES ('$accountId', '$postId', '$content')";
        } else {
            $sql = "DELETE FROM comment WHERE account_id = $accountId AND post_id = $postId AND content = $content";
        }

        if ($conn->query($sql) === TRUE) {
            $notice= true;
        } else {
            $notice = false;
        }
    }
    header("location: content-post.php?id=" . $postId);
}
$conn->close();

?>