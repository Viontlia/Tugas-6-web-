<?php
include("dbconnect.php");

$id = isset($_GET['urut']) ? intval($_GET['urut']) : 0;

$delete = $k->query("DELETE FROM users WHERE id=".$id);

if($delete)
{
    header("Location: main.php");
}
else
{
    echo "hapus data gagal";
}
