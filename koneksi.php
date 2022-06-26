<?php

	$databaseHost = "localhost";
 	$databaseName = "kampus";
 	$databaseUsername = "root";
 	$databasePassword = "";


	$con = mysqli_connect("$databaseHost","$databaseUsername","$databasePassword","$databaseName");

	if (mysqli_connect_errno()) {
		// code...
		echo "<h1>Koneksi gagal : ". mysql_connect_errno(). "</h1>";
	}
?>