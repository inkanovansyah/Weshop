<?php
	//ini untuk koneksi login
	
	//batu variabel 
	$server = "localhost";
	$username = "root";
	$password = "";
	$database ="weshop";
	
	//LOGIKA UNTUK LOGIN 
	$koneksi = mysqli_connect($server, $username, $password, $database) or die ("koneksi ke database gagal");