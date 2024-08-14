<?php
    $koneksi = mysqli_connect("localhost", "root", "", "rpl_crud");
    
    if (!$koneksi) {
        die(mysqli_connect_error($koneksi));
    }
?>