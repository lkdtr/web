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
Linux, Internet üzerinden haberleşen çok sayıda
gönüllü programcının desteğiyle Linus
Torvalds tarafından baştan başlanarak geliştirilmiş GNU/Linux işletim
sisteminin çekirdeğidir. <a href="../linuxnedir.html">Daha fazla
bilgi...</a><br/>
            <strong>Özgür
Yazılım Nedir?</strong><br/>
Yazılım ürünlerinin kişi, kurum ve kuruluşlardan
bağımsız olarak geliştirilmesi, kullanılması, dağıtılması ve
paylaşılması anlayışı özgür yazılım olarak
bilinmektedir. <a href="../linuxnedir.html">Daha
fazla bilgi...</a><br/>
            <strong>Nereden Linux
Bulabilirim?</strong><br/>
Linux, diğer birçok özgür yazılım
ürünü gibi ücretsiz olarak
edinilebilmektedir. Çeşitli Linux dağıtımlarının yansılarını
Dosya Alanı bölümünü oluşturan FTP
sunucumuzda bulabilirsiniz. LKD'nin katıldığı çeşitli
fuarlarda, standımızda Linux CD'leri bulabilirsiniz. Bunun yanı sıra CD
satan yerlere de başvurabilirsiniz.<br/>
            <strong>Nereden Yardım
Alabilirim?</strong><br/>
LKD, kar amacı gütmeyen bir organizasyon olduğundan bireysel
yada kurumsal Linux desteği vermemektedir. Buna karşın, herkesin Linux
ile ilgili çeşitli konulardaki sorularını sorarak yanıt
bulabileceği e-posta listelerine ve ülkemizde Linux konusunda
eğitim ve destek hizmeti veren firmaların bir listesine
ulaşabilirsiniz. </td>
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
            <td style="vertical-align: top;"><img src="..//templates/resimler/firmalar/tbd_resim_02_02.gif" alt="Bilişim'06" align="left" border="0"></td>
            <td>23 yıldır ülke bilişim sorunlarının tartışıldığı ve sektöre büyük açılımlar ve vizyon çizen TBD Ulusal Bilişim Kurultayı'nı da içinde barındıran  ve yeni yaklaşımlarla zengin bir içeriğe kavuşarak ana teması "Ortak Akıl" olarak belirlenen Bilişim'06 etkinliğimiz 8-10 Kasım 2006 tarihlerinde Sheraton Kongre Merkezi ? Ankara'da gerçekleştirildi.<br>
            LKD olarak bizim de aktif katılım sağladığımız toplantılarda, ülke gündeminde bulunan konular görüşüldü ve fikir alış verişlerinde bulunuldu.
            </td>
          </tr>

          <tr class="section">
            <td></td>
            <td></td>
          </tr>
          <tr class="section">
            <td><img src="..//templates/resimler/extras/lkd.png"
 alt="4. Linux ve &Ouml;zg&uuml;r Yazılım şenliği" align="left" border="0"></td>
            <td><strong>5.
Linux ve &Ouml;zg&uuml;r Yazılım şenliği</strong><br>
Her sene yapılan ve bu sene beşincisi d&uuml;zenlenen "Linux ve
&Ouml;zg&uuml;r Yazılım şenliği" ODTU BıM'in katkıları ile 11-14 Mayıs
2006 tarihleri
arasında, ODTU Kongre ve K&uuml;lt&uuml;r Merkezinde yapıldı [
            <a href="http://senlik.linux.org.tr">Ayrıntılı Bilgi</a>
]</td>
          </tr>
        </tbody>
      </table>
      -->
      <table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="border-collapse: collapse;">
        <tbody>
          <tr>
            <td height="20" class="ModulBaslik">İpucu</td>
          </tr>
          <tr>
            <td>
            <table cellpadding="0" border="0" width="100%">
              <tbody>
                <tr>
                  <td width="12" valign="middle"><img align="middle" src="..//templates/resimler/penguen_ipucu.png"/></td>
                  <td valign="top">LKD
                  <a href="http://liste.linux.org.tr" target="_blank">e-posta
arşivleri</a>nde arama yapmak
için soldaki arama kutusunu kullanabilirsiniz.</td>
                </tr>
              </tbody>
            </table>
            </td>
          </tr>
        </tbody>
      </table>

</td>
