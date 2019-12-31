<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA</title>
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
	</div>
    <br/>
	
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
    <?php 
	include '../web_alumni/config/koneksi.php';
	$id_status = $_GET['id_status']; 
	$query = mysqli_query($koneksi, "SELECT * FROM status_alumni WHERE id_status='$id_status'")or die(mysql_error());
	$nomor = 1;
	while($dt = mysqli_fetch_array($query)){
	?>
    <form action="update.php" method="post">		
		<table>
			<tr>
				<td>status</td>
				<td>
					<input type="hidden" name="id_status" value="<?php echo $dt['id_status'] ?>">
					<input type="text" name="nama_status" value="<?php echo $dt['nama_status'] ?>">
				</td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>