<? 
	require 'include/config.inc';
	require 'include/header.inc'; 
?>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
<head><title>Açık Oylamalar</title>
</head> 

<body bgcolor="#E8BF20" text="#000080">
<p align="center"><font size="5">AGORA</font></p>
<p align="center"><font size="5">Açık Oylamalar/Anketler</font></p>
<hr>


<?php

	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Problem connecting to DataBase");

	$todaydate = date("Y-m-d");
	$query = "select poll_id,poll_title,start_date,stop_date  from polls where (polls.type=0 and start_date <= '$todaydate' and '$todaydate' < stop_date) ";

	$result = mysql_db_query($dbname, $query); 

	if ($result) {

		echo "<p align=\"center\"><font size=\"4\">Devam Eden Oylamalar</font></p>";
		if (mysql_num_rows($result) != 0) {
		
			echo "<center>
			<table border=\"1\">
  			<th>Oylama Başlığı</th>
  			<th>Oylama ID</th>
  			<th>Baslangic Tarihi</th>
  			<th>Bitis Tarihi</th>";
  	 		
			$poll_type=0;  /* This is a public poll */
			while ($r = mysql_fetch_array($result)) {
				$poll_title      = $r["poll_title"];
				$poll_id     = $r["poll_id"];
				$start_date = $r["start_date"];
				$stop_date  = $r["stop_date"];
				echo "<tr><td><a href=public_polls.php?poll_id=$poll_id> $poll_title</a></td>
				<td align=center>$poll_id</td>
				<td>$start_date</td>
				<td>$stop_date</td>
				</tr>";
			} // WHILE					
			
			echo "</table></center>";

			mysql_free_result($result);
		} 
		else { 
			echo "<center>Şu anda aktif oylama bulunmamaktadır</center>";
 		}
 	}

// Finalized polls

	$query = "select poll_id,poll_title,start_date,stop_date  from polls where (polls.type=0 and stop_date <= '$todaydate')";

	$result = mysql_db_query($dbname, $query); 

	if ($result) {
		
		echo "<p align=\"center\"><font size=\"4\">Sonlanmış Oylamalar</font></p>";
		if (mysql_num_rows($result) != 0) {
		
			echo "<center>
			<table border=\"1\">
  			<th>Oylama Başlığı</th>
  			<th>Oylama ID</th>
  			<th>Baslangic Tarihi</th>
  			<th>Bitis Tarihi</th>";
  	 		
			$poll_type=0;  /* This is a public poll */
			while ($r = mysql_fetch_array($result)) {
				$poll_title      = $r["poll_title"];
				$poll_id     = $r["poll_id"];
				$start_date = $r["start_date"];
				$stop_date  = $r["stop_date"];
				echo "<tr><td><a href=public_polls.php?poll_id=$poll_id> $poll_title</a></td>
				<td align=center>$poll_id</td>
				<td>$start_date</td>
				<td>$stop_date</td>
				</tr>";
			} // WHILE					
			
			echo "</table></center>";

			mysql_free_result($result);
		
		}
		else { 
			echo "<center>Şu anda sonlanmış oylama bulunmamaktadır</center>";
 		}		
	} 
	
// Future polls

	$query = "select poll_id,poll_title,start_date,stop_date  from polls where (polls.type=0 and start_date > '$todaydate')";

	$result = mysql_db_query($dbname, $query); 

	if ($result) {
	
		echo "<p align=\"center\"><font size=\"4\">Başlamamış Oylamalar</font></p>";
		if (mysql_num_rows($result) != 0) {
		
			echo "<center>
			<table border=\"1\">
  			<th>Oylama Başlığı</th>
  			<th>Oylama ID</th>
  			<th>Baslangic Tarihi</th>
  			<th>Bitis Tarihi</th>";
  	 		
			$poll_type=0;  /* This is a public poll */
			while ($r = mysql_fetch_array($result)) {
				$poll_title      = $r["poll_title"];
				$poll_id     = $r["poll_id"];
				$start_date = $r["start_date"];
				$stop_date  = $r["stop_date"];
				echo "<tr><td><a href=public_polls.php?poll_id=$poll_id> $poll_title</a></td>
				<td align=center>$poll_id</td>
				<td>$start_date</td>
				<td>$stop_date</td>
				</tr>";
			} // WHILE					
			
			echo "</table></center>";

			mysql_free_result($result);
		
		}
		else { 
			echo "<center>Şu anda başlamamış oylama bulunmamaktadır</center>";
 		}		
	} 
	
?>

<br>
<hr>
<a href="index.html">Ana Sayfa</a>


</body>
</html>
