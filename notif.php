<div id="kolom-kanan">
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
<?php
if (!empty($_GET['message']) && $_GET['message'] == 'lengkapi') {
    echo "<h3><font color='red'>Form Pendaftaran Masih Belum Lengkap</font></h3>";
}
?>
</div>