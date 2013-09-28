<?php
session_start();
include('config.php');

if(isset($_POST['submit']))
{
        $instansi=$_POST['instansi'];
		$nama_instansi=$_POST['nama_instansi'];
		$perihal_pengaduan=$_POST['perihal_pengaduan'];
		$nama_kegiatan=$_POST['nama_kegiatan'];
		$bulan=$_POST['bulan'];
		$tahun=$_POST['tahun'];
		$nm_prop=$_POST['propinsi'];
        $nm_kab=$_POST['nm_kab'];
		$nama_dugaan=$_POST['nama_dugaan'];
		$jabatan=$_POST['jabatan'];
		$no_telp=$_POST['no_telp'];
		$keterangan=$_POST['keterangan'];
			
			//catat data file yang berhasil di upload
			$query=mysql_query("INSERT INTO pengaduan VALUES('','$instansi','$nama_instansi','$perihal_pengaduan','$nama_kegiatan','$bulan','$tahun','$nm_prop','$nm_kab','$nama_dugaan','$jabatan','$no_telp','$keterangan')");
			echo"berhasil";
		
		}else{
			//jika gagal
			echo "INPUT DATA GAGAL";
		}
?>