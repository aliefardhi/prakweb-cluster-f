<?php

	$conn = mysqli_connect('localhost', 'root', '', 'minggu-6');
	if(!$conn){
	    die("Koneksi gagal:".mysqli_connect_error());
	}

?>