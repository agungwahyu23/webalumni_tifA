<!DOCTYPE html>
<html>
<?php
include '../web_alumni/config/koneksi.php'; ?>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>
 
	<h2>DATA SISWA</h2>
	<br/>
	<a href="status.php">+ TAMBAH SISWA</a>
	<br/>
	<br/>
	<table border="1">
    <tr>
			<th>nomor</th>
			<th>nama_status</th>
            <th>aksi</th>
		</tr>
		<?php 
		
		$no = 1;
		$data = mysqli_query($koneksi,"select * from status_alumni");
		while($d = mysqli_fetch_array($data)){
            ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_status']; ?></td>
				<td>
                <a href="edit.php?id_status=<?php echo $d['id_status']; ?>">EDIT</a>
				<a href="hapus.php?id_status=<?php echo $d['id_status']; ?>">HAPUS</a>
				</td>
			</tr>
            <?php 
            }
            ?>
        </table>
    </body>
    </html>