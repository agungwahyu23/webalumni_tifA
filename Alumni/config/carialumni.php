<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>

	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="alumni.php">+ TAMBAH PROFIL</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>no</th>
			<th>NISN</th>
			<th>ID_USER</th>
			<th>Nama</th>
			<th>jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
            <th>alamat</th>
            <th>No Telp</th>
            <th>Nama Ayah</th>
            <th>Pekerjaan Ayah</th>
            <th>Nama Ibu</th>
            <th>Pekerjaan Ibu</th>
            <th>Tahun Masuk</th>
            <th>Tahun Lulus</th>
            <th>No Ijasah</th>
            <th>No SKHUN</th>
            <th>Status</th>

		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from profil");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NISN']; ?></td>
				<td><?php echo $d['ID_USER']; ?></td>
				<td><?php echo $d['NM_LENGKAP']; ?></td>
                <td><?php echo $d['JENKEL']; ?></td>
                <td><?php echo $d['TEMPAT_LAHIR']; ?></td>
                <td><?php echo $d['TGL_LAHIR']; ?></td>
                <td><?php echo $d['ALAMAT']; ?></td>
                <td><?php echo $d['NO_TELP']; ?></td>
                <td><?php echo $d['NM_AYAH']; ?></td>
                <td><?php echo $d['PEKERJAAN_AYAH']; ?></td>
                <td><?php echo $d['NM_IBU']; ?></td>
                <td><?php echo $d['PEKERJAAN_IBU']; ?></td>
                <td><?php echo $d['THN_MASUK']; ?></td>
                <td><?php echo $d['THN_LULUS']; ?></td>
                <td><?php echo $d['NO_IJAZAH']; ?></td>
                <td><?php echo $d['NO_SKHUN']; ?></td>
                <td><?php echo $d['STATUS']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>