
<?php require_once('head.php') ?>
<?php require_once('header.php') ?>
<?php require_once('db.php') ?>
<?php
$notice = '';
// unset($_SESSION["id"]);

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
            $notice = 'email & password not true!';
        }
    }
}
?>

<section class="content authPage">
    <div class="loginBox">
        <h2>Sign In</h2>
        <form action="" method="POST">
            <label>Email</label>
            <input class="form-control" type="email" name="email" placehoder="Enter your email">
            <label>Password</label>            
            <input class="form-control" type="password" name="password" placehoder="Password">
            <button class="button" name="login">Sign In</button>
        </form>
    </div>

</section>

<?php require_once('footer.php') ?>
