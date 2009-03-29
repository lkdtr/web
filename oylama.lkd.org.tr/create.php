<?
	session_start();
	session_register("manager_id");
	session_register("logged");
        require 'include/config.inc';
	if (!isset($logged) || !isset($manager_id)) { 
		header("Location: $confirm_url");
		exit; 
	}	
	//require 'include/header.inc';
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
<title>Yeni Oylama</title>
</head>
<body bgcolor="#E8BF20" text="#000080">
<p align="center"><font size="5">AGORA</font><br>
<center><font size="4">Yeni Oylama</font></center>
<hr>

<?
	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Problem connecting to DataBase");

	// Static hashing is used for temporary storage of answers. 
	// Max. 100 answers allowed for a question.

	if ($state==0){ // Entrance from the manager page
		$today = date("Y-m-d");
		$start_date = $today;
		$stop_date = date("Y-m-d",mktime(0,0,0,date("m")+1,date("d"),date("y")) );
		$type=0;
		$num_questions=1;
		$num_answers[$num_questions]=3;
		$question_text[$num_questions]="Oylama sorusunu buraya giriniz";
		$answer_text[$num_questions*100+1]="Se�enek";
		$answer_text[$num_questions*100+2]="Se�enek";
		$num_questions++;
	}
	elseif ($question){ // "Add New Question" is pressed
		$num_answers[$num_questions]=3;
		$question_text[$num_questions]="Oylama sorusunu buraya giriniz";
		$answer_text[$num_questions*100+1]="Se�enek";
		$answer_text[$num_questions*100+2]="Se�enek";
		$num_questions++;
	}
	else // "Add New Answer" for a question is pressed
		for ($i=1;$i<$num_questions;$i++) 
		// find out for which question the user wants to add an answer
			if ($answer[$i]){
				$foo=$i*100+$num_answers[$i];
				$answer_text[$foo]="Se�enek";
				$num_answers[$i]++;					
			}
	

	// USER FILLED THE FORM AND SUBMIT IT
	if ($submit){

		// Empty check for poll name
		if (trim($poll_name)=="") {
			echo ("Oylama ismi bo� olamaz");
			exit();
		}

	
		// Empty check for remote host address
		if (($type==2 || $type==3)&&(trim($remote_host)=="")){
			echo ("Bu oylama tipinde uzaktan kimlik ispat� i�in bir makina ismi girmeniz gerekmektedir");
			exit();
		}
		
		// Date checking
		$check_start=explode("-",$start_date);
		$check_stop=explode("-",$stop_date);
		if (!checkdate($check_start[1],$check_start[2],$check_start[0])||!checkdate($check_stop[1],$check_stop[2],$check_stop[0])){
			echo ("Ge�ersiz tarih giri�i");
			exit();
		}
		
		if ($start_date >= $stop_date) {
			echo ("Biti� tarihi ba�lang�� tarihinden en az bir g�n sonra olmal�d�r");
			exit();
		}
		
		//If the voter list is empty and type 2 is chosen, it's considered as type 3
		if (($type==2) && (trim($voter_list)==""))
			$type=3;
			
		//If the voter list is not empty and type 3 is chosen, it's considered as type 2
		if (($type==3) && (trim($voter_list)!=""))
			$type=2;
		

		// END OF ERROR CHECKING AND ADJUSTMENT

		mysql_db_query($dbname, "insert into polls (manager_id,poll_title,start_date,stop_date,type) values ($manager_id,\"$poll_name\",\"$start_date\",\"$stop_date\",$type)"); 
		$result = mysql_db_query($dbname, "select poll_id from polls where manager_id=$manager_id and poll_title=\"$poll_name\""); 
		
		if ($result) {
			$r = mysql_fetch_array($result);
			$poll_id=$r["poll_id"];
		}
		if ($type == 2 || $type == 3)
			mysql_db_query($dbname, "insert into remote_polls (poll_id,host_id) values ($poll_id,\"$remote_host\")"); 		

		for ($question_id=1;$question_id<$num_questions;$question_id++){
			$text=$question_text[$question_id];
			mysql_db_query($dbname, "insert into questions (poll_id,question_id,text) values ($poll_id,$question_id,\"$text\")"); 					
			for ($answer_id=1;$answer_id<$num_answers[$question_id];$answer_id++){
				$foo=$question_id*100+$answer_id;
				$text=$answer_text[$foo];
				mysql_db_query($dbname, "insert into answers (poll_id,question_id,answer_id,text) values ($poll_id,$question_id,$answer_id,\"$text\")"); 
			}
		}

		//VOTER LIST PROCESSING
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
						echo "<p>Kullan�c� $username zaten listede</p>";
					else
						echo "<p>Kullan�c� : $username �ifre: $token (eklendi)</p>";

					
					if ($notification) {
						$subj= "\"$poll_name\" ba�l�kl� oylamaya �a�r�";
						$mess= "Say�n oyveren,\n \"$poll_name\" ba�l�kl� �zel oylamada oy kullanman�z i�in ad�n�za bir hesap a��lm��t�r\n Hesap bilgileri a�a��dad�r.\n Oylama kodu: $poll_id\n Login: $username \n �ifre: $token\n\nOylama sayfasi: ".$main_url."private_polls.php?poll_id=$poll_id\n\nAGORA Oylama ve Anket Servisi";
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
						echo "<p>Kullan�c� $username zaten listede</p>";
					else
						echo "<p>Kullan�c� : $username (eklendi)</p>";

					
					if ($notification) {
						$subj= "\"$poll_name\" ba�l�kl� oylamaya �a�r�";
						$mess= "Say�n oyveren,\n \"$poll_name\" ba�l�kl� �zel oylamada $remote_host �zerinde bulunan telnet hesap bilgilerinizle oy kullanabilirsiniz.\n\nOylama sayfasi: ".$main_url."private_polls.php?poll_id=$poll_id\n\nAGORA Oylama ve Anket Servisi";
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
						echo "<p>Kullan�c� $username zaten listede</p>";
					else
						echo "<p>Kullan�c� : $username (eklendi)</p>";

					if ($notification) {
						$subj= "\"$poll_name\" ba�l�kl� oylamaya �a�r�";
						$mess= "Say�n oyveren,\n \"$poll_name\" ba�l�kl� �zel oylamada $username adresini kullanarak oy kullanabilirsiniz.\n\nOylama sayfasi: ".$main_url."private_polls.php?poll_id=$poll_id\n\nAGORA Oylama ve Anket Servisi";
						$header ="From:".$agora_mail."\nReply-to:".$agora_mail;	
						mail($username,$subj,$mess,$header);
					}
					
					$voter=strtok("\n");
				}
			
				break;

		} // END OF VOTER LIST PROCESSING
		
		// PRINT CREATION SUMMARY

?>

<p><font size="2">Oylama ba�ar�yla olu�turuldu</p>
		
<center>

<table border="5">
<tr><td>
    <table>
        <tr>
            <td><font size="4">Oylama Ba�l���</font></td>
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
	            	 	case 0:echo "A��k";break;
        	     		case 1:echo "�zel(lokal kimlik kan�tlama)";break;
              			case 2:echo "�zel(uzaktan s�n�rl� kimlik kan�tlama)";break;
              			case 3:echo "�zel(uzaktan s�n�rs�z kimlik kan�tlama)";break;
              			case 4:echo "�zel(E-mail adresi ile kimlik kan�tlama)";break;
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
            <td><font size="4">Ba�lang�� Tarihi(yyyy-mm-gg)</font></td>
            <td>:</td>
            <td><? echo $start_date; ?></td>
        </tr>
        <tr>
            <td><font size="4">Biti� Tarihi(yyyy-mm-gg)</font></td>
            <td>:</td>
            <td><? echo $stop_date; ?></td>
        </tr>
	</table>    
</td>
</tr>

	<?        
	if (($type == 1 || $type == 2 || $type == 4) && $notification == "on")
       		echo "<tr><td>Listede ge�erli adresi olan herkese oylamaya �a�r� mesaj� at�lm��t�r.</td></tr>";
       		//echo "<tr><td>A notification mail has been sent to each voter</tr></td>";

	//<p><strong>Print or save this page for future reference.</strong></p>

    ?>

</table></center>
<br>
<br>

<center><p><strong>Bu sayfay� saklay�n�z</strong></p></center>


<?		
	}//ELSEIF SUBMIT
				// USER EITHER COMES FROM MANAGER PAGE OR ADDS QUESTION/ANSWER
	else{ 
		echo "<form action=\"create.php\" method=\"POST\">";

		// SET HIDDEN VARIABLES
		echo "<input type=\"hidden\" name=\"state\" value=1>";
		echo "<input type=\"hidden\" name=\"num_questions\" value=$num_questions>";
		for ($i=1;$i<$num_questions;$i++)
			echo "<input type=\"hidden\" name=\"num_answers[$i]\" value=$num_answers[$i]>";
?>

<center>
<p><font size="5">Oylama Tan�mlar�</font></p>

<table width=75% border="5">
<tr><td>
    <table>
        <tr>
            <td><font size="4">Oylama Ba�l���</font></td>
            <td>:</td>
            <td><input type="text" size="20" name="poll_name" value="<? echo $poll_name; ?>"></td>
        </tr>
        <tr>
            <td valign="top"><font size="4">Oylama Tipi</font></td>
            <td valign="top">:</td>
            <td>
           		    <input type="radio" name="type"            
        		    <? if ($type==0) echo " checked "; ?>
                	    value="0">
                	    0.A��k<br>        
            		<input type="radio" name="type"
        		    <? if ($type==1) echo " checked "; ?>
                	    value="1">
                	    1.�zel(Lokal kimlik kan�tlama)<br>
            		<input type="radio" name="type"
        		    <? if ($type==2) echo " checked "; ?>
                	    value="2">
                	    2.�zel(Uzaktan s�n�rl� kimlik kan�tlama)<br>
            		<input type="radio" name="type"
        		    <? if ($type==3) echo " checked "; ?>
                	    value="3">
                	    3.�zel(Uzaktan s�n�rs�z kimlik kan�tlama)<br>
                	<input type="radio" name="type"
                	<? if ($type==4) echo " checked "; ?>
                	    value="4">
                	    4.�zel(E-mail adresi ile kimlik kan�tlama)<br>                	    
            </td>
        </tr>
        <tr>
            <td><font size="4">Uzak makina</font><br>(uzaktan kimlik kanitlama i�in)</td>
            <td>:</td>
            <td><input type="text" size="20" name="remote_host" value="<? echo $remote_host; ?>"></td>
        </tr>
        <tr>
            <td><font size="4">Ba�lang�� Tarihi(yyyy-aa-gg)</font></td>
            <td>:</td>
            <td><input type="text" size="10" name="start_date" value="<? echo $start_date; ?>"></td>
        </tr>
        <tr>
            <td><font size="4">Biti� Tarihi(yyyy-aa-gg)</font></td>
            <td>:</td>
            <td><input type="text" size="10" name="stop_date" value="<? echo $stop_date; ?>"></td>
        </tr>
        <tr>
            <td width=40% valign="top"><font size="4">Kat�l�mc� Listesi(isim:�ifre)</font><br>(�ifre girilmezse �retilecektir, sadece 1, 2 ve 4 tipi oylamalar i�in doldurulmal�d�r)</font></td>
            <td valign="top">:</td>
            <td><textarea name="voter_list" rows="5" cols="45"><? echo $voter_list; ?></textarea></td>
        </tr>
    </table>
</td>
</tr>

<tr>
    <td>
    <input type="checkbox" name="notification"
    <? if($notification == "on") echo " checked>";
       else echo ">";?>
    
    Yukar�daki listede bulunan herkese oylama �a�r�s� g�ndermek istiyorum <br>(Bunun i�in yukar�daki listede isimler ger�ek e-mail adresi olmal�d�r)
	<? //Send a notification mail to each voter in the list above<br>(requires valid e-mail addresses in the voter list) ?>    

    </td>
</tr>
</table>

<br><br>

<p><font size="5">Oylama Sorular�</font></p>
<table border="5">
<?
		for ($question_id=1;$question_id<$num_questions;$question_id++){
			echo "<tr><td>";
			echo "<table>";
			$text=$question_text[$question_id];
			echo "<tr><td>Soru $question_id</td><td>:</td>";
			echo "<td><input type=\"text\" size=\"50\" name=\"question_text[$question_id]\" value=\"$text\"></td></tr><br>";
			for ($answer_id=1;$answer_id<$num_answers[$question_id];$answer_id++){
				$foo=$question_id*100+$answer_id;
				$text=$answer_text[$foo];
				echo "<tr><td>Se�enek $answer_id</td><td>:</td>";
				echo "<td><input type=\"text\" size=\"20\" name=\"answer_text[$foo]\" value=\"$text\"></td></tr>";
			}
			echo "</table>";
			echo "<center><input type=\"submit\" name=\"answer[$question_id]\" value=\"Se�enek Ekle\"></center>";
			echo "</td></tr>";
		}
		echo "<tr><td><center><input type=\"submit\" name=\"question\" value=\"Soru Ekle\"></center></td></tr>";
		echo "</table>";
		echo "
	        
	        <p><input type=\"submit\" name=\"submit\" value=\"Olu�tur\"></p>
	        </form></center>";
	} //ELSE
?>


<br><hr>
<a href="manager.php">Y�netici Sayfas�</a>

</body>
</html>
