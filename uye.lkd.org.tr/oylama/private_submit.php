<?
	require 'include/config.inc';

	if (!isset($poll_id) || !isset($username) ) { 
		header("Location: $main_url");
		exit; 
	}	

	require 'include/header.inc';
	require 'include/confirmation.inc';
?>

<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Oylama Özeti</title>
</head>
<body text="#000080" bgcolor="#E8BF20">

<center><font size="5">AGORA</font>
<hr>

<?php
	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Problem connecting to DataBase");
	$query = "select poll_id,poll_title,type,start_date,stop_date from polls where polls.poll_id = $poll_id";
	$result = mysql_db_query($dbname, $query); 
	$r = mysql_fetch_array($result);

	$start_date = $r["start_date"];	
	$stop_date = $r["stop_date"];
	$today = date("Y-m-d");	

	if ($start_date > $today) 
		$poll_type = -1;
	else
	if ($stop_date < $today) 
		$poll_type = -2;
	else
		$poll_type = $r["type"]; 


	switch ($poll_type) {

	case -1: // poll not started yet
		$tmp = explode("-",$start_date);
		echo "Bu oylama $tmp[2]-$tmp[1]-$tmp[0] tarihinde başlayacaktır.";
		break;

	case -2: // poll ended or stopped 
		$tmp = explode("-",$stop_date);
		echo "Bu oylama $tmp[2]-$tmp[1]-$tmp[0] tarihinde sona ermiştir.";
		break;

	case 0:		// public poll 
	
		// This is not public poll place. Is there a way to arrive here? Hmmm... anyway.
		echo 'Geçersiz istek';
		break;

	case 1:		// local private poll

	//FIRST STEP: AUTHENTICATION
		
			$query = "select password, voted from voters where (voters.user_id = '$username' and voters.poll_id = $poll_id)";
			$result = mysql_db_query($dbname, $query);
			$r = mysql_fetch_array($result);
			$passfromdb = $r["password"];	

			//AUTHENTICATE with $username and $passwd

			if ( empty($r) || (md5($passwd) != $passfromdb)) {     
		// AUTH FAILED or NO SUCH USER! 
				
				echo "Geçersiz login ya da şifre";
			}
			else {   // AUTHENTICATED

	//SECOND STEP: CHECK FOR DUPLICATE VOTE

				// CHECK FOR DOUBLE-VOTING
				
				if( $r["voted"] ) {
					echo "Daha önce oy kullanmışsınız. Her oyverenin sadece tek oy hakkı vardır.<br>";
				}
				else { 
					//THIRD STEP: USER IS CLEAR, VOTE IS LEGAL. COUNTING THE VOTE

					// UPDATE VOTERS TABLE
					$query="update voters set voted = 1 where (poll_id = $poll_id and user_id = '$username')";
					mysql_db_query ($dbname,$query);
			
					// UPDATE ANSWERS TABLE
		 			$c = count($ans);
	 				for ( $i=1; $i < $c; $i++)
	 				{
						$update_query="update answers set counter=counter + 1 where (poll_id = $poll_id and question_id = $i and answer_id = $ans[$i])";
						mysql_db_query ($dbname,$update_query);
						//echo "answer to question $i is $ans[$i] updated <br>";
	 				}
					echo "Oyunuz sayılmıştır. Katıldığınız için teşekkür ederiz.";

				} //ELSE 
			}//ELSE
		break;

	case 2:		// remote private poll with limited voters allowed to vote

	//FIRST STEP: AUTHENTICATION
			//GET REMOTE HOST ADDRESS
			$query = "select host_id from remote_polls where remote_polls.poll_id = $poll_id";
			$result = mysql_db_query($dbname, $query);
			$r = mysql_fetch_array($result);
			$hostid = $r["host_id"];	

			//AUTHENTICATE with $username and $passwd

			$authenticated = exec(EscapeShellCmd("$authcmd $username $hostid $passwd"));
			
			if ($authenticated == 0) {     // AUTH FAILED! 
				echo "Geçersiz login ya da şifre";				
			}
			else {   // AUTHENTICATED
	//SECOND STEP: CHECK FOR DUPLICATE VOTE

				// CHECK FOR DOUBLE-VOTING
				$query = "select voted from voters where (voters.user_id = '$username' and voters.poll_id = $poll_id)";

				$result = mysql_db_query($dbname, $query);
				$r = mysql_fetch_array($result);

				if(empty($r)) {
					echo "You are not in the voter list for this poll";
				}
				elseif($r["voted"]) { 
					echo "Daha önce oy kullanmışsınız. Her oyverenin sadece tek oy hakkı vardır.<br>";
				}
				else {
	//THIRD STEP: USER IS CLEAR, VOTE IS LEGAL. COUNTING THE VOTE

					// UPDATE VOTERS TABLE
					$query="update voters set voted = 1 where (poll_id = $poll_id and user_id = '$username')";
					mysql_db_query ($dbname,$query);
			
					// UPDATE ANSWERS TABLE
	 				$c = count($ans);
	 				for ( $i=1; $i < $c; $i++)
	 				{
						$update_query="update answers set counter=counter + 1 where (poll_id = $poll_id and question_id = $i and answer_id = $ans[$i])";
						mysql_db_query ($dbname,$update_query);
						echo "Answer to question $i is $ans[$i] updated <br>";
	 				}
					echo "Oyunuz sayılmıştır. Katıldığınız için teşekkür ederiz.";
				}//ELSE
			}//ELSE
		break;
	case 3:		// remote private poll with all voters allowed to vote


	//FIRST STEP: AUTHENTICATION
			//GET REMOTE HOST ADDRESS
			$query = "select host_id from remote_polls where remote_polls.poll_id = $poll_id";
			$result = mysql_db_query($dbname, $query); 
			$r = mysql_fetch_array($result);
			$hostid = $r["host_id"];	

			//AUTHENTICATE with $username and $passwd

			$authenticated=exec(EscapeShellCmd("$authcmd $username $hostid $passwd"));
	

			if ($authenticated == 0) {     // AUTH FAILED! 
				echo "Geçersiz login ya da şifre";
			}
			else {   // AUTHENTICATED
	//SECOND STEP: CHECK FOR DUPLICATE VOTE

				// CHECK FOR DOUBLE-VOTING
				$query = "select voted from voters where (voters.user_id = '$username' and voters.poll_id = $poll_id)";
				$result = mysql_db_query($dbname, $query);
				$r = mysql_fetch_array($result);
				if(!empty($r)) {
					echo "Daha önce oy kullanmışsınız. Her oyverenin sadece tek oy hakkı vardır.<br>";
				}
				else {

					//THIRD STEP: USER IS CLEAR, VOTE IS LEGAL. COUNTING THE VOTE

					// INSERT THE USER INTO VOTERS TABLE
					$query="insert into voters values('$username',$poll_id,'','1')";
					mysql_db_query ($dbname,$query);
			
					// UPDATE ANSWERS TABLE
	 				$c = count($ans);
	 				for ( $i=1; $i < $c; $i++)
	 				{
						$query="update answers set counter=counter + 1 where (poll_id = $poll_id and question_id = $i and answer_id = $ans[$i])";
						mysql_db_query ($dbname,$query);
						//echo "answer to question $i is $ans[$i] updated <br>";
	 				}
					echo "Oyunuz sayılmıştır. Katıldığınız için teşekkür ederiz.";
				} //ELSE
			}//ELSE
		break;
		
	case 4: //Local private polls with email authentication
		
	//FIRST STEP: AUTHENTICATION
		
			// Here username is supposed to be an e-mail adress
		
			$query = "select voted from voters where (voters.user_id = '$username' and voters.poll_id = $poll_id)";
			$result = mysql_db_query($dbname, $query);
			$r = mysql_fetch_array($result);
			
			//AUTHENTICATE with $username and $passwd

			if ( empty($r) ) {     
			// AUTH FAILED or NO SUCH USER! 
				echo "Kullanıcı listesinde verdiğiniz adres bulunamadı.";
			}
			else {   // AUTHENTICATED

	//SECOND STEP: CHECK FOR DUPLICATE VOTE

				// CHECK FOR DOUBLE-VOTING
				
				if( $r["voted"] ) {
					echo "Daha önce oy kullanmışsınız. Her oyverenin sadece tek oy hakkı vardır.<br>";
				}
				else { 
	
					// THIRD STEP: USER IS CLEAR, VOTE IS LEGAL. SENDING THE CONFIRMATION
					
					$address=strtolower($username);
	       				$qc = count($ans);
					insert_nonce($address,$ans,$poll_id,$qc);

				} //ELSE 
			}//ELSE

		break;
				
	} //SWITCH

?>
</center>
<hr>
<a href="index.html">Ana Sayfa</a><br>
<a href="private_polls.php?poll_id=<? echo $poll_id; ?>">Oylama Sayfası</a>

</body>
</html>
