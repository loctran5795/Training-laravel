
<?php

class Helper
{
    public static function currentUsers()
    {
        if (isset($_SESSION['id'])) {
            return self::getUser($_SESSION['id']);
        }

        return null;
    }

    public static function getUser($id)
    {
        $servername = "localhost";
        $username = "debian-sys-maint";
        $password = "2XN6Mr1RTVcoY1ZL";
        $dbname = "training";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM Account WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_all($result,MYSQLI_ASSOC)[0];
        
        return $user;
    }

}





?>