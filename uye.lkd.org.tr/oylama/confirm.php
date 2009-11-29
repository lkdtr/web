<?
	require 'include/config.inc';
	if (!isset($address) || !isset($nonce)) { // if no address or nonce is given, redirect the user to the beginning
		header("Location: $main_url");
		exit; 
	}
	require 'include/header.inc'; 
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>AGORA Oy DoÃÂÃÂrulamasÃÂÃÂ±</title>
</head>
<body bgcolor="#E8BF20" text="#000080">
<p align="center"><font size="5">AGORA</font><br>
<hr>

<?
	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Problem connecting to DataBase");
		


	$query = "select poll_id, question_id, answer_id  from confirmations where (e_mail = '$address' and nonce = '$nonce')";
	$result = mysql_db_query($dbname, $query);

	if ($result && mysql_affected_rows()) {

		$r= mysql_fetch_array ($result);
	    $poll_id = $r["poll_id"];
		mysql_data_seek($result,0);
	
		$result2 =  mysql_db_query($dbname, "select type,stop_date from polls where poll_id = $poll_id");
		$r= mysql_fetch_array ($result2);
	
		$poll_type = $r["type"];
		$stop_date = $r["stop_date"];
		$today = date("Y-m-d");	

		if ($stop_date < $today) {

			print '<center>Bu oylama sona erdiginden onaylamanizi kabul edilmemistir. Sure uzatilmasi durumunda onaylama linkini tekrar deneyiniz.</center>'; 
			print '<hr><p><a href="index.html">Ana Sayfa</a></p>\n</body>\n</html>';
			exit(0);
		}

		if (isset($delete)) {

			$delete_query = "delete from confirmations where (e_mail = '$address' and nonce = '$nonce')";
			mysql_db_query($dbname,$delete_query);
    	    
    	    		echo "<br><br>&nbsp;&nbsp;&nbsp;Oyunuz silinmiÃÂÃÂtir. Tekrar oy kullanmak iÃÂÃÂ§in <a href=\"public_polls.php?poll_id=$poll_id\">buraya</a> tÃÂÃÂ±klayÃÂÃÂ±nÃÂÃÂ±z.\n";
		}
		else {

			while ($r = mysql_fetch_array ($result)) {
				$question_id = $r["question_id"];
				$answer_id = $r["answer_id"];
				$update_query = "update answers set counter= counter + 1 where (poll_id= $poll_id and question_id = $question_id and answer_id=$answer_id)";
				mysql_db_query ($dbname,$update_query);
			}
			

			if ($poll_type == 0) {  // public poll

				$insert_query= "insert into voters values ('$address','$poll_id','pub',1)";
				mysql_db_query($dbname,$insert_query);
			}
			else { // if $poll_type == 4 , private e-mail authentication
			
				$query= "update voters set voted = 1 where (poll_id = $poll_id and user_id = '$address')";
				mysql_db_query ($dbname,$query);
			}
			
			$delete_query ="delete from confirmations where (e_mail= '$address' and poll_id=$poll_id)";
			mysql_db_query($dbname,$delete_query);
	
			echo "<br><br>&nbsp;&nbsp;&nbsp;Oyunuz sayÃÂÃÂ±lmÃÂÃÂ±ÃÂÃÂtÃÂÃÂ±r. OylamamÃÂÃÂ±za katÃÂÃÂ±ldÃÂÃÂ±ÃÂÃÂÃÂÃÂ±nÃÂÃÂ±z iÃÂÃÂ§in teÃÂÃÂekkÃÂÃÂ¼r ederiz.\n";

		} 
	}
	else 
		print "<br><br>&nbsp;&nbsp;&nbsp;GeÃÂÃÂ§ersiz onaylama<br>\n";
?>

<hr>
<p><a href="index.html">Ana Sayfa</a></p>

</body>
</html>
