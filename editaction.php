<?php
include('dbconnect.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil dan validasi input dari form
    $id = isset($_POST['userid']) ? $_POST['userid'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $paswd = isset($_POST['paswd']) ? $_POST['paswd'] : '';

    
    if (!empty($paswd)) {
        $paswd = md5(sha1($k->real_escape_string($paswd)));
        $query = "UPDATE users SET username='$username', nama='$nama', email='$email', paswd='$paswd' WHERE id='$id'";
    } else {
        $query = "UPDATE users SET username='$username', nama='$nama', email='$email' WHERE id='$id'";
    }

    if ($k->query($query) === TRUE) {
        echo "Data pengguna berhasil diperbarui.";
    
    } else {
        echo "Error: " . $query . "<br>" . $k->error;
    }
} else {
    echo "Permintaan tidak valid.";
}
?>
