<?php +
include "koneksi.php";

// perintah
mysqli_query($koneksi, "DELETE FROM `siswa` WHERE nama");