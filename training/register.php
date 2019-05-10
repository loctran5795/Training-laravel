<?php require_once('db.php') ?>
<?php
 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $notice = '';
        if (isset($_POST['create'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($name && $email && $password) {
                $sql = "INSERT INTO Account(name, email, password)
                VALUES ('$name', '$email', '$password')";
            };
        };
            
        if ($conn->query($sql) === TRUE) {
            $notice= 'Account successfully';
        } else {
            $notice = "Please fill true information";
        }
    };

    $conn->close();
?>

<?php require_once('head.php') ?>
<?php require_once('header.php') ?>

<section class="content authPage">
    <div class="loginBox">
    <div class="warning"><?= $notice ?></div>
        <h2>Register</h2>
        <form action="/register.php" method="POST">
            <label>Name</label>
            <input class="form-control" type="text" name="name" placehoder="Name...">
            <label>Email</label>
            <input class="form-control" type="email" name="email" placehoder="Enter your email">
            <label>Password</label>            
            <input class="form-control" type="password" name="password" placehoder="Password">
            <button name="create" value="1" class="button">Register</button>
        </form>
    </div>
</section>

<?php require_once('footer.php') ?>