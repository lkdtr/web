<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

include "./lib/config.php";
include "./lib/db.php";
include "./lib/functions.php";
include "./lib/libmail.php";
?>
<html>
<head>
<meta http-equiv="Content-Language" content="tr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>LKD Yılın Penguenleri Ödülle<?php echo YEAR; ?></title>
<link rel="stylesheet" type="text/css" href="stil.css">
</head>
<body marginwidth="0" marginheight="0">
<map name="menu">
        <area href="goster.php?tip=kategori" shape="rect" alt="Kategoriler" title="Kategoriler" coords="20,141,132,173">
        <area href="hakkinda.php" shape="rect" alt="Ödüller Hakknda" title="Ödüller Hakknda" coords="26,51,117,82">
        <area href="goster.php?tip=aday" alt="Adaylar" title="Adaylar" shape="rect" coords="25,219,112,250">
        <area href="aciklamalar.php"  shape="rect" alt="Yöntem" title="Yöntem" coords="72,342,149,374">
        <area href="http://www.nedimsahin.com" target="_blank" shape="rect" alt="Nedim Şahin" title="Tasarm: Nedim Şahin" coords="301,349,366,375">
        <area href="http://ahmet.fasafiso.org/" target="_blank" shape="rect" title="Programlama: Ahmet Aygün" alt="Ahmet Aygün" coords="303,337,362,348">
        <area href="aday_ekle.php" shape="rect" alt="Aday Ekle" title="Aday Ekle" coords="31,301,111,333">
</map>
