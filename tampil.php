<?php
include "koneksi.php";

// perintah
$query =  mysqli_query($koneksi, "select * from siswa");

// ambil datanya, datanya berbentuk Array
while ($data = mysqli_fetch_array($query)){
    echo $data ["nama"];
    echo "<br />";
    echo $data ["umur"];
    echo "<hr />";

}

?>