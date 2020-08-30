<?php
	
	//ini untuk penyambung ke database kategori  
	include_once("../../function/koneksi.php");
	include_once("../../function/helper.php");
	
	//ini variabel 
	$kategori = $_POST['kategori'];
	$status = $_POST['status'];
	$button = $_POST['button'];
	
	mysqli_query($koneksi, "INSERT INTO kategori (kategori, status) VALUES ('$kategori', '$status')");
	
	header("location:".BASE_URL."index.php?page=my_profile&module=katagori&action=list");