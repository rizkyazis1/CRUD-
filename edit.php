<?php
    include 'koneksi.php';
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];

    $sql = "UPDATE siswa SET nama = '$nama', umur = '$umur; where id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    if (!$query) {
        die(mysqli_error($koneksi));
    }

    header("Location: index.php");
?>