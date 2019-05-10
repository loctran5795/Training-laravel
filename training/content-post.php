<?php require_once('db.php') ?>
<?php require_once('head.php') ?>
<?php require_once('header.php') ?>

<?php 


$sql = "SELECT * FROM posts WHERE id = ". $_GET['id'] ." ";
$resuft = mysqli_query($conn, $sql);
$posts = mysqli_fetch_all($resuft,MYSQLI_ASSOC);

$sql = "SELECT account_id FROM likes WHERE post_id = ".$_GET['id']."";
$resuft = mysqli_query($conn, $sql);
$likes = mysqli_fetch_all($resuft, MYSQLI_ASSOC);

$isLike = false;

foreach ($likes as $like) {
    if ($like['account_id'] == $_SESSION['id']) {
        $isLike = true;
    }
}

$sql = "SELECT * FROM comment WHERE post_id = ".$_GET['id']."";
$resuft = mysqli_query($conn, $sql);
$comments = mysqli_fetch_all($resuft,MYSQLI_ASSOC);

?>

<section class="container">
    <div class="contentBox">
        <?php foreach ($posts as $key => $post) : ?>
            <div class="title">
                <h1><?=  $post["title"]; ?></h1>
            </div>
            <div class="imagePost">
                <img src="/images-post/<?=  $post["image_post"]; ?>" alt="1223">
            </div>
            
            <div class="like">
                <form action="/like.php" method="POST">
                    <button name="like" value="1">like</button>
                    <input type="hidden" name="post_id" value="<?=  $post["id"]; ?>">
                </form>
                <div>
                <?php if(count($likes)) : ?>
                    <?php if($isLike) : ?>
                        <p>ban va <?= count($likes)-1 ?> thic </p>
                    <?php else : ?>
                        <p> <?= count($likes) ?> <span>nguoi thich cai nay</span> </p>
                    <?php endif; ?>
                <?php else: ?>
                    <p><span>ko co ai thich</span> </p>
                <?php endif; ?>

                </div>
            </div>
            
            
            <div class="comment">

                <form action="/comment.php" method="POST">
                    <button name="cmt" value="1">comment</button>
                    <input type="hidden" name="post_id" value="<?=  $post["id"]; ?>">
                    <textarea type="text" name="content" rows="1" placeholder="comment ...."></textarea>
                </form>
            </div>
            <div>
                <h1><?= count($comments) ?></h1>
                <ul>
                    <li>
                        <?php foreach($comments as $comment) : ?>
                            <div class="imageComment">
                                <img src="/images/<?= Helper::getUser($comment['account_id'])['avatar'] ?>" alt="">
                            </div>
                            <?=  Helper::getUser($comment['account_id'])['name'] ?> 
                            <?= $comment['content'] ?> 
                        <?php endforeach; ?>
                    </li>
                </ul> 
                
            
            </div>
        
            <div class="contentPost">
                <?=  $post["content"]; ?> 
            </div>
            
        <?php endforeach; ?>

    </div>
</section>
    

    
    
        
        
    

<?php require_once('footer.php') ?>
