<?
	session_start();
	session_register("manager_id");
	session_register("logged");
	session_register("manager_login");
        
	require 'include/config.inc';

	if (isset($logged)) {
		//Check if submit is pressed, if so check the input and make the change

		if (isset($submit)) {
			if (!isset($oldpass) || !isset($newpass1) || !isset($newpass2)) {
				$agora_errno = 1;
				header("Location: $manager_url");
				exit;
			}
		}	
		$agora_errno = 0;
	}
	else {
		$agora_errno = 2; // illegal access to the page
		header("Location: $login_url");
		exit;
	}
	
	require 'include/header.inc';
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>AGORA Password Change</title>
</head> 

<body bgcolor="#E8BF20" text="#000080">
<p align="center"><font size="5">AGORA</font></p>

<hr>

<?
	if(isset($submit)) {
		if ($oldpass == ""){
			$agora_errno = 1; //auth failure
			echo ("<br><p align=\"center\">Wrong password or username<br>");
		}
		else {
			if($newpass1 != $newpass2) {
				echo ("<br><p align=\"center\">Yeni ÃÂÃÂifreniz tekrarÃÂÃÂ±yla aynÃÂÃÂ± deÃÂÃÂil<br>");
			}
			elseif($newpass1 == "")
				echo ("<br><p align=\"center\">BoÃÂÃÂ ÃÂÃÂifre giremezsiniz<br>");
			else {
				mysql_connect($dbhost,$dbuser,$dbpass) or die ("Problem connecting to DataBase");	
				$query = "select manager_id,information from managers where managers.information=\"$manager_login\" and managers.password=password(\"$oldpass\")";
				$result = mysql_db_query($dbname, $query);
		
				$r = mysql_fetch_array($result);
				if (!$r){
					$agora_errno = 1; // auth failure
					echo ("<br><p align=\"center\">Wrong password or username<br>");
				}
				else { // AUTHENTICATED
					$query = "update managers set password=password(\"$newpass1\") where managers.information=\"$manager_login\"";
					if(!mysql_db_query($dbname,$query))
						echo mysql_error();
					$agora_errno = 0; // auth succeeded
					echo "<center>ÃÂÃÂifreniz baÃÂÃÂarÃÂÃÂ±yla deÃÂÃÂiÃÂÃÂtirildi</center><br>";
					echo "<br><center><a href=\"manager.php\">YÃÂÃÂ¶netici sayfasÃÂÃÂ±na dÃÂÃÂ¶n</a></center><br>";
					echo "<hr>\n
					<p><a href=\"index.html\"><font size=\"4\">Ana Sayfa</font></a></p>\n
					</center>\n
					</body>\n
					</html>";
					exit;
				}
			}
		}
		echo "<hr>";
	}
?>

<center>
<form action="passwd.php" method="POST">
<table border="5">
<tr><td>
    <table>
        <tr>
            <td><font size="4">Eski ÃÂÃÂifre</font></td>
            <td>:</td>
            <td><input type="password" size="20" name="oldpass"></td>
        </tr>
        <tr>
            <td><font size="4">Yeni ÃÂÃÂifre</font></td>
            <td>:</td>
            <td><input type="password" size="20" name="newpass1"></td>
        </tr>
        <tr>
            <td><font size="4">Yeni ÃÂÃÂifre(tekrar)</font></td>
            <td>:</td>
            <td><input type="password" size="20" name="newpass2"></td>
        </tr>
    </table>
    <center><small><input type="Submit" name="submit" value="DEÃÂÃÂÃÂÃÂ°ÃÂÃÂTÃÂÃÂ°R"></small></center>
</td></tr>
</table>
</form>
</center>
<br><center><a href="manager.php">YÃÂÃÂ¶netici sayfasÃÂÃÂ±na dÃÂÃÂ¶n</a></center><br>

<hr>
<p><a href="index.html"><font size="4">Ana Sayfa</font></a></p>
</center>
</body>
</html>


