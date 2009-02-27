<?php
 function unhtmls($string){
  $string = str_replace ( '&amp;', '&', $string );
  $string = str_replace ( '&#039;', '\'', $string );
  $string = str_replace ( '&quot;', '"', $string );
  $string = str_replace ( '&lt;', '<', $string );
  $string = str_replace ( '&gt;', '>', $string );

  return $string;
 }
 
 function html($string){
  $string = str_replace ( '&', '&', $string );
  $string = str_replace ( '\'', '&#039;', $string );
  $string = str_replace ( '"', '&quot;', $string );
  $string = str_replace ( '<', '&lt;', $string );
  $string = str_replace ( '>', '&gt;', $string );
  
  return $string;
 }
 
 function baslik_resmi($yonetim){
  $resimler = array("head_01.png", "head_02.png");
  shuffle($resimler);
  
  for ($i = 0; $i < count($resimler); $i++) {
  if($yonetim == 1){$resim = "../images/".$resimler[$i];}
  else{$resim = "images/".$resimler[$i];}
  }
  echo "<img src=\"{$resim}\" border=\"0\" width=\"700\" height=\"201\">";
 }
 
 function as_kategori_listele(){
    $sql = @mysql_query("SELECT * FROM kategori");
    while($bg = @mysql_fetch_assoc($sql)){
     echo "<strong><a href=\"goster.php?tip=kategorib&amp;id={$bg['id']}\">{$bg['adi']}</a>:</strong> {$bg['aciklama']}<br /><br />\n";
    }
 }
 
 function kat_adi($id = ""){
  $sql = @mysql_query("SELECT adi FROM kategori WHERE id='{$id}'");
  $assoc = @mysql_fetch_assoc($sql);
  return $assoc['adi'];
 }
 
 function goster_kategori($id = ""){
    $sql = @mysql_query("SELECT * FROM kategori");
 	$sqla = @mysql_query("SELECT id,adi,aciklama FROM kategori WHERE id='{$id}'");
 	$sqlb = @mysql_query("SELECT id,ad_soyad FROM 2009_aday WHERE kategori='{$id}' AND durum='1' ORDER by 'ad_soyad' ASC");
 	$sqlc = @mysql_query("SELECT adi_soyadi,yil FROM kazananlar WHERE kat_id='{$id}' ORDER by 'yil' ASC");
 	
 	$bga = @mysql_fetch_assoc($sqla);
 	
 	if($_GET['tip'] == "kategori" || $id == "" || !isset($id)){
 	 while($bg = @mysql_fetch_assoc($sql)){
      echo "<strong><a href=\"goster.php?tip=kategorib&amp;id={$bg['id']}\">{$bg['adi']}</a>:</strong> {$bg['aciklama']}<br /><br />\n";
     }
 	}
 	
 	if($_GET['tip'] == "kategorib" AND isset($id)){
	?>
    <table align="center" border="0" cellpadding="4" cellspacing="1" width="96%">
      <tbody>
        <tr>
          <td valign="top" width="33%">
            <table border="0" cellpadding="2" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td bgcolor="#466176" height="35"><font color="white" size="2px"><strong><? echo $bga['adi']; ?> Kategorisi</strong></font></td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td class="menu"><font><?php echo $bga['aciklama']; ?></font></td>
                </tr>
              </tbody>
          </table></td>
        </tr>
      </tbody>
    </table>
    <table align="center" border="0" cellpadding="4" cellspacing="1" width="96%">
      <tbody>
        <tr>
          <td valign="top" width="33%">
            <table border="0" cellpadding="2" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td bgcolor="#466176" height="35"><font color="white" size="2px"><strong>Aday Penguenler</strong></font></td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <?php
                 while($bgb = @mysql_fetch_assoc($sqlb)){
                ?>
                <tr>
                  <td class="menu"><strong><font>*</font> <a href="goster.php?tip=aday&amp;id=<?=$bgb['id']?>"><?php echo $bgb['ad_soyad']; ?></a></strong></td>
                </tr>
                <?php
                }
                ?>
              </tbody>
          </table></td>
        </tr>
      </tbody>
    </table>
    <table align="center" border="0" cellpadding="4" cellspacing="1" width="96%">
      <tbody>
        <tr>
          <td valign="top" width="33%">
            <table border="0" cellpadding="2" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td bgcolor="#466176" height="35"><font color="white" size="2px"><strong>Geçen senelerde ödül alan penguenler</strong></font></td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <?php
                 while($bgc = @mysql_fetch_assoc($sqlc)){
                ?>
                <tr>
                  <td class="menu"><font>* <?php echo $bgc['adi_soyadi']." ({$bgc['yil']})"; ?></font></td>
                </tr>
                <?php
                }
                ?>
              </tbody>
          </table></td>
        </tr>
      </tbody>
    </table>
    <table align="center" border="0" cellpadding="4" cellspacing="1" width="96%">
      <tbody>
        <tr>
          <td valign="top" width="33%">
            <table border="0" cellpadding="2" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td bgcolor="#466176" height="35"><font color="white" size="2px"><strong>Aday göstermek istediğiniz penguenler mi var?</strong></font></td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td class="menu"><font>Eğer aday göstermek istediğiniz penguenler varsa, <strong><a href="aday_ekle.php?id=<?=$bga['id']?>">Aday Ekleme Formu</a></strong>'nu doldurarak aday listesine ekleyebilirsiniz.</font></td>
                </tr>
              </tbody>
          </table></td>
        </tr>
      </tbody>
    </table>
	<?php
 	}
 }
 
 function goster_aday_liste(){
  $sql = @mysql_query("SELECT id,adi FROM kategori");
  
  while($bgs = @mysql_fetch_assoc($sql)){
   $sqll = @mysql_query("SELECT * FROM 2009_aday WHERE kategori='{$bgs['id']}' AND durum='1' ORDER by 'ad_soyad' ASC");
   ?>
   <table align="center" border="0" cellpadding="4" cellspacing="1" width="96%">
      <tbody>
        <tr>
          <td valign="top" width="33%">
            <table border="0" cellpadding="2" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td bgcolor="#466176" height="35"><font color="white" size="2px"><strong><?=$bgs['adi']?> Adayları</strong></font></td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
   <?php
    while($bgz = @mysql_fetch_assoc($sqll)){
   ?>
                <tr>
                  <td class="menu"><strong><font>*</font> <a href="goster.php?tip=aday&amp;id=<?=$bgz['id']?>"><?php echo $bgz['ad_soyad']; ?></a></strong></td>
                </tr>
   <?php
    }
   ?>
              </tbody>
          </table></td>
        </tr>
      </tbody>
    </table>
   <?php
  }
 }
 
 function goster_aday($id = ""){
  $sql = @mysql_query("SELECT * FROM 2009_aday WHERE id='{$id}' AND durum='1'");
  $sqlw = @mysql_query("SELECT * FROM 2009_aday_yorum WHERE aday_id='{$id}' AND aktif='1'");
  
  while($bg = @mysql_fetch_assoc($sql)){
   ?>
    <table align="center" border="0" cellpadding="4" cellspacing="1" width="96%">
      <tbody>
        <tr>
          <td valign="top" width="33%">
            <table border="0" cellpadding="2" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td bgcolor="#466176" height="35" class="menu"><font color="white" size="2px"><strong><?=$bg['ad_soyad']?> (<?=kat_adi($bg['kategori'])?> Aday)</strong></font></td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td class="menu">
                  <font><?php echo unhtmls($bg['oneri_metni']); ?></font>
 <?php
  }
  
  echo "<hr size=\"7\" color=\"#466176\" /><strong><center><font size=\"2px\"><a href=\"yorum_ekle.php?id={$id}\">Yorum ekle</a></font></center></strong><br /><br />";
  echo "<strong><center><font size=\"3px\">Yorumlar</font></center></strong><hr size=\"5\" color=\"#466176\" />\n";
  
  while($bgl = @mysql_fetch_assoc($sqlw)){
  ?>
                  <strong><a href="mailto:<?php echo str_replace("@"," [at] ",$bgl['ekleyen_eposta']); ?>"><?=$bgl['ekleyen_ad']?></a>:</strong> <font><?php echo unhtmls($bgl['yorum']); ?></font>
                  <hr size="2" color="#466176" />
  <?php
  }
 ?>
                  </td>
                </tr>
              </tbody>
          </table></td>
        </tr>
      </tbody>
    </table>
  <?php
 }
 
 function chkb_gs($id = ""){
  $sql = mysql_query("SELECT * FROM kategori");
  while($blg = mysql_fetch_assoc($sql)){
   if($blg['id'] == $id){echo "<input type=\"radio\" name=\"kategori\" value=\"{$blg['id']}\" checked><font>{$blg['adi']}</font>\n<br \>";}
   else{echo "<input type=\"radio\" name=\"kategori\" value=\"{$blg['id']}\"><font>{$blg['adi']}</font>\n<br \>";}
  }
 }
 
 function aday_ekle($aday,$kategori,$oneren,$oneren_eposta,$oneri_metni){
  if(isset($aday) AND isset($kategori) AND isset($oneren) AND isset($oneren_eposta) AND isset($oneri_metni)){
   $sql = @mysql_query("INSERT INTO `2009_aday` (`id`,`ad_soyad`,`kategori`,`oneren_ad`,`oneren_eposta`,`oneri_metni`,`durum`) VALUES ('', '{$aday}', '{$kategori}', '{$oneren}', '{$oneren_eposta}', '".html($oneri_metni)."', '0')");
  }
  if($sql){$ok = "pl";}
  elseif(!$sql){$ok = "pll";}
  else{$ok = "pll";}
  
  if($sql){
   $m= new Mail;
   $m->From(SITEMAIL);
   $m->To (ADMINMAIL);
   $m->Subject ("Yılın Penguenleri Sitesi");
   $m->Body ("Merhaba\n\nLKD Yılın Penguenleri Ödülleri Sitesi'ne [1] yeni bir aday eklendi, ilgilenebilirsen [2] sevinirim.\n\n[1] http://odul.linux.org.tr/2006/\n[2] http://odul.linux.org.tr/2006/yonetim/\n\niyi çalışmalar");
   $m->Priority (1);
   $m->Send ();
  }
  
  return $ok;
 }
 
 function penguen_adi($id){
  $sql = @mysql_query("SELECT id,ad_soyad FROM 2009_aday WHERE id='{$id}'");
  while($b = @mysql_fetch_assoc($sql)){
   echo $b['ad_soyad'];
  }
 }
 
 function yorum_ekle($penguen,$yorum_adi,$yorum_eposta,$yorum){
  if(isset($penguen) AND isset($yorum_adi) AND isset($yorum_eposta) AND isset($yorum)){
   $sql = @mysql_query("INSERT INTO `2009_aday_yorum` (`id`,`aday_id`,`ekleyen_ad`,`ekleyen_eposta`,`yorum`,`tarih`,`aktif`) VALUES ('', '{$penguen}', '{$yorum_adi}', '{$yorum_eposta}', '".html($yorum)."', '', '0')");
  }
  if($sql){$ok = "pl";}
  elseif(!$sql){$ok = "pll";}
  else{$ok = "pll";}
  
  if($sql){
   $m= new Mail;
   $m->From(SITEMAIL);
   $m->To (ADMINMAIL);
   $m->Subject ("Yln Penguenleri Sitesi");
   $m->Body ("Merhaba\n\nLKD Yılın Penguenleri Ödülleri Sitesi'nde [1] yeni bir yorum eklendi, ilgilenebilirsen [2] sevinirim.\n\n[1] http://odul.linux.org.tr/2006/\n[2] http://odul.linux.org.tr/2006/yonetim/\n\niyi çalışmalar");
   $m->Priority (1);
   $m->Send ();
  }
  
  return $ok;
 }
 
 function onayla_yorum_liste(){
?>
   <table align="center" border="0" cellpadding="4" cellspacing="1" width="96%">
      <tbody>
        <tr>
          <td valign="top" width="33%">
            <table border="0" cellpadding="2" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td bgcolor="#466176" height="35"><font color="white" size="2px"><strong>Onaylanmayı bekleyen yorumlar</strong></font></td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td class="menu">
<?php
  $sqlw = @mysql_query("SELECT * FROM 2009_aday_yorum WHERE aktif='0'");
  
  while($bgl = @mysql_fetch_assoc($sqlw)){
  ?>
                  <strong><a href="mailto:<?php echo str_replace("@"," [at] ",$bgl['ekleyen_eposta']); ?>"><?=$bgl['ekleyen_ad']?></a>:</strong> <?php echo unhtmls($bgl['yorum']); ?>
                  <br \><br \><strong><a href="onayla.php?tip=yorumb&islem=1&id=<?=$bgl['id']?>" onclick="return confirm('Emin misiniz?');">onayla</a> | <a href="duzenle.php?tip=yorum&id=<?=$bgl['id']?>" onclick="return confirm('Emin misiniz?');">dzenle</a> | <a href="onayla.php?tip=yorumb&islem=0&id=<?=$bgl['id']?>"  onclick="return confirm('Emin misiniz?');">sil</a></strong>
                  <hr size="2" color="#466176" />
  <?php
  }
  ?>
                 </td>
                </tr>
              </tbody>
          </table></td>
        </tr>
        <tr>
          <td valign="top" width="33%">
            <table border="0" cellpadding="2" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td bgcolor="#466176" height="35"><font color="white" size="2px"><strong>Onaylanan (gösterimdeki) yorumlar</strong></font></td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td class="menu">
<?php
  $sqlw = @mysql_query("SELECT * FROM 2009_aday_yorum WHERE aktif='1' ORDER by 'id' ASC");
  
  while($bgl = @mysql_fetch_assoc($sqlw)){
  ?>
                  <strong><a href="mailto:<?php echo str_replace("@"," [at] ",$bgl['ekleyen_eposta']); ?>"><?=$bgl['ekleyen_ad']?></a>:</strong> <?php echo unhtmls($bgl['yorum']); ?>
                  <br \><br \><strong><a href="onayla.php?tip=yorumb&islem=2&id=<?=$bgl['id']?>" onclick="return confirm('Emin misiniz?');">beklemeye al</a> | <a href="duzenle.php?tip=yorum&id=<?=$bgl['id']?>" onclick="return confirm('Emin misiniz?');">dzenle</a> | <a href="onayla.php?tip=yorumb&islem=0&id=<?=$bgl['id']?>"  onclick="return confirm('Emin misiniz?');">sil</a></strong>
                  <hr size="2" color="#466176" />
  <?php
  }
  ?>
                 </td>
                </tr>
              </tbody>
          </table></td>
        </tr>
      </tbody>
    </table>
  <?php
 }
 
 function onayla_yorum($id,$islem){
  if($islem == 1){
   $sql = @mysql_query("UPDATE 2009_aday_yorum SET aktif='1' WHERE id='{$id}'");
   ?><meta http-equiv="refresh" content="0;URL=onayla.php?tip=yorum"><?
  }
  elseif($islem == 0){
   $sql = @mysql_query("DELETE FROM 2009_aday_yorum WHERE id='{$id}'");
   ?><meta http-equiv="refresh" content="0;URL=onayla.php?tip=yorum"><?
  }
  elseif($islem == 2){
   $sql = @mysql_query("UPDATE 2009_aday_yorum SET aktif='0' WHERE id='{$id}'");
   ?><meta http-equiv="refresh" content="0;URL=onayla.php?tip=yorum"><?
  }
  else{
   ?><meta http-equiv="refresh" content="0;URL=index.php"><?
  }
 }
 
 function onayla_aday_liste(){
?>
   <table align="center" border="0" cellpadding="4" cellspacing="1" width="96%">
      <tbody>
        <tr>
          <td valign="top" width="33%">
            <table border="0" cellpadding="2" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td bgcolor="#466176" height="35"><font color="white" size="2px"><strong>Onaylanmayı bekleyen adaylar</strong></font></td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td class="menu">
<?php
  $sqlw = @mysql_query("SELECT * FROM 2009_aday WHERE durum='0'");
  
  while($bgl = @mysql_fetch_assoc($sqlw)){
  ?>
                  <strong><?=$bgl['ad_soyad']?> adlı penguen "<a href="mailto:<?php echo str_replace("@"," [at] ",$bgl['oneren_eposta']); ?>"><?=$bgl['oneren_ad']?></a>" tarafndan "<?php echo kat_adi($bgl['kategori']); ?>" kategorisinde öneriliyor:</strong><br /> <?php echo unhtmls($bgl['oneri_metni']); ?>
                  <br \><br \><strong><a href="onayla.php?tip=adayb&islem=1&id=<?=$bgl['id']?>" onclick="return confirm('Emin misiniz?');">onayla</a> | <a href="duzenle.php?tip=aday&id=<?=$bgl['id']?>" onclick="return confirm('Emin misiniz?');">dzenle</a> | <a href="onayla.php?tip=adayb&islem=0&id=<?=$bgl['id']?>"  onclick="return confirm('Emin misiniz?');">sil</a></strong>
                  <hr size="2" color="#466176" />
  <?php
  }
  ?>
                 </td>
                </tr>
              </tbody>
          </table></td>
        </tr>
        <tr>
          <td valign="top" width="33%">
            <table border="0" cellpadding="2" cellspacing="0" width="100%">
              <tbody>
                <tr>
                  <td bgcolor="#466176" height="35"><font color="white" size="2px"><strong>Onaylanış (gösterimdeki) adaylar</strong></font></td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
                <tr>
                  <td class="menu">
<?php
  $sqlw = @mysql_query("SELECT * FROM 2009_aday WHERE durum='1' ORDER by 'ad_soyad' ASC");
  
  while($bgl = @mysql_fetch_assoc($sqlw)){
  ?>
                  <strong><?=$bgl['ad_soyad']?> adl penguen "<a href="mailto:<?php echo str_replace("@"," [at] ",$bgl['oneren_eposta']); ?>"><?=$bgl['oneren_ad']?></a>" tarafndan "<?php echo kat_adi($bgl['kategori']); ?>" kategorisinde �eriliyor:</strong><br /> <?php echo unhtmls($bgl['oneri_metni']); ?>
                  <br \><br \><strong><a href="onayla.php?tip=adayb&islem=2&id=<?=$bgl['id']?>" onclick="return confirm('Emin misiniz?');">beklemeye al</a> | <strong><a href="duzenle.php?tip=aday&id=<?=$bgl['id']?>" onclick="return confirm('Emin misiniz?');">dzenle</a> | <a href="onayla.php?tip=adayb&islem=0&id=<?=$bgl['id']?>"  onclick="return confirm('Emin misiniz?');">sil</a></strong>
                  <hr size="2" color="#466176" />
  <?php
  }
  ?>
                 </td>
                </tr>
              </tbody>
          </table></td>
        </tr>
      </tbody>
    </table>
  <?php
 }
 
 function onayla_aday($id,$islem){
  if($islem == 1){
   $sql = @mysql_query("UPDATE 2009_aday SET durum='1' WHERE id='{$id}'");
   ?><meta http-equiv="refresh" content="0;URL=onayla.php?tip=aday"><?
  }
  elseif($islem == 0){
   $sql = @mysql_query("DELETE FROM 2009_aday WHERE id='{$id}'");
   ?><meta http-equiv="refresh" content="0;URL=onayla.php?tip=aday"><?
  }
  elseif($islem == 2){
   $sql = @mysql_query("UPDATE 2009_aday SET durum='0' WHERE id='{$id}'");
   ?><meta http-equiv="refresh" content="0;URL=onayla.php?tip=aday"><?
  }
  else{
   ?><meta http-equiv="refresh" content="0;URL=index.php"><?
  }
 }
 
 function penguen_bilgi($id){
  $sql = @mysql_query("SELECT * FROM 2009_aday WHERE id='{$id}'");
  $assoc = @mysql_fetch_assoc($sql);
  return $assoc;
 }
 
 function yorum_bilgi($id){
  $sql = @mysql_query("SELECT * FROM 2009_aday_yorum WHERE id='{$id}'");
  $assoc = @mysql_fetch_assoc($sql);
  return $assoc;
 }
 
 function aday_duzenle($id,$aday,$kategori,$oneren,$oneren_eposta,$oneri_metni){
  if(isset($id) AND isset($aday) AND isset($kategori) AND isset($oneren) AND isset($oneren_eposta) AND isset($oneri_metni)){
   $sql = @mysql_query("UPDATE `2009_aday` SET `ad_soyad`='{$aday}', `kategori`='{$kategori}', `oneren_ad`='{$oneren}', `oneren_eposta`='{$oneren_eposta}', `durum`='0', `oneri_metni`='".html($oneri_metni)."' WHERE `id`='{$id}'");
  }
  
  if($sql){$ok = "pl";}
  elseif(!$sql){$ok = "pll";}
  else{$ok = "pll";}
  
  return $ok;
 }
 
 function yorum_duzenle($id,$yorum_adi,$yorum_eposta,$yorum){
  if(isset($id) AND isset($yorum_adi) AND isset($yorum_eposta) AND isset($yorum)){
   $sql = @mysql_query("UPDATE `2009_aday_yorum` SET `ekleyen_ad`='{$yorum_adi}', `ekleyen_eposta`='{$yorum_eposta}', `yorum`='".html($yorum)."', `aktif`='0' WHERE `id`='{$id}'");
  }
  
  if($sql){$ok = "pl";}
  elseif(!$sql){$ok = "pll";}
  else{$ok = "pll";}
  
  return $ok;
 }
?>
