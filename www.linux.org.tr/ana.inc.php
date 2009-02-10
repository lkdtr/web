<td width="508" valign="top">
      <table cellspacing="0" cellpadding="5" border="0" width="100%">
        <tbody>


<tr><td>
 <table cellspacing="0" cellpadding="5" border="0" bgcolor="#fffde2" width="100%">
        <tbody>
        <tr>
            <td colspan="2" rowspan="1" class="section">
            <strong>Linux Nedir?
            </strong><br/>
Linux, Internet üzerinden haberleþen çok sayýda
gönüllü programcýnýn desteðiyle Linus
Torvalds tarafýndan baþtan baþlanarak geliþtirilmiþ GNU/Linux iþletim
sisteminin çekirdeðidir. <a href="../linuxnedir.html">Daha fazla
bilgi...</a><br/>
            <strong>Özgür
Yazýlým Nedir?</strong><br/>
Yazýlým ürünlerinin kiþi, kurum ve kuruluþlardan
baðýmsýz olarak geliþtirilmesi, kullanýlmasý, daðýtýlmasý ve
paylaþýlmasý anlayýþý özgür yazýlým olarak
bilinmektedir. <a href="../linuxnedir.html">Daha
fazla bilgi...</a><br/>
            <strong>Nereden Linux
Bulabilirim?</strong><br/>
Linux, diðer birçok özgür yazýlým
ürünü gibi ücretsiz olarak
edinilebilmektedir. Çeþitli Linux daðýtýmlarýnýn yansýlarýný
Dosya Alani bölümünü oluþturan FTP
sunucumuzda bulabilirsiniz. LKD'nin katýldýðý çeþitli
fuarlarda, standýmýzda Linux CD'leri bulabilirsiniz. Bunun yaný sýra CD
satan yerlere de baþvurabilirsiniz.<br/>
            <strong>Nereden Yardým
Alabilirim?</strong><br/>
LKD, kar amacý gütmeyen bir organizasyon olduðundan bireysel
yada kurumsal Linux desteði vermemektedir. Buna karþýn, herkesin Linux
ile ilgili çeþitli konulardaki sorularýný sorarak yanýt
bulabileceði e-posta listelerine ve ülkemizdeLinux konusunda
eðitim ve destek hizmeti veren firmalarýn bir listesine
ulaþabilirsiniz. </td>
          </tr>
        </tbody>
      </table>

</td></tr>


<tr><td style="font-size: 11px; text-align: justify;">
<?php
/* 
 ======================================================================
 lastRSS usage DEMO 2
 ----------------------------------------------------------------------
 This example shows, how to
     - create lastRSS object
    - set transparent cache
    - get RSS file from URL
    - access and show fields of the result
 ======================================================================
*/

// include lastRSS
include "./lastRSS.php";

// Create lastRSS object
$rss = new lastRSS;

// Set cache dir and cache time limit (1200 seconds)
// (don't forget to chmod cahce dir to 777 to allow writing)
$rss->cache_dir = './temp';
$rss->cache_time = 1200;

// Try to load and parse RSS file
if ($rs = $rss->get('http://haber.linux.org.tr/feed/')) {
    // Show website logo (if presented)
    if ($rs[image_url] != '') {
        echo "<a href=\"$rs[image_link]\"><img src=\"$rs[image_url]\" alt=\"$rs[image_title]\" vspace=\"1\" border=\"0\" /></a><br />\n";
        }
    // Show clickable website title
    echo "<big><b><a href=\"$rs[link]\">$rs[title]</a></b></big><br />\n";
       // Show website description
    echo "$rs[description]<br />\n";
    // Show last published articles (title, link, description)
    echo "<ul>\n";
    foreach($rs['items'] as $item) {
        echo "\t<li><a href=\"$item[link]\">".$item['title']."</a><br />".$item['description']."</li>\n";
        }
    echo "</ul>\n";
    }
else {
    echo "Error: It's not possible to reach RSS file...\n";
}
?> 


</td>
</tr>






          </tbody></table>


<br/><br/>


      <!--<table style="border-collapse: collapse; width: 100%;" border="0"
 cellpadding="3" cellspacing="0">


        <tbody>
          <tr>
            <td style="vertical-align: top;"><img src="..//templates/resimler/firmalar/tbd_resim_02_02.gif" alt="Biliþim'06" align="left" border="0"></td>
            <td>23 yýldýr ülke biliþim sorunlarýnýn tartýþýldýðý ve sektöre büyük açýlýmlar ve vizyon çizen TBD Ulusal Biliþim Kurultayý'ný da içinde barýndýran  ve yeni yaklaþýmlarla zengin bir içeriðe kavuþarak ana temasý "Ortak Akýl" olarak belirlenen Biliþim'06 etkinliðimiz 8-10 Kasým 2006 tarihlerinde Sheraton Kongre Merkezi ? Ankara'da gerçekleþtirildi.<br>
            LKD olarak bizim de aktif katýlým saðladýðýmýz toplantýlarda, ülke gündeminde bulunan konular görüþüldü ve fikir alýþ veriþlerinde bulunuldu.
            </td>
          </tr>

          <tr class="section">
            <td></td>
            <td></td>
          </tr>
          <tr class="section">
            <td><img src="..//templates/resimler/extras/lkd.png"
 alt="4. Linux ve &Ouml;zg&uuml;r Yazýlým þenliði" align="left" border="0"></td>
            <td><strong>5.
Linux ve &Ouml;zg&uuml;r Yazýlým þenliði</strong><br>
Her sene yapýlan ve bu sene beþincisi d&uuml;zenlenen "Linux ve
&Ouml;zg&uuml;r Yazýlým þenliði" ODTU BýM'in katkýlarý ile 11-14 Mayýs
2006 tarihleri
arasýnda, ODTU Kongre ve K&uuml;lt&uuml;r Merkezinde yapýldý [
            <a href="http://senlik.linux.org.tr">Ayrýntýlý Bilgi</a>
]</td>
          </tr>
        </tbody>
      </table>
      -->
      <table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="border-collapse: collapse;">
        <tbody>
          <tr>
            <td height="20" class="ModulBaslik">ýpucu</td>
          </tr>
          <tr>
            <td>
            <table cellpadding="0" border="0" width="100%">
              <tbody>
                <tr>
                  <td width="12" valign="middle"><img align="middle" src="..//templates/resimler/penguen_ipucu.png"/></td>
                  <td valign="top">LKD
                  <a href="http://liste.linux.org.tr" target="_blank">e-posta
arþivleri</a>nde arama yapmak
için soldaki arama kutusunu kullanabilirsiniz.</td>
                </tr>
              </tbody>
            </table>
            </td>
          </tr>
        </tbody>
      </table>

</td>
