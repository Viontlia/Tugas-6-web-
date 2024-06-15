<?php
session_start();

    $server = '127.0.0.1:3306';//localhost:3306
    $username = 'a122206796';
    $password = 'polke001';
    $namadb = 'a122206796';

   $k = new mysqli($server, $username, $password, $namadb);
   if($k->connect_errno)
   {
        echo "failed ", $k->connect_error;
        exit();
   }