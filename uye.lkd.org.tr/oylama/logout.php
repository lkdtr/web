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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>AGORA YÃÂÃÂ¶netici ÃÂÃÂÃÂÃÂ±kÃÂÃÂ±ÃÂÃÂÃÂÃÂ±</title>
</head>

<body bgcolor="#E8BF20" text="#000080">

<p align="center"><font size="5">AGORA</font></p>
<hr>

<br><br>
<center>ÃÂÃÂÃÂÃÂ±kÃÂÃÂ±ÃÂÃÂÃÂÃÂ±nÃÂÃÂ±z baÃÂÃÂarÃÂÃÂ±yla gerÃÂÃÂ§ekleÃÂÃÂmiÃÂÃÂtir.</center>
<br><br>

<hr>
<a href="index.html">Ana Sayfa</a>

</body>
</html>