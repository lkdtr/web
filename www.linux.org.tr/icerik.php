<?php 
if ( isset($_GET['goster']))
{
$goster=$_GET['goster'];
}
?>
<?php 
// ��erik y�netimi k�sm�
if ( empty($_GET))
{
	include ("ana.inc.php");
}
else{
	if ( file_exists("$goster.inc.php")){
	include ("$goster.inc.php");
	}
	else {include("hata.inc.php");}
	//echo $_SERVER['REQUEST_URI'];
}

?>