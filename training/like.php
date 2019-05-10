<?php require_once('db.php') ?>
<?php

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    if (isset($_POST['like'])) {
        $postId = $_POST['post_id'];
        $accountId = $_SESSION['id'];
        $sql = "SELECT * FROM likes WHERE post_id = '$postId' AND account_id = '$accountId'";
        $result = mysqli_query($conn,$sql);
        $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
        if (!isset($rows[0])) {
            $sql = "INSERT INTO likes(account_id, post_id)
                    VALUES ('$accountId', '$postId')";
        } else {
            $sql = "DELETE FROM likes WHERE account_id = $accountId AND post_id = $postId";
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