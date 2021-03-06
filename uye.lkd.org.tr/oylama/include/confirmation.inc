<? 
	// FUNCTIONS FOR VOTE CONFIRMATIONS, used by public_submit & private_submit

	function generate_mail($add,$n,$poll_title)
	{
		global $confirm_url,$agora_mail;

		$subj= "\"$poll_title\" ba�l�kl� oylama i�in onaylama";
		$mess= "Say�n oylama/anket kat�l�mc�s�,\n\n Bu mesaj \"$poll_title\" ba�l�kl� oylama i�in verdi�iniz oyu/oylar� onaylamak i�in g�nderilmi�tir. A�a��daki adrese gitti�inizde oyunuz say�lacakt�r.\n\n$confirm_url?address=$add&nonce=$n\n\nOnaylamak istemiyorsan�z asa��daki adrese gitti�inizde oyunuz silinecektir.\n\n$confirm_url?address=$add&nonce=$n&delete=1\n\n\n�nemli not: Yukar�daki adreslerin son k�s�mlar�n�n sat�r alt�na kaymas� olas�d�r. Bu durumlarda adresin tamam�n�n browser'�n�z taraf�ndan alg�land���ndan emin olunuz.\n\nSayg�lar�m�zla,\n\nAGORA Oylama ve Anket Servisi\n";
	
		$header ="From:".$agora_mail."\nReply-to:".$agora_mail;
		mail($add,$subj,$mess,$header);
		// also mail confirmation to the root for diagnosis 
		mail("root@orkinos.cmpe.boun.edu.tr",$subj,$mess,$header);
	}

	function nonce ()
	{
		mt_srand((double)microtime () * 1000000);
		$r=mt_rand();
		$token .= md5 (uniqid(mt_rand()));
	// We have decided that 128 hexchar nonce is a bit long :-) So, commented out the following three lines
	//	$token .= md5 (uniqid(mt_rand()));
	//	$token .= md5 (uniqid(mt_rand()));
	//	$token .= md5 (uniqid(mt_rand()));
		return $token;
	}

	function insert_nonce ($e,$a,$id,$qcount) /* Generate nonce and add it to CONFIRMATIONS */
	{

		global $dbhost,$dbhost,$dbuser,$dbpass,$dbname;

		//mysql_connect($dbhost,$dbuser,$dbpass) or die ("Problem connecting to DataBase");
		
		$query = "select poll_title from polls where poll_id = $id";
		$result = mysql_db_query($dbname,$query);
		$r = mysql_fetch_array($result);
		$poll_title = $r["poll_title"];
		mysql_free_result($result);
		
		$query = "select poll_id, e_mail from confirmations where (poll_id = $id and e_mail = '$e')";
		$result = mysql_db_query($dbname,$query);

		/* If he had voted before but did not confirmed he should not do it again */


	 	if ($r = mysql_fetch_array($result))
			echo "$e: Kay�tlara g�re bu adresten bir onaylama bekleniyor. L�tfen e-posta kutunuzu kontrol ediniz.<br>\n";
			//echo "$e, You have an unconfirmed vote for this poll. Please check your mailbox and confirm your vote or cancel your vote by clicking the relevant link in the message sent to you<br>\n";
	   	else { 
	    		$ex_date=date("Y-m-d",mktime(0,0,0,date ("m"),date("d")+1,date ("Y")));
		    	$n=nonce();
		    	for ( $i=1; $i < $qcount; $i++) {
				$insert_query = "insert into confirmations values ('$e','$id','$i','$a[$i]','$ex_date','$n')";
		     	//	echo $insert_query;
       	      			mysql_db_query($dbname,$insert_query);
		    	}  
		     	generate_mail($e,$n,$poll_title);
	 	    	echo "<strong>$e</strong> adresine <strong>\"$poll_title\"</strong> ba�l�kl� oylama i�in bir onaylama mesaj� g�nderilmi�tir. Oyunuz, size g�nderilen mesajdaki linki takip etti�inizde say�lacakt�r.<br> Kat�l�m�n�z i�in te�ekk�r ederiz.<br>\n";
		     	//echo "$n";
		 }
	}
?>
