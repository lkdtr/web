<?
	session_start();
	session_register("manager_id");
	session_register("logged");
    require 'include/config.inc';

	if (!isset($manager_id) || !isset($logged) )
		header("Location: $main_url");
		
	require 'include/header.inc';
	
	session_destroy();
?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
<title>AGORA Yönetici Çıkışı</title>
</head>

<body bgcolor="#E8BF20" text="#000080">

<p align="center"><font size="5">AGORA</font></p>
<hr>

<br><br>
<center>Çıkışınız başarıyla gerçekleşmiştir.</center>
<br><br>

<hr>
<a href="index.html">Ana Sayfa</a>

</body>
</html>