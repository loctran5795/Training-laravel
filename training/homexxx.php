<?php require_once('db.php') ?>
<?php require_once('head.php') ?>
<?php require_once('header.php') ?>
<?php

if(isset($_GET['logout'])) {
    unset($_SESSION["id"]);
    header("location: /welcome.php");    
}

if(!isset($_SESSION['id'])) {
    header("location: /welcome.php");
} else {
    $notice = $_SESSION['id']; 
//    unset($_SESSION["id"]);

}
?>

<section class="content">
    <div>
        <!-- <?= $notice ?>
        <?= Helper::currentUsers()['email']; ?> -->
    
    </div>
    
    
</section>

<?php require_once('footer.php') ?>