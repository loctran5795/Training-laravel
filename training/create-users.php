<?php require_once('db.php') ?>

<?php 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    // $sql = "DROP TABLE IF EXISTS Account";
// $sql = "CREATE TABLE Account (
//     id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(30) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     password VARCHAR(30) NOT NULL,
//     age INT(10),
//     adress VARCHAR(50),
//     avatar VARCHAR(30),
//     gender VARCHAR(60),
//     reg_date TIMESTAMP
//     )";

// $sql = "CREATE TABLE posts (
//     id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     account_id VARCHAR(30) NOT NULL,
//     title VARCHAR(60),
//     description VARCHAR(50),
//     content VARCHAR(500),
//     image_post VARCHAR(50),
//     published BOOLEAN,
//     reg_date TIMESTAMP
//     )";


// $sql = "DROP TABLE IF EXISTS likes";

// $sql = "CREATE TABLE comment (
//     id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     account_id VARCHAR(30) NOT NULL,
//     post_id VARCHAR(30) NOT NULL,
//     content VARCHAR(500),
//     reg_date TIMESTAMP
//     )";

// $sql = "CREATE TABLE likes (
//     id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     account_id VARCHAR(30) NOT NULL,
//     post_id VARCHAR(50) NOT NULL,
//     reg_date TIMESTAMP
// )";

if ($conn->query($sql) === TRUE) {
        echo "Table Users created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
$conn->close();


?>
