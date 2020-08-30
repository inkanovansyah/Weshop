<!--ini untuk buttom tambah kategori-->
<div id="frame-tambah">
	<a href="<?php echo BASE_URL."index.php?page=my_profile&module=barang&action=form"; ?>" class="tombol-action">+ Tambah Barang</a>
</div>

<?php
	//ini untuk memasukan from kategori ke form barang
	$query = mysqli_query($koneksi, "SELECT barang.*, kategori.kategori FROM barang JOIN kategori ON barang.kategori_id=kategori.kategori_id");
	
	//ini untuk barang yang diambil dari database yang ditampilkan halaman barang
	if(mysqli_num_rows($query) == 0){
		echo "<h3>Maaf, Saat ini belum ada barang didalam tabel</h3>";
	}else{
		
		echo "<table class='table-list'>";
		
		echo "<tr class='baris-title'>
				<th class='kolom-nomer'>No</th>
				<th class='kiri'>Barang</th>
				<th class='kiri'>kategori</th>
				<th class='kiri'>Harga</th>
				<th class='tengah'>Status</th>
				<th class='kanan'>Action</th>
			</tr>";
			
		$no=1;
		while($row=mysqli_fetch_assoc($query)){
			
			echo "<tr>
					<td class='kolom-nomer'>$no</td>
					<td class='kiri'>$row[nama_barang]</td>
					<td class='kiri'>$row[kategori]</td>
					<td class='kiri'>".rupiah($row["harga"])."</td>
					<td class='tengah'>$row[status]</td>
					<td class='tengah'>
						<a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=barang&action=form&barang_id=$row[barang_id]'>Edit</a>
					</td>
				<tr>";
			//variabel ini akan menambahkan nilai dari nomer di table
			$no++;
				}
	echo "</table>";
	}
?>