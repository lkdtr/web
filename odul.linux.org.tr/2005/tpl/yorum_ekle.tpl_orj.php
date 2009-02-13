<!-- start content -->
<center>
<table cellpadding="0" cellspacing="0" border="0" width="691" height="700" colspan="2">
<tr><td valign="top" witdh="691" height="146" colspan="2" background="images/partion1.jpg"></td></tr>
<tr><td valign="top" witdh="691" height="180" colspan="2" background="images/partion2.jpg"></td></tr>
<tr><td colspan="1" valign="top">
<table cellpadding="0" cellspacing="0" width="320" valign="top" height="100%">
<tr>
<td width="11">&nbsp;</td>
<td valign="top" bgcolor="#f7f7f7">
<table cellpadding="0" cellspacing="6" width="100%" valign="top"><tr><td>
<center>                      <form name="yorum_eklef" action="yorum_ekle2.php" method="post"> 
                        <table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF"> 
                          <tr bgcolor="#f4f4f4"> 
                            <td valign="top"><font color="#000000"><font size="-1">Hakkýnda yorum yapacaðýnýz penguen</font></font></td> 
                            <td><font size="-1"> 
                              <input type="hidden" name="penguen" value="<?=$_GET['id']?>"> <?=penguen_adi($_GET['id'])?>
                              </font>&nbsp;</td> 
                          </tr>
                          <tr> 
                            <td  valign="top"><font color="#000000"><font size="-1">Adýnýz Soyadýnýz</font>&nbsp;</font></td> 
                            <td ><font size="-1"> 
                              <input type="text" name="yorum_adi" size="20" maxlength="100" value="">
                              </font>&nbsp;</td> 
                          </tr> 
                          <tr bgcolor="#f4f4f4"> 
                            <td  valign="top"><font color="#000000"><font size="-1">E-posta adresiniz</font>&nbsp;</font></td> 
                            <td ><font size="-1"> 
                              <input type="text" name="yorum_eposta" size="20" maxlength="150" value=""> 
                              </font>&nbsp;</td> 
                          </tr> 
                          <tr> 
                            <td  valign="top"><font color="#000000"><font size="-1">Yorumunuz</font></font></td> 
                            <td ><font size="-1"> 
                              <textarea name="yorum" cols="15" rows="20"></textarea> 
                              </font>&nbsp;</td> 
                          </tr> 
                          <tr bgcolor="#f4f4f4"> 
                            <td  valign="top">&nbsp;</td> 
                            <td  align="right"><input type="submit" name="action" value="Yorumu Gönder"></td> 
                          </tr> 
                        </table> 
                      </form> </center>
</td></table>
</td></table>
</td>
<td colspan="1" cellpadding="0" cellspacing="0" bgcolor="#f7f7f7" valign="top"><img src="images/partion3.jpg" usemap="#menu" border="0"></td>
</table>
</center>
<!-- end content -->