<!-- start content -->
<?php
$bg = penguen_bilgi($_GET['id']);
?>
 <tr bordercolor="#cccccc"> 
  <td bgcolor="#d6dde7"> <p></p> 
     <table align="center" border="0" cellpadding="4" cellspacing="1" width="96%"> 
      <tbody> 
         <tr> 
          <td valign="top" width="33%"> <table border="0" cellpadding="2" cellspacing="0"> 
              <tbody> 
                <tr> 
                  <td bgcolor="#466176" height="35" width="700"><font color="white" size="2px"><strong>Aday Düzenleme Formu</strong></font></td> 
                </tr> 
                <tr>
 	 	 <td height=2> </td>
                <tr>
                <tr> 
                  <td><center>
                      <form name="aday_eklef" action="duzenle2.php" method="post"> 
                        <table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF"> 
                          <tr bgcolor="#f4f4f4"> 
                            <td valign="top"><font color="#000000"><font size="-1">Aday</font></font></td> 
                            <td><font size="-1"> 
                              <input type="text" name="aday_adi" size="50" maxlength="100" value="<?php penguen_adi($_GET['id']);?>"> 
                              </font>&nbsp;</td> 
                          </tr> 
                          <tr> 
                            <td valign="top"><font color="#000000"><font size="-1">Aday göstermek istediğiniz kategori</font></font></td> 
                            <td><?php chkb_gs($bg['kategori']);?></td> 
                          </tr> 
                          <tr bgcolor="#f4f4f4"> 
                            <td  valign="top"><font color="#000000"><font size="-1">Öneren ismi</font>&nbsp;(Öneren olarak sizin veya kurumunuzun adını yazınız)</font></td> 
                            <td ><font size="-1"> 
                              <input type="text" name="oneren_adi" size="50" maxlength="100" value="<?=$bg['oneren_ad']?>"> 
                              </font>&nbsp;</td> 
                          </tr> 
                          <tr> 
                            <td  valign="top"><font color="#000000"><font size="-1">Öneren e-posta adresi</font>&nbsp;</font></td> 
                            <td ><font size="-1"> 
                              <input type="text" name="oneren_eposta" size="50" maxlength="150" value="<?=$bg['oneren_eposta']?>"> 
                              </font>&nbsp;</td> 
                          </tr> 
                          <tr bgcolor="#f4f4f4"> 
                            <td  valign="top"><font color="#000000"><font size="-1">Öneri Metni</font></font></td> 
                            <td ><font size="-1"> 
                              <textarea name="oneri_metni" cols="50" rows="20"><?=$bg['oneri_metni']?></textarea> 
                              </font>&nbsp;</td> 
                          </tr> 
                          <tr bgcolor="#f4f4f4"> 
                            <td  valign="top">&nbsp;<input type="hidden" name="id" value="<?=$_GET['id']?>"></td>
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
