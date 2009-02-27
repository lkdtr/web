<?php include("includes.php");?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <link rel="stylesheet" type="text/css" href="<?php echo $path; ?><?php echo $stil; ?>stil.css">
  <script language="javascript" src="<?php echo $path; ?><?php echo $jscript; ?>jscript.js"></script>
  <title>Linux Türkiye</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <style type="text/css"><!--body {margin-left: 0px;margin-top: 0px;margin-right: 0px;}--></style>
</head>
<body>

<?php include("header.inc.php");?>

<table height="70%" width="925" cellspacing="0" cellpadding="0" border="0" style="border-collapse: collapse;">
  <tbody>
    <tr>
	
<?php include("solmenu.inc.php");?>

<td width="1" bgcolor="#993333"><img height="1" width="1" src="<?php echo $path; ?><?php echo $resimler; ?>spacer.gif"/></td>

<?php include("icerik.php");?>
</tr>
</tbody>
</table>

<?php include("footer.inc.php");?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' 
type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7687208-1");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>
