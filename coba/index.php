<html>
<html>
<head>
<title>
Whistleblower
</title>
<link rel="stylesheet"type="text/css" href="style.css">
<link rel="shortcut icon" href="images/images_login/sig.ico" />
<script type="text/javascript">
function validasi(form){
if (form.username.value == ""){
alert("Anda belum mengisikan Username");
form.username.focus();
return (false);
}
     
if (form.password.value == ""){
alert("Anda belum mengisikan Password");
form.password.focus();
return (false);
}
return (true);
}
</script>
</head>
<body background="grey">
<div id="warp">
<div id="header"><img src="images/images_login/header.png" align="left"/></div>
<div id="menu">
<ul><li><a href="index.php?p=home"><span>Home</span></a></li>
<li><a href="cara_melapor.php"><span>Cara Melapor</span></a></li>
<li><a href="#"><span>Hubungi Kami</span></a></li>
<li><a href="faq.php"><span>FAQ</span></a></li>
<li><a href="index.php?p=aboutus"><span>About us</span></a></li>
<li><a href="index.php?p=register"><span>Daftar</span></a></li>
</ul>
</div>
<div id="kolom-kiri">
<br>
<div id="header-login" align="middle"><img src="images/images_login/login.png" align="middle" class="img_login" /></div>
<div id="midle-login">
<form method="post" action="log.php?op=in">
  <?php
  
if (!empty($_GET['message']) && $_GET['message'] == 'kosong') {
    echo '<h3><font color="red">Isi Semua Kolom</font></h3>';
}
?>
  <br>
  <img src="images/images_login/img_login_user.png" align="absmiddle" class="img_user" />
  <input type="text" name="username" size="29" id="input" />
  <br />
	
  <img src="images/images_login/img_login_pass.png" align="absmiddle" class="img_pass" />
  <input type="password" name="password" size="29" id="input" />
 
  <input name="Submit" type="image" value="Submit" src="images/images_login/img_submit.png" id="submit" align="absmiddle" class="img_submit" />
<a href="register.php">Daftar Baru</a></form>
</div>
</br>
<div id="header-login">Kerahasiaan</div>
<div id="kerahasiaan">
Sistem ini secara teknis menjaga anonimitas Anda. Agar lebih menjamin Kerahasiaan, perhatikan hal-hal yang berikut ini:
<ol>
<li>Tidak mengisi data pribadi atau informasi yang memungkinkan bagi orang lain untuk melakukan pelacakan siapa Anda, seperti nama Anda atau hubungan Anda dengan pelaku-pelaku.</li>
<li>Hindari penggunaan Komputer kantor Anda jika Pengaduan yang akan Anda berikan melibatkan pihak-pihak di dalam kantor Anda.</li>
</ol>
<b>Kementerian Pertanian</b> akan merahasiakan informasi pribadi Anda sebagai whistleblower, <b>Kementerian Pertanian</b> hanya fokus pada kasus yang dilaporkan.</div>
</div>   
<div id="kolom-kanan">
<h2>Anda mengetahui tindakan korupsi yang telah atau akan dilakukan oleh seseorang yang anda kenal?</br></h2>
Untuk anda yang ingin melaporkan indikasi tindak pidana korupsi, tapi merasa sungkan atau takut identitasnya terungkap, karena kebetulan anda kenal dengan pelakunya, misalnya atasan, teman sekerja, dan lain-lain, anda bisa menggunakan fasilitas ini. 
Anda bisa melaporkan indikasi tindak pidana korupsi yang dilakukan oleh atasan anda kepada bagian Pengawasan Internal di tempat anda bekerja, tapi apakah ada jaminan bahwa identitas anda akan terjaga kerahasiaannya? Dengan menjadi whistleblower bagi <b>kementerian Pertanian</b>, kerahasiaan identitas anda akan dijamin oleh <b>Kementerian Pertanian</b>.
Anda bisa menjadi whistleblower bagi <b>Kementerian Pertanian</b> di mana saja.
<br>
<br>
<div id="isi">
<div id="judul">Kriteria Pengaduan</div>
<ol>
<li>Memenuhi ketentuan Pasal 11 UU RI No. 30 Tahun 2002.</li>
<ul>
<li>melibatkan aparat penegak hukum, penyelenggara negara, dan orang lain yang ada kaitannya dengan tindak pidana korupsi yang dilakukan oleh aparat penegak hukum atau penyelenggara negara</li>
<li>mendapat perhatian yang meresahkan masyarakat; dan/atau menyangkut kerugian negara paling sedikit Rp. 1.000.000.000,00 (satu milyar rupiah).</li>
</ul>
<li>Menjelaskan siapa, melakukan apa, kapan, di mana, mengapa dan bagaimana.</li>
<li>Dilengkapi dengan bukti permulaan (data, dokumen, gambar dan rekaman) yang mendukung/menjelaskan adanya TPK.</li>
<li>Diharapkan dilengkapi dengan data sumber informasi untuk pendalaman.</li>
</ol>
</div>
<br>
<div id="isi">
<div id="judul">Whistleblower</div>

seseorang yang melaporkan perbuatan yang berindikasi tindak pidana korupsi yang terjadi di dalam organisasi tempat dia bekerja, dan dia memiliki akses informasi yang memadai atas terjadinya indikasi tindak pidana korupsi tersebut
</div>
<br>
<div id="komunikasi">
<div id="media">Media Komunikasi </div>
saluran komunikasi antara Pelapor dengan <b>Kementerian Pertanian</b>.
<ul>
<li>Buat <b>Username</b> dan <b>Password</b> yang anda ketahui sendiri.</li>
<li>Gunakan nama yang <b>unik</b> dan tidak menggambarkan identitas anda.</li>
<li><b>Catat</b> dan <b>simpan</b> dengan baik Username dan Password</li>
</ul>
Jika laporan anda memenuhi kriteria yang ditetapkan, petugas <b>Kementerian Pertanian</b> akan menghubungi anda melalui Media Komunikasi ini, untuk proses lanjut penanganan pengaduan
</div>
<br>
<div id="konten">
    	<?php
		$pages_dir = 'pages';
		if(!empty($_GET['p'])){
			$pages = scandir($pages_dir, 0);
			unset($pages[0], $pages[1]);
			
			$p = $_GET['p'];
			if(in_array($p.'.php', $pages)){
				include($pages_dir.'/'.$p.'.php');
			} else {
				echo 'Halaman tidak ditemukan! :(';
			}
		} else {
			include($pages_dir.'/index.php');
		}
		?>
    </div>
</div>
</div>
<div id="footer">Copyright &copy; 2013 by Kementerian Pertanian</div>
</body>
</html>
</div>  
