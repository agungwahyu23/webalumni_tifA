<!DOCTYPE html>
<html>
<head>
	<title>KOMENTAR</title>
</head>
<body>
 	
	<h3>KOMENTAR</h3>
    <?php
	include '../js/koneksi.php';
		?>
		<form method="post" action="ProsesTambahKomentar.php">
			<table>
                <tr>			
					<td>
						<input type="hidden" name="ID_KOMENTAR" >
					</td>
				</tr>
				
				<tr>
					<td>ID_USER</td>
					<td><input type="text" name="ID_USER" >
                    </td>
				</tr>
                <tr>
					<td>ID_DISKUSI</td>
					<td><input type="text" name="ID_DISKUSI" >
                    </td>
				</tr>
                <tr>
					<td>KOMENTAR</td>
					<td><input type="text" name="KOMENTAR" >
                    </td>
				</tr>
                 <tr>
					<td>TGL_KOMENTAR</td>
					<td><input type="date" name="TGL_KOMENTAR" >
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