<?php require_once('head.php') ?>
<?php require_once('header.php') ?>
<?php require_once('db.php') ?>
<?php
$notice = '';
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email && $password) {
        $sql = "SELECT * FROM Account WHERE email = '$email' AND password = '$password' LIMIT 1"; 
        $result = mysqli_query($conn, $sql);
        $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

        if ($rows[0]) {
            $user = $rows[0];
            $_SESSION["id"] = $user['id'];

            header("location: home.php?id=" . $user['id']);
        } else {
            $notice = 'email & passwiord are wrong!';
        }
    }
}
?>

<section class="content authPage">
<div class="loginBox">
    <h2>Sign In</h2>
    <?= $notice ?>
    <form action="" method="POST">
        <label>Email</label>
        <input type="email" name="email" placehoder="Enter your email">
        <label>Password</label>            
        <input type="password" name="password" placehoder="Password">
        <button class="button" name="login">Sign In</button>
    </form>
</div>

</section>

<?php require_once('footer.php') ?>
