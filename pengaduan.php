<html>
<head><title>Form Pengaduan
</title>
<link rel="stylesheet"type="text/css" href="style.css">
<link rel="shortcut icon" href="images/images_login/sig.ico" />
</head>
<body>
<div id="warp">
<div id="header">Whistleblower Kementrian Pertanian</div>
</div>
<form action="tambah.php" method="Post" >
<table>
<tr><td>Instansi</td><td>:</td><td><input type="radio" name="instansi" value="kementerian">Kementerian</td><td><input type="radio" name="pilih" value="lembaga">Lembaga</td>
<td><input type="radio" name="pilih" value="pemerintah_daerah" >Pemerintah Daerah</td></tr>
<tr><td>Nama Instansi</td><td>:</td><td><input type="text" name="nama_instansi"></td></tr>
<tr><td>Perihal Pengaduan</td><td>:</td><td><input type="text" name="perihal_pengaduan"></td></tr>
<tr><td>Nama Kegiatan</td><td>:</td><td><input type="text" name="nama_kegiatan"></td></tr>
<tr><td>Waktu Kejadian</td><td>:</td><td>Bulan : <select name="bulan">
<option>--Pilih Bulan--</option>
<option>Januari</option>
<option>Februari</option>
<option>Maret</option>
<option>April</option>
<option>Mei</option>
<option>Juni</option>
<option>Juli</option>
<option>Agustus</option>
<option>September</option>
<option>Oktober</option>
<option>November</option>
<option>Desember</option>
</select>
<td>Tahun : <select name="tahun">
<option>--Pilih Tahun--</option>
<option>1999</option>
<option>2000</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
<option>2008</option>
<option>2009</option>
<option>2010</option>
<option>2011</option>
<option>2012</option>
<option>2013</option>
</select></td></tr>
<tr><td>Propinsi</td><td>:</td><td><select name="propinsi">
<option>--Pilih Propinsi--</option>
<?php
		mysql_connect("localhost","root","");
		mysql_select_db("test");
		
		$getdata = mysql_query("select * from tbl_prop");
		while($data = mysql_fetch_array($getdata)){
		echo "<option value='$data[kd_prop]'>$data[nm_prop]</option>";
		}
		?>
		</select></td></tr>
<tr><td>Kabupaten Kota</td><td>:</td><td><select class="text" name="nm_kab" id="nm_kab">
						<option>--Pilih Kabupaten--</option>
						<?php
							//mengambil nama-nama propinsi yang ada di database
							$propinsi = mysql_query("SELECT * FROM tbl_kab ORDER BY kd_kab");
							while($p=mysql_fetch_array($propinsi)){
							echo "<option value=\"$p[nm_kab]\">$p[nm_kab]</option>\n";
							}
						?>
					</select></td>
					<tr><td colspan='2'><center><b>Dugaan yang Terlibat</b></center></td><tr>
<tr><td>Nama yang dilapor</td><td>:</td><td><input type="text" name="nama_dugaan"></td></tr>
<tr><td>Jabatan</td><td>:</td></td><td><input type="text" name="jabatan"></td></tr>
<tr><td>No Telp </td><td>:</td><td><input type="text" name="no_telp"></td></tr>
<tr><td>Uraian pengaduan</td><td>:</td><td><textarea name="keterangan" cols="40"
        rows="5"></textarea></td>
<tr><td>Lampiran File</td><td>:</td><td>
					<input class="text" type="hidden" name="MAX_FILE_SIZE" value="16000000">
					<input class="text" type="file" name="datafile" size="30" id="gambar" />
				</td></tr>
<tr><td colspan="2"><input type="submit"  value="submit" /></td></tr>
<br />
</table>
</form>
</body>
</html>