<?php
    include("dbconnect.php");

    if (isset($_POST['username']) && isset($_POST['paswd'])) {
    $username = $_POST['username'];
    $password = md5(sha1($_POST['paswd']));

    $rs = $k->query("SELECT * FROM users WHERE username='".$username."' AND paswd = '".$password."' AND active=
    if($rs->num_rows == 1)
    {
        $baris = $rs->fetch_assoc();
        session_start();
        $_SESSION['username'] = $baris['username'];
        $_SESSION['userid'] = $baris['id'];
        $_SESSION['nama'] = $baris['nama'];
        $_SESSION['views'] = 0;
        $_SESSION['is_logged_in'] = TRUE;
        header("Location: main.php");
        exit();
    }
    else
    {
        echo "Username atau password salah";
    }
    }
    else {
        echo "Isi form dulu";
    }
