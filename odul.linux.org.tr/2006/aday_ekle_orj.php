<?php
include "./tpl/header.php";
?>
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
 <tr bordercolor="#cccccc"> 
  <td bgcolor="#d6dde7"> <p></p> 
     <table align="center" border="0" cellpadding="4" cellspacing="1" width="96%"> 
      <tbody> 
         <tr> 
          <td valign="top" width="33%"> <table border="0" cellpadding="2" cellspacing="0"> 
              <tbody> 
                <tr> 
                  <td bgcolor="#466176" height="35" width="100%"><font color="white" size="2px"><strong>Y�l�n Penguenleri Aday G�sterme Formu</strong></font></td> 
                </tr> 
                <tr>
 	 	 <td height=2> </td>
                <tr>
                <tr> 
                  <td><center>
                      <table width="100%" cellpadding="2" cellspacing="0" border="0"> 
                       <tr>
                         <td class=uyari><font>L�tfen yeni bir aday g�stermeden �nce, ilgili dalda �nceki y�llarda �d�l alanlar� ve bu y�l g�sterilen adaylar� "<a href=goster.php?tip=kategori>�d�l Kategorileri</a>" sayfas�ndan kontrol etmeyi unutmay�n!</font></td>
                       <tr>
                       <tr>
			 <td height=2> </td>
                       <tr>
                      </table>
                      <form name="aday_eklef" action="aday_ekle2.php" method="post"> 
                        <table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF"> 
                          <tr bgcolor="#f4f4f4"> 
                            <td valign="top"><font color="#000000"><font size="-1">Aday g�stermek istedi�iniz ki�i, kurum veya i�erik </font>(Daha ayr�nt�l� bilgi i�in l�tfen �d�l kategorilerine bak�n�z.)</font></td> 
                            <td><font size="-1"> 
                              <input type="text" name="aday_adi" size="20" maxlength="100" value=""> 
                              </font>&nbsp;</td> 
                          </tr> 
                          <tr> 
                            <td valign="top"><font color="#000000"><font size="-1">Aday g�stermek istedi�iniz kategori</font></font></td> 
                            <td><?php chkb_gs($_GET['id']);?></td> 
                          </tr> 
                          <tr bgcolor="#f4f4f4"> 
                            <td  valign="top"><font color="#000000"><font size="-1">�neren ismi</font>&nbsp;(�neren olarak sizin veya kurumunuzun ad�n� yaz�n�z)</font></td> 
                            <td ><font size="-1"> 
                              <input type="text" name="oneren_adi" size="20" maxlength="100" value=""> 
                              </font>&nbsp;</td> 
                          </tr> 
                          <tr> 
                            <td  valign="top"><font color="#000000"><font size="-1">�neren e-posta adresi</font>&nbsp;(L�tfen size ula�abilmemiz i�in ge�erli bir e-posta adresi giriniz.) </font></td> 
                            <td ><font size="-1"> 
                              <input type="text" name="oneren_eposta" size="20" maxlength="150" value=""> 
                              </font>&nbsp;</td> 
                          </tr> 
                          <tr bgcolor="#f4f4f4"> 
                            <td  valign="top"><font color="#000000"><font size="-1">Aday�n�z i�in a��klay�c� bir metin giriniz, "Neden aday olmal�?" a��klay�n�z. </font></font></td> 
                            <td ><font size="-1"> 
                              <textarea name="oneri_metni" cols="15" rows="20"></textarea> 
                              </font>&nbsp;</td> 
                          </tr> 
                          <tr bgcolor="#f4f4f4"> 
                            <td  valign="top">&nbsp;</td> 
                            <td  align="right"><input type="submit" name="action" value="Aday �nerisini G�nder"></td> 
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
</td></table>
</td></table>
</td>
<td colspan="1" cellpadding="0" cellspacing="0" bgcolor="#f7f7f7" valign="top"><img src="images/partion3.jpg" usemap="#menu" border="0"></td>
</table>
</center>
<!-- end content -->
<?
include "./tpl/footer.php";
?>