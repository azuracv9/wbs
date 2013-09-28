
<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut..
}

//cek level user
if($_SESSION['level']!="admin"){
    die("Anda bukan admin");//jika bukan admin jangan lanjut
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<div id="buton" style="position: fixed;"><a href="log.php?op=out">Logout</a></div>

<body bgcolor="#1eb4b6">
<center>
<br>
<div id="body">
<?php echo '<b>Selamat Datang : '.$_SESSION['username'].' <b>';?>
</center>
<br>
<form action="tambah.php" method="POST">
<center><table id="body">
<tr><td>Instansi</td><td>:</td><td><select name="instansi">
<option>--Pilih Instansi--</option>
<option>Kementerian</option>
<option>Lembaga</option>
<option>Pemerintah Daerah</option>
</select></td></tr>
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
		mysql_select_db("wbs");
		
		$getdata = mysql_query("select * from tbl_prop");
		while($data = mysql_fetch_array($getdata)){
		echo "<option value='$data[nm_prop]'>$data[nm_prop]</option>";
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
<tr><td>Nama yang dilapor</td><td>:</td><td><input type="text" name="nama_dugaan"></td></tr>
<tr><td>Jabatan</td><td>:</td></td><td><input type="text" name="jabatan"></td></tr>
<tr><td>No Telp </td><td>:</td><td><input type="text" name="no_telp"></td></tr>
<tr><td>Uraian pengaduan</td><td>:</td><td><textarea name="keterangan" cols="40"
        rows="5"></textarea></td>
<tr><td><input type="submit" name="submit" value="Buat baru"></td></tr>
</table></center>
</form>
</div>
</body>