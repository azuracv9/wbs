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
<li><a href="index.php?p=cara_melapor"><span>Cara Melapor</span></a></li>
<li><a href="index.php?p=ccd"><span>Hubungi Kami</span></a></li>
<li><a href="index.php?p=faq"><span>FAQ</span></a></li>
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
<?php
if (!empty($_GET['message']) && $_GET['message'] == 'lengkapi') {
    echo "<h3><font color='red'>Form Pendaftaran Masih Belum Lengkap</font></h3>";
}
?>
<?php
if (!empty($_GET['message']) && $_GET['message'] == 'username_ganda') {
    echo "<h3><font color='red'>Username sudah digunakan</font></h3>";
}
?>
<?php
if (!empty($_GET['message']) && $_GET['message'] == 'pass_beda') {
    echo "<h3><font color='red'>Password yang kamu masukan tidak sama!</font></h3>";
}
?>
  <br>
  <img src="images/images_login/img_login_user.png" align="absmiddle" class="img_user" />
  <input type="text" name="username" size="29" id="input" />
  <br />
	
  <img src="images/images_login/img_login_pass.png" align="absmiddle" class="img_pass" />
  <input type="password" name="password" size="29" id="input" />
 
  <input name="Submit" type="image" value="Submit" src="images/images_login/img_submit.png" id="submit" align="absmiddle" class="img_submit" />
<a href="index.php?p=register">Daftar Baru</a></form>
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
				echo '<br><div id="isi"><img src="images/images_login/404.png" align="absmiddle" class="img404"></div>';
			}
		} else {
			include($pages_dir.'/home.php');
		}
		?>
    </div>
</div>
</div>
</div>
<div id="footer">Copyright &copy; 2013 by Kementerian Pertanian</div>
</body>
</html>
</div>  
