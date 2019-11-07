<!DOCTYPE html>
<html>
<head>
	<title>SMK TRUNOJOYO</title>
	<link rel="stylesheet" type="text/css" href="tampilancarialumni.css">
</head>
<body>

	<h2>DATA SISWA </h2>
	<br/>
	<a href="alumni.php">+ TAMBAH PROFIL</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>NISN</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Tahun Masuk</th>
            <th>Tahun Lulus</th>
            <th>Status</th>

		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select profil .*, status_alumni.NAMA_STATUS from profil, status_alumni where profil.NIS= STATUS_ALUMNI.ID_STATUS ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['NIS']; ?></td>
				<td><?php echo $d['NM_LENGKAP']; ?></td>
                <td><?php echo $d['JENKEL']; ?></td>
                <td><?php echo $d['TEMPAT_LAHIR']; ?></td>
                <td><?php echo $d['TGL_LAHIR']; ?></td>
                <td><?php echo $d['ALAMAT']; ?></td>
                <td><?php echo $d['NO_TELP']; ?></td>
                <td><?php echo $d['THN_MASUK']; ?></td>
                <td><?php echo $d['THN_LULUS']; ?></td>
                <td><?php echo $d['NAMA_STATUS']; ?></td>
				<td>
					<a href="ubah.php?id=<?php echo $d['id']; ?>">UBAH</a>
					<a href="detail.php?id=<?php echo $d['id']; ?>">DETAIL</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>