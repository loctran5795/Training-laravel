<?php require_once('db.php') ?>
<?php
    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    } else {
        $notice = '';
        if (isset($_POST['update'])) {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $adress = $_POST['adress'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $id = $_SESSION['id'];

            if ($name && $email && $password) {
                $sql = "UPDATE Account
                SET name = '$name', age = '$age', adress = '$adress', email = '$email', password = '$password'
                WHERE id = $id ";

                if ($_FILES['avatar']['error'] == 0) {
                    $path = $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], "uploads/" . $path);

                    $sql = "UPDATE Account
                    SET avatar = '$path'
                    WHERE id = $id ";
                }

                // if(isset($_FILES['avatar'])) {
                //     $errors = '';
                //     $file_name = $_FILES['avatar']['name'];
                //     $file_tmp =$_FILES['avatar']['tmp_name'];
                //     if(empty($errors)==true){
                //         move_uploaded_file($file_tmp,"upload/".$file_name);
                //         echo "Thành công!!!";
                //      }
                //      else{
                //         print_r($errors);
                //      }
                // }
                

            }

            if ($conn->query($sql) === TRUE) {
                $notice = 'update completed!';
            } else {
                $notice = 'update failed!';
            }
        }
        

    }
    $conn->close();

?>

<?php require_once('head.php') ?>
<?php require_once('header.php') ?>


<section class="content authPage">
    <div class="loginBox">
    <div class="warning"><?= $notice ?></div>
        <h2>Update Information</h2>
        <form action="/update.php" method="POST" enctype="multipart/form-data">
            <label>Avatar</label>
            <input type="file" name="avatar">
            <label>Name</label>
            <input class="form-control" type="text" value="<?= Helper::currentUsers()['name']; ?>" name="name" placehoder="Name.">
            <label>Age</label>
            <input class="form-control" type="text" value="<?= Helper::currentUsers()['age']; ?>" name="age" placehoder="Age.">
            <label>Adress</label>
            <input class="form-control" type="text" value="<?= Helper::currentUsers()['adress']; ?>" name="adress" placehoder="Adress.">
            
            <h4>Gender</h4>
            <div class="container">
                <input class="radio" type="radio" name="radio" value="male" checked="checked">
                <label>Male</label>
                <input class="radio" type="radio" name="radio" value="female" checked="checked">
                <label>Female</label> <br>
            </div>
            <label style="padding-top: 10px;">Email</label>
            <input class="form-control" type="email" value="<?= Helper::currentUsers()['email']; ?>" name="email" placehoder="Enter your email">
            <label>Password</label>            
            <input class="form-control" type="password" value="<?= Helper::currentUsers()['password']; ?>" name="password" placehoder="Password">
            <button name="update" value="1" class="button">Update</button>
        </form>

        

    </div>
</section>

<?php require_once('footer.php') ?> 