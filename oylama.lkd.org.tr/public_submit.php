<?
	require 'include/config.inc';
	if (!isset($poll_id) || !isset($email)) { 
		// if no pollid or email is given, redirect the user to the beginning
		header("Location: $main_url");
		exit; 
	}
	require 'include/header.inc'; 
	require 'include/confirmation.inc';

?>

<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
   <title>Oylama Özeti</title>
</head>
<body text="#000080" bgcolor="#E8BF20">

<center><font size="5">AGORA</font>

<hr>


<?
	$address=strtolower($email);
	if (preg_match("/^\w+(\.\w+)?@\w+(\.\w+)+$/",$address)) {	
		mysql_connect($dbhost,$dbuser,$dbpass) or die ("Problem connecting to DataBase");
		$query = "select user_id, poll_id  from voters  where (voters.poll_id = $poll_id and voters.user_id = '$address')";
		$result = mysql_db_query($dbname, $query); 

		/* we know that the result is unique */

        if ($result && ($r = mysql_fetch_array($result)))
			echo "<strong>$address</strong> adresinden daha önce bir oy verildiğinden bu adres ile bir daha oy atılamaz.\n";
		else { 
			$qc = count($ans);
			insert_nonce($address,$ans,$poll_id,$qc);
	 	}
	}
	else echo "Geçersiz e-mail adresi\n";
?>

<hr>
<p><a href="index.html"><font size="4">Ana Sayfa</font></a></p>

</body>
</html>
