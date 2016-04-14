<?php
 	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_nama = "dosen";
	$koneksi = mysql_connect($db_host, $db_user, $db_password) or die ("koneksi gagal");
	$koneksi_db = mysql_select_db($db_nama)or die ("database tidak ditemukan");
		
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>

</body>
</html>
