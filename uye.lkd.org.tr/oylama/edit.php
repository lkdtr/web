<?
	session_start();
	session_register("manager_id");
	session_register("logged");
        require 'include/config.inc';
	//if (!isset($logged) || !isset($manager_id) || !isset($id) ) { 
	if (!isset($logged) || !isset($manager_id)) { 
		header("Location: $login_url");
		exit; 
	}	
	require 'include/header.inc';
	require 'include/print_poll.inc';
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Oylama Bilgileri</title>
</head>
<body bgcolor="#E8BF20" text="#000080">
<p align="center"><font size="5">AGORA</font><br>
<center><font size="4">Oylama Bilgileri</font></center>
<hr>

<?php

	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Problem connecting to DataBase");
	
	$poll_id=$id; // well, this is for convenience

	if ($delete){ // DELETE BUTTON IS PRESSED
	
		mysql_db_query($dbname, "delete from polls where poll_id=$poll_id");
		mysql_db_query($dbname, "delete from questions where poll_id=$poll_id"); 	
		mysql_db_query($dbname, "delete from answers where poll_id=$poll_id"); 	
		mysql_db_query($dbname, "delete from voters where poll_id=$poll_id"); 	
		mysql_db_query($dbname, "delete from remote_polls where poll_id=$poll_id"); 	
		mysql_db_query($dbname, "delete from confirmations where poll_id=$poll_id"); 	
		
		echo "<p align=\"center\"><font size=\"4\">Oylama silindi</font></p>";							
	}

	elseif ($submit){ // SUBMIT BUTTON IS PRESSED

		// UPDATE DATE INFO
		$check_start=explode("-",$start_date);
		$check_stop=explode("-",$stop_date);
		if (!checkdate($check_start[1],$check_start[2],$check_start[0])||!checkdate($check_stop[1],$check_stop[2],$check_stop[0])){
			echo ("Girilen tarihler geçersiz. Lütfen kontrol edip tekrar giriniz.");
			exit();
		}
		
		if ($start_date >= $stop_date) {
			echo ("Bitiş tarihi başlangıç tarihinden en az bir gün sonra olmalıdır.");
			exit();
		}
				
		if (!mysql_db_query($dbname, "update polls set start_date=\"$start_date\",stop_date=\"$stop_date\" where poll_id=$poll_id "))
			echo mysql_error(); 	

		// UPDATE REMOTE HOST INFO
		if ($type == 2 || $type == 3) {
			mysql_db_query($dbname, "update remote_polls set host_id=\"$remote_host\" where poll_id=$id"); 
		}


		// VOTER LIST PROCESSING
		
		switch ($type) {
				
			case 1:
				$voter=strtok($voter_list,"\n");
				while (($voter)&&(trim($voter)!="")){ // when you see an empty line, stop.
					$username=trim($voter);
					$login = explode(":",$username);
					$username = trim($login[0]); // now, this is username
					$token = trim($login[1]); // password
					
					if ($username && !$token) { //password not supplied, generate one						
						mt_srand((double)microtime () * 1000000);
						$token = substr((uniqid(mt_rand())),0,6);								
					}
					elseif(!$username || !$token) { // if no username --> invalid entry
						$voter=strtok("\n");
						continue; //invalid entry
					}						
					//else if both supplied, go on
					
					$password = md5($token);
					if (!mysql_db_query($dbname, "insert into voters (poll_id,user_id,password) values ($poll_id,\"$username\",\"$password\")"))
						echo "<p>Kullanıcı $username zaten listede</p>";
					else
						echo "<p>Kullanıcı : $username Şifre: $token (eklendi)</p>";

					
					if ($notification) {
						$subj= "\"$poll_name\" başlıklı oylamaya çağrı";
						$mess= "Sayın oyveren,\n \"$poll_name\" başlıklı özel oylamada oy kullanmanız için adınıza bir hesap açılmıştır\n Hesap bilgileri aşağıdadır.\n Oylama kodu: $poll_id\n Login: $username \n Şifre: $token\n\nOylama sayfasi: ".$main_url."private_polls.php?poll_id=$poll_id\n\nAGORA Oylama ve Anket Servisi";
						$header ="From:".$agora_mail."\nReply-to:".$agora_mail;
						mail($username,$subj,$mess,$header);
					}
					
					$voter=strtok("\n");	
				}						
				break;
			
			case 2:
				$voter=strtok($voter_list,"\n");
				while (($voter)&&(trim($voter)!="")){ // when you see an empty line, stop.
					$username=trim($voter);
					if (!mysql_db_query($dbname, "insert into voters (poll_id,user_id,password) values ($poll_id,\"$username\",\"-\")")) 	
						echo "<p>Kullanıcı $username zaten listede</p>";
					else
						echo "<p>Kullanıcı : $username (eklendi)</p>";

					
					if ($notification) {
						$subj= "\"$poll_name\" başlıklı oylamaya çağrı";
						$mess= "Sayın oyveren,\n \"$poll_name\" başlıklı özel oylamada $remote_host üzerinde bulunan telnet hesap bilgilerinizle oy kullanabilirsiniz.\n\nOylama sayfasi: ".$main_url."private_polls.php?poll_id=$poll_id\n\nAGORA Oylama ve Anket Servisi";
						$header ="From:".$agora_mail."\nReply-to:".$agora_mail;
						mail($username."@".$remote_host,$subj,$mess,$header);
					}
					
					$voter=strtok("\n");	
				}								
				break;
						
			case 4:
				$voter=strtok($voter_list,"\n");
				while (($voter)&&(trim($voter)!="")){ // when you see an empty line, stop.
					$username=trim($voter);
					if (!mysql_db_query($dbname, "insert into voters (poll_id,user_id,password) values ($poll_id,\"$username\",\"-\")")) 	
						echo "<p>Kullanıcı $username zaten listede</p>";
					else
						echo "<p>Kullanıcı : $username (eklendi)</p>";

					if ($notification) {
						$subj= "\"$poll_name\" başlıklı oylamaya çağrı";
						$mess= "Sayın oyveren,\n \"$poll_name\" başlıklı özel oylamada $username adresini kullanarak oy kullanabilirsiniz.\n\nOylama sayfasi: ".$main_url."private_polls.php?poll_id=$poll_id\n\nAGORA Oylama ve Anket Servisi";
						$header ="From:".$agora_mail."\nReply-to:".$agora_mail;	
						mail($username,$subj,$mess,$header);
					}
					
					$voter=strtok("\n");
				}
			
				break;

		} // END OF VOTER LIST PROCESSING		
		
		// PRINT UPDATE SUMMARY

?>

<center><p>Oylama başarıyla güncellendi</p></center>
		
<center>

<table border="5">
<tr><td>
    <table>
        <tr>
            <td><font size="4">Oylama İsmi</font></td>
            <td>:</td>
	    	<td><? echo $poll_name; ?></td>
        </tr>
        <tr>
            <td><font size="4">Oylama ID</font></td>
            <td>:</td>
	    	<td><? echo $poll_id; ?></td>
        </tr>
        <tr>
            <td valign="top"><font size="4">Oylama Tipi</font></td>
            <td valign="top">:</td>
            <td>
              	<?
              		switch($type) {
	             	//case 0:echo "Public";break;
        	     	//case 1:echo "Private Local";break;
              		//case 2:echo "Restricted Private Remote";break;
              		//case 3:echo "Unrestricted Private Remote";break;
              			case 0:echo "Açık";break;
        	     		case 1:echo "Özel(Lokal kimlik kanıtlama)";break;
              			case 2:echo "Özel(Uzaktan sınırlı kimlik kanıtlama)";break;
              			case 3:echo "Özel(Uzaktan sınırsız kimlik kanıtlama)";break;
              			case 4:echo "Özel(E-mail adresi ile kimlik kanıtlama)";break;
              		}
              	?>
            </td>
        </tr>
<?        
	if ($type == 2 || $type == 3){
		
		echo "<tr>
    	       	<td><font size=\"4\">Uzak makina</font></td>
            	<td>:</td>
            	<td>$remote_host</td>
        	</tr>";
	}
?>
        
        <tr>
            <td><font size="4">Başlangıç Tarihi</font></td>
            <td>:</td>
            <td><? echo $start_date; ?></td>
        </tr>
        <tr>
            <td><font size="4">Bitiş Tarihi</font></td>
            <td>:</td>
            <td><? echo $stop_date; ?></td>
        </tr>
	</table>    
</td>
</tr>

	<?        
	if (($type==1 || $type==2 || $type==4) && $notification == "on")
       		echo "<tr><td>Listede geçerli adresi olan herkese oylamaya çağrı mesajı atılmıştır.</td></tr>";
       		//echo "<tr><td>A notification mail has been sent to each voter</tr></td>";
    ?>

</table></center>
<br>
<br>
<center><p><strong>Bu sayfayı saklayınız</strong></p></center>

<?		

	}
	//////////////////////////////////////////////////////////////////////////////////////////
	/////////////////////////// EDIT PART (FORM)
	//////////////////////////////////////////////////////////////////////////////////////////
	else{

		$result = mysql_db_query($dbname, "select type,poll_title,start_date,stop_date,manager_id from polls where poll_id=$id and manager_id=$manager_id"); 
		
		if ($result) {
			if (! ($r = mysql_fetch_array($result)) ) {
				echo "Invalid request: Poll does not exist or you do not have priviledge to edit it";
				echo "</body></html>";
				exit();
			}
			$type=$r["type"];
			$start_date=$r["start_date"];

			if ($finalize)// finalize button is pressed. set stop date to yesterday. This means poll is finalized.		
				$stop_date = date("Y-m-d",mktime(0,0,0,date("m"),date("d")-1,date("y")) );
			else		
				$stop_date=$r["stop_date"];
		
			$poll_title=$r["poll_title"];
		}
		else {
			echo "Database error.";
			echo "<br><hr><a href=\"manager.php\">Yönetici Sayfası</a>";
			echo "</body></html>";
			exit();
		}
	
	echo "<form action=\"edit.php?id=$poll_id\" method=\"POST\">";
    echo "<input type=\"hidden\" name=\"state\" value=1>";


// PRINT POLL PROPERTIES
// Poll name : not editable
// Poll type : not editable
// Dates     : editable
// Voter list: incremental (alternative: all voter list can be editable) 

?>

<center>

<table border="5">
<tr><td>
    <table>
        <tr>
            <td><font size="4">Oylama Başlığı</font></td>
            <td>:</td>			
	    	<td><font size="4"><? echo $poll_title; ?></font></td>
		<input type="hidden" size="20" name="poll_name" value="<? echo $poll_title; ?>">			
        </tr>
        
        <tr>
        	<td valign="top"><font size="4">Oylama ID</font></td>
        	<td valign="top">:</td>
        	<td><font size="4"><? echo $poll_id; ?></font></td>
        </tr>
        
        <tr>
            <td valign="top"><font size="4">Oylama Tipi</font></td>
            <td valign="top">:</td>
            <td>
              	<font size="4"><?
              		switch($type) {
	             	//case 0:echo "Public";break;
        	     	//case 1:echo "Private Local";break;
              		//case 2:echo "Restricted Private Remote";break;
              		//case 3:echo "Unrestricted Private Remote";break;
              			case 0:echo "Açık";break;
        	     		case 1:echo "Özel(Lokal kimlik kanıtlama)";break;
              			case 2:echo "Özel(Uzaktan sınırlı kimlik kanıtlama)";break;
              			case 3:echo "Özel(Uzaktan sınırsız kimlik kanıtlama)";break;
              			case 4:echo "Özel(E-mail adresi ile kimlik kanıtlama)";break;              			            			    
              		}
		?></font>
		<input type="hidden" name="type" value=<? echo $type; ?>>			
		      
              
            </td>
        </tr>
<?        
	if ($type==2 || $type==3){
		$result2 = mysql_db_query($dbname, "select host_id from remote_polls where poll_id=$id"); 
		$r2 = mysql_fetch_array($result2);
		$remote_host=$r2["host_id"];
		echo "<tr>
    	       	<td><font size=\"4\">Uzak makina</font></td>
            	<td>:</td>
            	<td><input type=\"text\" size=\"20\" name=\"remote_host\" value=\"$remote_host\"></td>
        	</tr>";
	}
?>
        
        <tr>
            <td><font size="4">Başlangıç Tarihi(yyyy-aa-gg)</font></td>
            <td>:</td>
            <td><input type="text" size="20" name="start_date" value="<? echo $start_date; ?>"></td>
        </tr>
        <tr>
            <td><font size="4">Bitiş Tarihi(yyyy-aa-gg)</font></td>
            <td>:</td>
            <td><input type="text" size="20" name="stop_date" value="<? echo $stop_date; ?>"></td>
        </tr>


	<?        
	if ($type==1 || $type==2 || $type==4){
		echo "<tr>
            	<td valign=\"top\"><font size=\"4\">Ek Katılımcı Listesi(isim:şifre)</font><br>(şifre girilmezse üretilecektir)</td>
            	<td valign=\"top\">:</td>
            	<td><textarea name=\"voter_list\" rows=\"5\" cols=\"45\">$voter_list</textarea></td>
        	</tr>";
	}
        ?>

        <tr>

        </tr>
    </table>    
</td>
</tr>

	<?        
	if ($type==1 || $type==2 || $type==4){
		echo "<tr><td><input type=\"checkbox\" name=\"notification\"";
    		if($notification == "on") echo " checked>";
       			else echo ">";
    		echo "Yukarıdaki listede bulunan herkese oylama çağrısı göndermek istiyorum <br>(Bunun için yukarıdaki listede isimler gerçek e-mail adresi olmalıdır)";
    		echo "</td></tr>";
	}
    ?>

<tr><td><center><table>
	<tr>
	<td>
		<input type="submit" name="delete" value="!-Sil-!">
	</td>
	<td>
		<input type="submit" name="finalize" value="Sona Erdir">
	</td>
	<td>
		<input type="submit" name="submit" value="Kaydet">        
	</td>
	</tr>	
</table></center></td></tr>

</table>
</center>

<?

        echo "</form>";


////////////////////////////////  
// PRINT POLL QUESTIONS
////////////////////////////////  

	// CHECK IF THE POLL IS ACTIVE	

	
	$today = date("Y-m-d");	
	$poll_type = $type; 

	if ($start_date > $today) 
		$poll_type = -1;
	elseif ($stop_date < $today) 
		$poll_type = -2;
	

	switch ($poll_type) {

	//	case -1: // poll not started yet
	//		$tmp = explode("-",$start_date);
	//		echo "Poll will be started on $tmp[2]-$tmp[1]-$tmp[0]";
	//		break;

		case -2: // poll ended or stopped 

			print_poll();
			break;

		case -1:
		case 0:
		case 1:
		case 2:
		case 3:
		case 4: print_poll();break;
		// the code below(until after the break statement) will not be executed.
		//PRINTING QUESTIONS AND ANSWERS
?>	
<br><br>

<center>
<p><font size="5">Oylama Soruları</font></p>

<table border="5">

<?
		//Print Questions
		$query = "select text, question_id from questions where questions.poll_id=$poll_id order by question_id";
		$result = mysql_db_query($dbname, $query); 
		while ($r = mysql_fetch_array($result)) {
			$q_text = $r["text"];
			$question_id = $r["question_id"];
			echo "<tr><td>";
			echo "<table>";
			$text=$question_text[$question_id];
			echo "<tr><td>$question_id. Soru</td><td>:</td>";
			echo "<td><strong>$q_text</el></strong></tr><br>";
			//Print answers for $question_id
			$query2 = "select text, answer_id from answers where answers.poll_id=$poll_id and answers.question_id=$question_id order by answer_id";
			$result2 = mysql_db_query($dbname, $query2); 
			while ($r = mysql_fetch_array($result2)) {
				$ans_text = $r["text"];
				$ans_id = $r["answer_id"];
				echo "<tr><td>&nbsp;&nbsp;$ans_id. Seçenek</td><td>:</td>";
				echo "<td>$ans_text</td></tr>";
			}//WHILE
			mysql_free_result($result2);
			echo "</table>";
			echo "</td></tr>";
		}// WHILE
		mysql_free_result($result);
		
		echo "</table></center>";
					
		break;
		
	} // SWITCH
  
///////////////////////////////
        
}// ELSE

?>


<br><hr>
<a href="manager.php">Yönetici Sayfası</a>

</body>
</html>
