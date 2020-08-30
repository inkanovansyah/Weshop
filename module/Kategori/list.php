<!--ini untuk buttom tambah kategori-->
<div id="frame-tambah">
	<a href="<?php echo BASE_URL."index.php?page=my_profile&module=kategori&action=form"; ?>" class="tombol-action">+ Tambah Kategori</a>
</div>

<?php
	//ini untuk memasukan add kategori barang
	$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori");
	
	//ini untuk kategori yang diambil dari data base yang ditampilkan halaman kategori
	if(mysqli_num_rows($queryKategori) == 0){
		echo "<h3>Saat ini belum ada nama kategori di dalam tabel kategori</h3>";
	}else{
		
		echo "<table class='table-list'>";
		
		echo "<tr class='baris-title'>
				<th class='kolom-nomer'>No</th>
				<th class='kiri'>Kategori</th>
				<th class='tengah'>Status</th>
				<th class='kanan'>Action</th>
			</tr>";
			
		$no=1;
		while($row=mysqli_fetch_assoc($queryKategori)){
			
			echo "<tr>
					<td class='kolom-nomer'>$no</td>
					<td class='kiri'>$row[kategori]</td>
					<td class='tengah'>$row[status]</td>
					<td class='tengah'>
						<a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=kategori&action=form&kategori_id=$row[kategori_id]'>Edit</a>
					</td>
				<tr>";
			//variabel ini akan menambahkan nilai dari nomer di table
			$no++;
				}
	echo "</table>";
	}
?>