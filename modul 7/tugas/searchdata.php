<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Data</title>
</head>
<body>
    <?php
        $cari=$_POST["cari"];
        $conn=mysqli_connect("localhost","root","")
        or die("Koneksi Gagal");
        mysqli_select_db($conn,"kampus");
        $search = "select * from mahasiswa where nama like '%$cari%'";
        $hasil = mysqli_query($conn,$search);
        $jumlah = mysqli_num_rows($hasil);
        echo "<br>";
        echo "Ditemukan : $jumlah Data <br>";
        while($row=mysqli_fetch_array($hasil)){
            echo "NRP : ";echo $row[0];echo "<br>";
            echo "Nama : ";echo $row[1];echo "<br>";
            echo "Alamat : ";echo $row[2];echo "<br>";
            echo "ID Jurusan : ";echo $row[3];echo "<br>";
        }
    ?>
</body>
</html>