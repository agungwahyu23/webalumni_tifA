<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
</head>
<body>
	
	<br/>
	<a href="index.php">Lihat Semua Data</a>
	<br/>
	<h3>Edit data</h3>
	<?php 
	include '../js/koneksi.php';
	$ID_KATEGORIDISK = $_GET['ID_KATEGORIDISK'];
	$data = mysqli_query($koneksi,"select * from kategori_diskusi where ID_KATEGORIDISK='$ID_KATEGORIDISK'");
	$nomor = 1;
	while($dt = mysqli_fetch_array($data)){
	?>
	<form action="ProsesUpdateKatDis.php" method="post">		
		<table>
			<tr>
				<td>ID_KATEGORI</td>
				<td>
				<input type="hidden" name="ID_KATEGORIDISK" value="<?php echo $dt['ID_KATEGORIDISK'] ?>">
				<input type="text" name="KATEGORI" value="<?php echo $dt['KATEGORI'] ?>">
				</td>		
				<td>
                <input type="submit" value="Simpan" name="ubah" class="btn btn-success" >
                <a href="tampilan_update_katdis.php" class="btn btn-warning">Batal</a>
                </td>			
			</tr>						
		</table>
	</form>
	<?php } ?>
</body>
</html>