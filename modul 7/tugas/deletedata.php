<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
</head>
<body>
    <?php
        $hapus=$_POST["hapus"];
        $conn=mysqli_connect("localhost","root","")
        or die("Koneksi Gagal");
        mysqli_select_db($conn,"kampus");
        $hasil = mysqli_query($conn, "delete from mahasiswa where nrp like '%$hapus%'");
        echo "Data Berhasil Dihapus";
    ?>
</body>
</html>