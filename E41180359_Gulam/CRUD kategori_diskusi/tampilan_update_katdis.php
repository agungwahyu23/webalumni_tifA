<!DOCTYPE html>
<?php include "../js/koneksi.php"; ?>
<html>
<head>
	<title>SMK TRUNOJOYO</title>
	<link rel="stylesheet" type="text/css" href="tampilancarialumni.css">
</head>
<body>

	<h2>DATA KATEGORI DISKUSI </h2>
	<br/>
	<a href="tmbah_kategori_diskusi.php">+ TAMBAH KATEGORI</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		$query = mysqli_query($koneksi,"select * from kategori_diskusi ");
		while($d = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				
				<td><?php echo $d['KATEGORI']; ?></td>
				<td>
				<a class="btn btn-success" href="updateKatDis.php?ID_KATEGORIDISK=<?php echo $d['ID_KATEGORIDISK']; ?>">Edit</a>
				<a class="btn btn-danger" href="ProsesUpdateKatDis.php?ID_KATEGORIDISK=<?php echo $d['ID_KATEGORIDISK']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>