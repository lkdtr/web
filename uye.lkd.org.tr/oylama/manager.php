<?
	session_start();
	session_register("manager_id");
	session_register("logged");
	session_register("manager_login");
        
    require 'include/config.inc';

	// ENTRANCE CHECK
	if ( isset($username) && isset($password) ) { 

		// If a username and password is supplied and already logged in, automatically logout
		if (isset($logged))
			session_destroy();


		if ($username == "" || $password == ""){
			$agora_errno = 1; //auth failure
			//echo ("<br><p align=\"center\">Wrong password or username<br>");
		}
		else {
			mysql_connect($dbhost,$dbuser,$dbpass) or die ("Problem connecting to DataBase");	
			$query = "select manager_id,information from managers where managers.information=\"$username\" and managers.password=password(\"$password\")";
			$result = mysql_db_query($dbname, $query);
		
			$r = mysql_fetch_array($result);
			if (!$r){
				$agora_errno = 1; // auth failure
			//	echo ("<br><p align=\"center\">Wrong password or username<br>");
			}
			else { // AUTHENTICATED
				$logged=1;
				$manager_id=$r["manager_id"];
				$manager_login=$r["information"];
				$agora_errno = 0; // auth succeeded
			}
		}
	}
	elseif (isset($logged)) {
		// db connection is required in this condition also
		mysql_connect($dbhost,$dbuser,$dbpass) or die ("Problem connecting to DataBase");
		$agora_errno = 0;
	}
	else {
		$agora_errno = 2; // illegal access to the page
		header("Location: $login_url");
		exit;
	}
	// END OF ENTRANCE CHECK
	
	require 'include/header.inc';
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>AGORA Manager Page</title>
</head> 

<body bgcolor="#E8BF20" text="#000080">
<p align="center"><font size="5">AGORA</font></p>

<hr>

<?
	// INVALID USERNAME OR PASSWORD
	if ($agora_errno == 1)
		echo ("<br><p align=\"center\">GeÃÂÃÂ§ersiz kullanÃÂÃÂ±cÃÂÃÂ± ismi ya da ÃÂÃÂifre<br>");
	else { 
	// AUTHENTICATED
						
		$query = "select poll_title,poll_id,type,start_date,stop_date from polls where manager_id=$manager_id";
		$result = mysql_db_query($dbname, $query); 

		if ($result) {
?>
			<table border="1" width="100%">
			<tr>
				<td colspan=3 bgcolor="#FFF000" align=center>KullanÃÂÃÂ±cÃÂÃÂ±: <? echo $manager_login; ?></td>
			</tr>
			<tr>		
				<td width=35% align=center><a href="create.php">Yeni Oylama</a></td>
				<td width=30% align=center><a href="logout.php">ÃÂÃÂÃÂÃÂ±kÃÂÃÂ±ÃÂÃÂ</a></td>
				<td width=35% align=center><a href="passwd.php">ÃÂÃÂifre DeÃÂÃÂiÃÂÃÂtir</a></td>
			</tr>
			</table>
<?

			echo "<p align=\"center\"><font size=\"4\">YÃÂÃÂ¶nettiÃÂÃÂiniz Oylamalar</font></p>";
			if (mysql_num_rows($result) != 0) {
		
				echo "<center>
				<table border=\"1\">
  				<th>Oylama BaÃÂÃÂlÃÂÃÂ±ÃÂÃÂÃÂÃÂ±</th>
  				<th>Oylama ID</th>
  				<th>Oylama Tipi</th>
	  			<th>Baslangic Tarihi</th>
  				<th>Bitis Tarihi</th>";
	  	 		
				while ($r = mysql_fetch_array($result)) {
					$poll_title      = $r["poll_title"];
					$poll_id     = $r["poll_id"];
					$start_date = $r["start_date"];
					$stop_date  = $r["stop_date"];
					
					switch ($r["type"]) {
						case 0: $poll_type = "AÃÂÃÂ§ÃÂÃÂ±k";break;
						case 1: $poll_type = "ÃÂÃÂzel: lokal kimlik kanÃÂÃÂ±tlama";break;
						case 2: $poll_type = "ÃÂÃÂzel: uzaktan sÃÂÃÂ±nÃÂÃÂ±rlÃÂÃÂ± kimlik kanÃÂÃÂ±tlama";break;
						case 3: $poll_type = "ÃÂÃÂzel: uzaktan sÃÂÃÂ±nÃÂÃÂ±rsÃÂÃÂ±z kimlik kanÃÂÃÂ±tlama";break;
						case 4: $poll_type = "ÃÂÃÂzel: e-mail adresi ile kimlik kanÃÂÃÂ±tlama";break;
					}
										
					echo "<tr><td><a href=edit.php?id=$poll_id> $poll_title</a></td>
					<td align=center>$poll_id</td>
					<td align=center>$poll_type</td>
					<td>$start_date</td>
					<td>$stop_date</td>
					</tr>";
				} // WHILE					
				
				echo "</table></center>";
				mysql_free_result($result);
			}
			else { 
				echo "<center>ÃÂÃÂu anda yÃÂÃÂ¶nettiÃÂÃÂiniz oylama bulunmamaktadÃÂÃÂ±r</center>";
 			}		
		} 
	}//ELSE
	
?>

<hr>
<a href="index.html">Ana Sayfa</a>

</body>
</html>





