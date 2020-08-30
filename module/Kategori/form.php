<?php
	//from edit katagori
	$kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;
	
	$kategori = "";
	$status = "";
	$button ="Add";
	
	if($kategori_id){
		$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kategori_id='$kategori_id'");
		$row = mysqli_fetch_assoc($queryKategori);
		
	$kategori = $row['kategori'];
	$status = $row['status'];
	$button = "Update";
	}
?>

<form action="<?php echo BASE_URL."module/kategori/action.php"; ?>" method="POST">
	
	<!-- ini form untuk add kategori barang-->
	<div class="element-form">	
		<label>Kategori</label>
		<span><input type="text" name="kategori" value="<?php echo $kategori; ?>" /></span>
	</div>
	
	<div class="element-from">
		<label>Status</label>
		<span>
			<input type="radio" name="status" velue="on" <?php if($status == "on") {echo "checked='true'";}?>/> on
			<input type="radio" name="status" velue="off"<?php if($status == "off") {echo "checked='true'";}?>/> off
		</span>
	</div>
	
	<div class="element-form">
		<span><input type="submit" name="button" value="<?php echo $button; ?>"/></span>
	</div>
	
</form>