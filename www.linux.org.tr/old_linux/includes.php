<?php 
$path="/templates/";
$resimler="resimler/";
$dagitim="extras/";
$jscript="jscript/";
$stil="stil/";
$linuxfirma="/linuxfirmalar_files/";

if($_GET['goster']=='google13ba1e19c2099d12') { // google dogrulama
	exit;
}
else if ( !file_exists($_GET['goster'].".inc.php")){
	header("HTTP/1.0 404 Not Found");
}


?>
