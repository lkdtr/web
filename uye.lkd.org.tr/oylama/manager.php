<?
	session_start();
	session_register("manager_id");
	session_register("logged");
	session_register("manager_login");
        
    require 'include/config.inc';

$username = $_POST['username'];
$password = $_POST['password'];

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
		echo ("<br><p align=\"center\">Geçersiz kullanıcı ismi ya da şifre<br>");
	else { 
	// AUTHENTICATED
						
		$query = "select poll_title,poll_id,type,start_date,stop_date from polls where manager_id=$manager_id";
		$result = mysql_db_query($dbname, $query); 

		if ($result) {
?>
			<table border="1" width="100%">
			<tr>
				<td colspan=3 bgcolor="#FFF000" align=center>Kullanıcı: <? echo $manager_login; ?></td>
			</tr>
			<tr>		
				<td width=35% align=center><a href="create.php">Yeni Oylama</a></td>
				<td width=30% align=center><a href="logout.php">Çıkış</a></td>
				<td width=35% align=center><a href="passwd.php">Şifre Değiştir</a></td>
			</tr>
			</table>
<?

			echo "<p align=\"center\"><font size=\"4\">Yönettiğiniz Oylamalar</font></p>";
			if (mysql_num_rows($result) != 0) {
		
				echo "<center>
				<table border=\"1\">
  				<th>Oylama Başlığı</th>
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
						case 0: $poll_type = "Açık";break;
						case 1: $poll_type = "Özel: lokal kimlik kanıtlama";break;
						case 2: $poll_type = "Özel: uzaktan sınırlı kimlik kanıtlama";break;
						case 3: $poll_type = "Özel: uzaktan sınırsız kimlik kanıtlama";break;
						case 4: $poll_type = "Özel: e-mail adresi ile kimlik kanıtlama";break;
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
				echo "<center>Şu anda yönettiğiniz oylama bulunmamaktadır</center>";
 			}		
		} 
	}//ELSE
	
?>

<hr>
<a href="index.html">Ana Sayfa</a>

</body>
</html>





