<!-- start content -->
<?php
$bg = yorum_bilgi($_GET['id']);
?>
 <tr bordercolor="#cccccc"> 
  <td bgcolor="#d6dde7"> <p></p> 
     <table align="center" border="0" cellpadding="4" cellspacing="1" width="96%"> 
      <tbody> 
         <tr> 
          <td valign="top" width="33%"> <table border="0" cellpadding="2" cellspacing="0"> 
              <tbody> 
                <tr> 
                  <td bgcolor="#466176" height="35" width="700"><font color="white" size="2px"><strong>Yorum Düzenleme Formu</strong></font></td> 
                </tr> 
                <tr> 
                  <td> </td> 
                </tr> 
                <tr> 
                  <td><center> 
                      <form name="yorum_eklef" action="duzenle3.php" method="post"> 
                        <table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF"> 
                          <tr bgcolor="#f4f4f4"> 
                            <td valign="top"><font color="#000000"><font size="-1">Hakkýnda yorum yapýlan penguen</font></font></td> 
                            <td><font size="-1"> 
                              <?=penguen_adi($bg['aday_id'])?>
                              </font>&nbsp;</td> 
                          </tr>
                          <tr> 
                            <td  valign="top"><font color="#000000"><font size="-1">Yorumu Yapan</font>&nbsp;</font></td> 
                            <td ><font size="-1"> 
                              <input type="text" name="yorum_adi" size="50" maxlength="100" value="<?=$bg['ekleyen_ad']?>">
                              </font>&nbsp;</td> 
                          </tr> 
                          <tr bgcolor="#f4f4f4"> 
                            <td  valign="top"><font color="#000000"><font size="-1">E-posta adresi</font>&nbsp;</font></td> 
                            <td ><font size="-1"> 
                              <input type="text" name="yorum_eposta" size="50" maxlength="150" value="<?=$bg['ekleyen_eposta']?>"> 
                              </font>&nbsp;</td> 
                          </tr> 
                          <tr> 
                            <td  valign="top"><font color="#000000"><font size="-1">Yorum</font></font></td> 
                            <td ><font size="-1"> 
                              <textarea name="yorum" cols="50" rows="20"><?=$bg['yorum']?></textarea> 
                              </font>&nbsp;</td> 
                          </tr> 
                          <tr bgcolor="#f4f4f4"> 
                            <td  valign="top">&nbsp;</td><input type="hidden" name="id" value="<?=$_GET['id']?>">
                            <td  align="right"><input type="submit" name="action" value="Gönder"></td> 
                          </tr> 
                        </table> 
                      </form> 
                    </center></td> 
                </tr> 
              </tbody> 
            </table></td> 
        </tr> 
       </tbody> 
    </table> 
     <p></p></td> 
</tr> 
<!-- end content --> 
