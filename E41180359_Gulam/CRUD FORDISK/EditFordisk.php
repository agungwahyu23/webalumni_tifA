<!DOCTYPE html>
<html>
<head>
	<title>EDIT FORDISK</title>
</head>
<body>
 
	<h2>CRUD FORDISK</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT </h3>
    <?php
	include "../js/koneksi.php";
	$ID_DISKUSI = $_GET['ID_DISKUSI'];
	$data = mysqli_query($koneksi,"select * from post_diskusi where ID_DISKUSI='$ID_DISKUSI'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="ProsesEditFordisk.php">
			<table>
				<tr>			
					<td>
						<input type="hidden" name="ID_DISKUSI" value="<?php echo $d['ID_DISKUSI']; ?>">
					</td>
				</tr>
				<tr>
					<td>ID_KATEGORIDISK</td>
					<td><input type="text" name="ID_KATEGORIDISK" value="<?php echo $d['ID_KATEGORIDISK']; ?>">
                    </td>
				</tr>
				<tr>
					<td>ID_USER</td>
					<td><input type="text" name="ID_USER" value="<?php echo $d['ID_USER']; ?>">
                    </td>
				</tr>
                <tr>
					<td>TITLE</td>
					<td><input type="text" name="TITLE" value="<?php echo $d['TITLE']; ?>">
                    </td>
				</tr>
                <tr>
					<td>CONTENT</td>
					<td><input type="text" name="CONTENT" value="<?php echo $d['CONTENT']; ?>">
                    </td>
				</tr>
                 <tr>
					<td>TANGGAL_POST</td>
					<td><input type="date" name="TANGGAL_POST" value="<?php echo $d['TANGGAL_POST']; ?>">
                    </td>
				</tr>
                <td>
                <input type="submit" value="Simpan" name="ubah" class="btn btn-success" >
                <a href="Tampilan_Edit_Fordisk.php" class="btn btn-warning">Batal</a>
                </td>
			</table>
		</form>
        <?php 
	}
	?>
</body>
</html>