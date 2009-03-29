<?php
	import_request_variables('PG');
	require 'include/config.inc';
	if (!isset($poll_id))  { // if no pollid is given, redirect the user to the beginning
		header("Location: $main_url");
		exit; 
	}
	require 'include/header.inc';
	require 'include/print_poll.inc';


	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Problem connecting to DataBase");

	$query = "select poll_title,type,start_date,stop_date from polls where polls.poll_id=$poll_id";
	$result = mysql_db_query($dbname, $query); 
	
	if ( !($r = mysql_fetch_array($result))) {
			echo '<html>
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
			<title>ERROR</title>
			</head> 
			<body bgcolor="#E8BF20" text="#000080">
			<br><br><br>
			<center><strong>Hatalı istek</strong></center>';
			
		//echo "Poll does not exist";		
	}
	elseif ( ($poll_type = $r["type"]) != 0 )
	{
			echo '<html>
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
			<title>ERROR</title>
			</head> 
			<body bgcolor="#E8BF20" text="#000080">
			<br><br><br>
			<center><strong>Hatalı istek</strong></center>';			 
			
		//echo "This poll is private";
	}
	else {

		//PRINT TITLE
		$poll_title = $r["poll_title"]; 
		print '<html>
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
			<title>' . $poll_title . '</title>
			</head> 
			<body bgcolor="#E8BF20" text="#000080">
			<center><font size="5">AGORA</font></center>			
			<hr>';
	
	// CHECK IF THE POLL IS ACTIVE	

		$start_date = $r["start_date"];	
		$stop_date = $r["stop_date"];
		$today = date("Y-m-d");	
	
		
		// Type adjustment for poll start or end
		if ($start_date > $today) 
			$poll_type = -1;
		elseif ($stop_date <= $today) 
			$poll_type = -2;

	switch ($poll_type) {

		case -1: // poll not started yet
			$tmp = explode("-",$start_date);
			echo "<br><br><br><center>Poll will be started on $tmp[2]-$tmp[1]-$tmp[0]</center>";
			break;

		case -2: // poll ended or stopped 
			
			//PRINTING QUESTIONS AND ANSWERS
			print_poll();
			break;
		case -3: // 
			break;
		//case 1:
		//case 2:
		//case 3:
		//	echo "Invalid public poll";
		//	break;

		case 0: 
		
		//PRINTING QUESTIONS AND ANSWERS

		$query = "select count(*) from voters where poll_id=$poll_id and voted=1";
		$result = mysql_db_query($dbname, $query);
		$r = mysql_fetch_row($result);
		$numvoter = $r[0];

		echo "<center>
	  		  <table border=\"1\">
  			  <tr>
  			  <th>Oylama Başlığı</th>
  			  <th>Oylama ID</th>
  			  <th>Baslangic Tarihi</th>
  			  <th>Bitis Tarihi</th>
  			  </tr>
  			  <tr>
  			  <td>$poll_title</td>
  			  <td align=center>$poll_id</td>
  			  <td>$start_date</td>
			  <td>$stop_date</td>
			  </tr>
			  <tr>
			  <td align=center colspan=4>Şu ana kadar bu oylamaya <strong>$numvoter</strong> kişi katılmıştır.</td>
			  </tr>
			  </table></center>";  		

// -------------------------------------------------------------
		$query = "select count(*) from questions where questions.poll_id=$poll_id";
		$result = mysql_db_query($dbname, $query); 
		$r = mysql_fetch_array($result);
		$qcount = $r["count(*)"];
		
		//echo "number of questions = $qcount";
		
		mysql_free_result($result);
// -------------------------------------------------------------
		
		$query = "select text,question_id from questions where questions.poll_id=$poll_id order by question_id";
		$result = mysql_db_query($dbname, $query); 
		
		
		echo '<form action="public_submit.php" method="POST" onSubmit="return checkForm(this,'.$qcount.')">';
		echo "<input type= \"hidden\"  name = \"ans[]\" value = \"0\">\n";
		echo "<input type= \"hidden\"  name = \"poll_id\" value = \"$poll_id\">\n";
		
		echo '<table border="1" align=center>';
		
		while ($r = mysql_fetch_array($result)) {
			$q_text = $r["text"];
			$question_id = $r["question_id"];

			echo "<tr>";
			echo "<td><strong>$question_id.</strong> $q_text<br><br>";

			$query2 = "select text, answer_id from answers where answers.poll_id=$poll_id and answers.question_id=$question_id order by answer_id";
			$result2 = mysql_db_query($dbname, $query2); 


			$numans = mysql_num_rows($result2);					

			while ($r = mysql_fetch_array($result2)) {
				$ans_text = $r["text"];
				$ans_id = $r["answer_id"];
				
				echo '<input type="radio" ';
				
				if ($ans_id == $numans) 
					echo " checked ";
				else
					echo " unchecked ";

				echo " name=\"ans[$question_id]\" value = \"$ans_id\"> $ans_text</p>";
			} // WHILE
			mysql_free_result($result2);	
			echo "</td></tr>";			
		} // WHILE
		echo "</table>";
		mysql_free_result($result);	

		//GET EMAIL ADDRESS FOR CONFIRMATION
?>
	
	<br><br>
	
	<center>
		<table border="5" width=75%>
		<tr><td>Oylamamıza katıldığınız için teşekkür ederiz. Oyunuzun sayılması için e-mail adresinize bir mesaj gönderilecektir. Lütfen e-mail adresinizi giriniz.</td></tr>
		<tr><td align=center>E-mail: <input type="text" size="40" name="email"></td></tr>
    	</table>
    		
    	<input type="submit" name="B1" value="GÖNDER">
    </center>
		</form>
		
<?
		break;
	} // SWITCH

	//BACK TO PRIVATE POLLS	
	echo '<hr><a href="public_index.php">Açık Oylamalar Sayfası</a>';
} // MAIN ELSE
?>

<SCRIPT LANGUAGE="JavaScript">
function checkForm(form,numQuestions) {
	var isAnswered = false;
	for (var j = 1; j <= numQuestions; j++) {
		for (var i = 0; i < form.elements["ans["+j+"]"].length; i++) {
			if (form.elements["ans["+j+"]"][i].checked) {
				isAnswered = true;
			}
		}
		if (!isAnswered) {
			alert("Lütfen tüm soruları cevaplayınız (Cevapsız soru: "+j+" )");
			return false;			
		}
		isAnswered = false;
	}
	if (form.email.value == "") {
			alert("Lütfen e-mail adresi giriniz");
			return false;					
	}
	return true;
}
</SCRIPT>

</body>
</html>
