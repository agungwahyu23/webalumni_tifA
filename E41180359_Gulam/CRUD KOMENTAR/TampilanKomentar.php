<!DOCTYPE html>
<?php include "../js/koneksi.php"; ?>
<head><title>komentar</title></head>
<body> 	
	<table border="1">
		<tr>
            <th>Komentar</th>
			<th>Tanggal</th>
		</tr>
		<?php 
		$query = mysqli_query($koneksi,"select * from komentar_diskusi ");
		while($d = mysqli_fetch_array($query)){
			?>
			<tr>
                <td><?php echo $d['KOMENTAR']; ?></td>
                <td> <?php echo $d['TGL_KOMENTAR'] ; ?></td>

Silahkan Berkomentar<hr/><br/>
<form>
<table>
                <tr><td>Tulis komentar:</td><td><textarea cols="30" rows="5"></textarea></td></tr>
                <tr><td><input type="submit" value="Postkan Komentar"/></td><td><input type="reset" value="hapus"></td></tr>
</table>
</form>
</body>
</html>