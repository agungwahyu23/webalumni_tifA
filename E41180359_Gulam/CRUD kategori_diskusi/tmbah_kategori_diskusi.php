<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH KATEGORI DISKUSI</title>
</head>
<body>
 
	<h2>CRUD Alumni</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH KATEGORI DISKUSI</h3>
    <?php
	include '../js/koneksi.php';
		?>
		<form method="post" action="ProsesTambahKatDis.php">
			<table>
				<tr>
					<td>KATEGORI</td>
					<td><input type="text" name="KATEGORI" >
                    </td>
				</tr>
            <tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
			</table>
		</form>
</body>
</html>