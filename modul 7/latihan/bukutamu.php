<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu</title>
</head>
<body>
	<h1>Buku Tamu untuk Database MySQLi</h1>
	<form action="prosesTambah.php" method="post">
		Nama : <input type="text" name="nama" size="35" maxlength="50"> <br>
		Email : <input type="text" name="email" size="35" maxlength="50"> <br>
		Komentar : <textarea name="komentar" rows="5" cols="30"></textarea> <br>
		<input type="submit" name="" value="Simpan">
		<input type="reset" name="" value="Reset">
	</form>
</body>
</html>