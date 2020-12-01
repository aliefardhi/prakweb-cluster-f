<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<?php 
		$nrp=$_POST["nrp"];
		$nama=$_POST["nama"];
		$alamat=$_POST["alamat"];
		$jurusan=$_POST["jurusan"];
		
		$conn = mysqli_connect("localhost","root","")
		or die("koneksi gagal");
		mysqli_select_db($conn, "kampus");

		if($jurusan == "Telekomunikasi"){
			$ID_Jur = "TT";
		}else if($jurusan == "Elka"){
			$ID_Jur = "EK";
		}else if($jurusan == "IT"){
			$ID_Jur = "IT";
		}else if($jurusan == "Elin"){
			$ID_Jur = "EL";
		}

		echo "NRP : $nrp <br>";
		echo "Nama : $nama <br>";
		echo "Alamat : $alamat <br>";
		echo "ID Jurusan : $ID_Jur <br>";
		$sqlstr = "insert into mahasiswa(nrp,nama,alamat,ID_Jur) values ('$nrp','$nama','$alamat','$ID_Jur')";
		$hasi = mysqli_query($conn,$sqlstr);
		echo "Data berhasil disimpan <br>";
	 ?>
</body>
</html>