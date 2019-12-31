<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH FORUM DISKUSI</title>
</head>
<body>
 	
	<h3>TAMBAH FORUM DISKUSI</h3>
    <?php
	include '../js/koneksi.php';
		?>
		<form method="post" action="ProsesTambahForDis.php">
			<table>
                <tr>			
					<td>
						<input type="hidden" name="ID_DISKUSI" >
					</td>
				</tr>
				<tr>
					<td>ID_KATEGORIDISK</td>
					<td><input type="text" name="ID_KATEGORIDISK" >
                    </td>
				</tr>
				<tr>
					<td>ID_USER</td>
					<td><input type="text" name="ID_USER" >
                    </td>
				</tr>
                <tr>
					<td>TITLE</td>
					<td><input type="text" name="TITLE" >
                    </td>
				</tr>
                <tr>
					<td>CONTENT</td>
					<td><input type="text" name="CONTENT" >
                    </td>
				</tr>
                 <tr>
					<td>TANGGAL_POST</td>
					<td><input type="date" name="TANGGAL_POST" >
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