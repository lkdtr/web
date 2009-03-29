<?			
	
function print_poll() {

	global $poll_title,$poll_id,$start_date,$stop_date,$dbname;

//PRINTING QUESTIONS AND ANSWERS

			echo "<center>
	  		  <table border=\"1\">
  			  <tr>
  			  <th>Oylama Baþlýðý</th>
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
			  </table></center><br>";  			 
	
			$query = "select text,question_id from questions where questions.poll_id=$poll_id order by question_id";
			$result = mysql_db_query($dbname, $query); 

			echo '<table width=75% border="1" align=center>';

			while ($r = mysql_fetch_array($result)) {
				$q_text = $r["text"];
				$question_id = $r["question_id"];
				
				echo'<tr><td>';
				//echo "Question $question_id.";
				echo "<strong>$question_id. </strong>$q_text";

				$counter=0;
				//$query2 = "select counter from answers where answers.poll_id=$poll_id and answers.question_id=$question_id";
				//$query2 = "select text, answer_id, counter from answers where answers.poll_id=$poll_id and answers.question_id=$question_id order by answers.counter desc";
				$query2 = "select text, answer_id, counter from answers where answers.poll_id=$poll_id and answers.question_id=$question_id order by answer_id";
				$result2 = mysql_db_query($dbname, $query2);
				
				//First count the total votes
				while ($r = mysql_fetch_array($result2)) {
					$counter += $r["counter"];
				} // WHILE

				mysql_data_seek($result2,0); // reset the result pointer to the beginning

				echo "<table border=1 width=100%>";
				while ($r = mysql_fetch_array($result2)) {
					$ans_text = $r["text"];
					$ans_counter = $r["counter"];
					if ($counter==0)
						$percentage=0;
					else
						$percentage=sprintf ("%01.2f", $ans_counter*100/$counter);
					//$tmp = $percentage * 0.99;
					$tmp = 100-$percentage;
					echo "<TR>
						<TD align=left>$ans_text</TD>
						<TD width=11% align=right>($ans_counter votes)</TD>
						<TD width=50%>
							<TABLE WIDTH=100% BORDER=0 CELLSPACING=0>
							<TR>
								<TD WIDTH=$percentage% BGCOLOR=\"#FF0000\">&nbsp;</TD>
								<TD WIDTH=$tmp%>&nbsp;$percentage%</TD>
							</TR>
							</TABLE>
						</TD>
						</TR>";
				} // WHILE
				mysql_free_result($result2);	
				echo "</table>";
				echo'</tr></td>';				
			} // WHILE
			echo '</table>';
			
			print "<center>Bu oylamaya toplam <large><strong>$counter</strong></large> kiþi katýlmýþtýr</center>";
			mysql_free_result($result);	
}			

?>
