    <html>
    <head><title>Aplikasi Kirim Email dengan PHP</title></head>
    <body>
    	<h1>Demo Aplikasi Kirim Email dengan PHP</h1>
    	<form action="" method="post">
    	<table width="100%">
    		<tr>
    			<td width="150">Pengirim: </td>
    			<td><input type="text" name="pengirim" size="40"/></td>
    		</tr>
    		<tr>
    			<td>Penerima: </td>
    			<td><input type="text" name="penerima" size="40"/></td>
    		</tr>
    		<tr>
    			<td>Judul: </td>
    			<td><input type="text" name="judul" size="40"/></td>
    		</tr>
    		<tr>
    			<td>Pesan: </td>
    			<td>&nbsp;</td>
    		</tr>
    		<tr>
    			<td colspan="2"><textarea cols="58" rows="10" name="pesan"></textarea></td>
    		</tr>
    		<tr>
    			<td>&nbsp;</td>
    			<td><input type="submit" name="Send" value="Send"/><input type="reset" name="reset" value="Cancel"/></td>
    		</tr>
    	</table>
    	</form>
     
    	<?php
    	include "Mailer.class.php";
    	if (isset($_POST['Send'])) {
    		$pengirim = $_POST['pengirim'];
    		$penerima = $_POST['penerima'];
    		$judul    = $_POST['judul'];
    		$pesan    = $_POST['pesan'];
     
    		if ($pengirim=='') {
    			die("Pengirim harus diisi");
    		}
     
    		$mailer = new Mailer($pengirim,$penerima, $judul, $pesan);
    		$mailer->send_mail();
    	}
    	?>
    </body>
    </html>