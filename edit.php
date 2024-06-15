<?php

    include('dbconnect.php');
    $id = isset($_GET['urut']) ? intval($_GET['urut']) : 0;
    
    $data = $k->query("SELECT * FROM users WHERE id = '".$id."'");
    
    if($data -> num_rows == 1)
    {
        $datauser = $data -> fetch_assoc();
        ?>
        <form action="editaction.php" method="post">
            <input type="text" name="username" required placeholder="Username" value="<?php echo $datauser ['username']?>">
            <input type="text" name="nama" required placeholder="Nama Lengkap" value="<?php echo $datauser ['nama']?>">
            <input type="text" name="email" required placeholder="Email" value="<?php echo $datauser ['email']?>">
            <input type="text" name="paswd" placeholder="Password baru">
            <input type="hidden" name="userid" value="<?php echo $datauser ['id']; ?>">
            <input type="submit" value="Simpan">
    </form>
    <?php

    }
    else{
        echo "data tidak ditemukan";
    }