<!DOCTYPE html>
<html>
<head>
	<title>EDIT ADMIN</title>
</head>
<body>
 
	<h2>CRUD ADMIN</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT </h3>
    <?php
	include '../config/koneksi.php';
	$ID_USER = $_GET['ID_USER'];
	$data = mysqli_query($koneksi,"select * from user where ID_USER='$ID_USER'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="ProsesEditUser.php">
			<table>
				<tr>			
					<td>ID_USER</td>
					<td>
						<input type="text" name="ID_USER" value="<?php echo $d['ID_USER']; ?>">
					</td>
				</tr>
				<tr>
					<td>ID_GRUP</td>
					<td><input type="number" name="ID_GRUP" value="<?php echo $d['ID_GRUP']; ?>">
                    </td>
				</tr>
				<tr>
					<td>USERNAME</td>
					<td><input type="text" name="USERNAME" value="<?php echo $d['USERNAME']; ?>">
                    </td>
				</tr>
				<tr>
                    <td>PASSWORD</td>
					<td><input type="text" name="PASSWORD" value="<?php echo $d['PASSWORD']; ?>"></td>
					<td><input type="submit" value="SIMPAN" value="<?php echo $d['PASSWORD']; ?>"></td>
				</tr>		
                <tr>
                <td>EMAIL</td>
					<td><input type="text" name="EMAIL" value="<?php echo $d['EMAIL']; ?>"></td>
                </tr>
                <tr>
                <td>name</td>
					<td><input type="text" name="name" value="<?php echo $d['NAMA_LENGKAP']; ?>"></td>
                </tr>
			</table>
		</form>
        <?php 
	}
	?>
</body>
</html>