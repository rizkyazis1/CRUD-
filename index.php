<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: #697565;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, 
            Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .tombol {
            background-color: aliceblue;
            width: 150px;
            height: 30px;
            margin-left: 300px;
            font-size: 16px;
            font-weight: bold;
        }
        .container {
            margin-left: 300px;
        }
        table {
            background: #E7E8D8;
        }
    </style>
</head>
<body>
    <div class="container" style="width:50%">
        <table border="1" width="50% ">
            <tr>
                <td>
                    Id
                </td>
                <td>
                    Nama
                </td>
                <td>
                    Umur
                </td>
                <td>
                    Aksi
                </td>
            </tr>
            
        <?php
        include 'koneksi.php';
        $query = mysqli_query($koneksi, 'select * from siswa');
        while ($siswa = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td>
                    <?= $siswa['id'] ?>
                </td>
                <td>
                    <?= $siswa['nama'] ?>
                </td>
                <td>
                    <?= $siswa['umur'] ?>
                </td>
                <td>
                    <a href="edit.php?id=<?= $siswa['id'] ?>"><button type="submit">Edit</button></a>

                <a href="proses_hapus.php?nama=<?= $siswa['nama'] ?>"><button type="submit">Hapus</button></a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
    <button class="tombol"><a href="tambah_siswa.php">Tambah siswa</a></button>
</body>
</html>