<!DOCTYPE html>
<?php include "../js/koneksi.php"; ?>
<html>
<head>
	<title>SMK TRUNOJOYO</title>
	<link rel="stylesheet" type="text/css" href="tampilancarialumni.css">
</head>
<body>

	<h2>DATA FORDISK </h2>
	<br/>
	<a href="tambahfordis.php">+ TAMBAH FORUM DISKUSI</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th> 
			<th>Title</th>
            <th>Content</th>
            <th>Tanggal_Post</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		$query = mysqli_query($koneksi,"select * from post_diskusi ");
		while($d = mysqli_fetch_array($query)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['TITLE']; ?></td>
                <td><?php echo $d['CONTENT']; ?></td>
                <td> <?php echo $d['TANGGAL_POST'] ; ?></td>
				<td>
				<a class="btn btn-success" href="EditFordisk.php?ID_DISKUSI=<?php echo $d['ID_DISKUSI']; ?>">Edit</a>
				<a class="btn btn-success" href="ProsesEditFordisk.php?ID_DISKUSI=<?php echo $d['ID_DISKUSI']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>