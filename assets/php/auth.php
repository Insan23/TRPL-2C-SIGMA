<?php
    include("conn.php");
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //username pass dari form

        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        $sql = "SELECT id FROM akun WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $active = $row['active'];

        $count = mysqli_num_rows($result);

        //jika result mengandung username & pass

        if ($count == 1) {
            session_register("username");
            $_SESSION['login_user'] = $username;

            header("location: ../../pages/dashboard-home.html");
        } else {
            $error = "Username / Password Salah!!!";
        }
    }

 ?>
