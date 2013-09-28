<?php
	$host="localhost";
	$user="root";
	$password="";	
	$koneksi=mysql_connect($host,$user,$password) or 
	die("Gagal koneksi mas bro..!");
	mysql_select_db("wbs");
?>