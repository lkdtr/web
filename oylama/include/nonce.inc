<?php

// This file will(or is supposed to) be included with config.inc. $main_url is defined in config.inc

function generate_mail($add,$n)
{
	$subj= "Nonce from Agora";
	$mess= "Dear Voter,\nThank you for using AGORA, in order to complete your voting operation\nyou have to click on the link below once.\n\n$confirm_url?address=$add&nonce=$n\n\nHave a nice day!\n--\nNOTICE: Please do not reply to agora@boun.edu.tr as it is not a valid email address.";

	$header ="From: agora@kerevit.cmpe.boun.edu.tr\nReply-to:gonullu@boun.edu.tr";
	mail($add,$subj,$mess,$header);
}

function nonce ()
{
	mt_srand((double)microtime () * 1000000);
	$r=mt_rand();
	$token .= md5 (uniqid(mt_rand()));
	$token .= md5 (uniqid(mt_rand()));
	$token .= md5 (uniqid(mt_rand()));
	$token .= md5 (uniqid(mt_rand()));
	return $token;
}

function insert_nonce ($e,$a,$id,$qcount) /* Generate nonce and add it to CONFIRMATIONS */
{
	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Problem connecting to DataBase");
	$query = "select poll_id, e_mail from confirmations where (poll_id = $id and e_mail = '$e')";

	$result = mysql_db_query($dbname,$query);

	/* If he had voted before but did not confirmed he should not do it again */


 	if ($r = mysql_fetch_array($result))
		echo "$e,<br>You have an unconfirmed vote for this poll. Please check your mailbox and confirm your vote or try two days later since the confirmation of your previous vote will expire after two days.<br>\n";
   	else { 
    		print "Thank you $e<br>\n";
    		$ex_date=date("Y-m-d",mktime(0,0,0,date ("m"),date("d")+1,date ("Y")));
	    	$n=nonce();
	    	for ( $i=1; $i < $qcount; $i++) {
			$insert_query = "insert into confirmations values ('$e','$id','$i','$a[$i]','$ex_date','$n')";
	     		echo $insert_query;
             		mysql_db_query("votedb",$insert_query);
	    	}  
	     	generate_mail($e,$n);
	     	echo "your vote will be counted, you will not be allowed to vote once more <br>\n";
	     	echo "$n";
	 }
}

?>
