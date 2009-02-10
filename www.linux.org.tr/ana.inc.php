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
Linux, Internet �zerinden haberle�en �ok say�da
g�n�ll� programc�n�n deste�iyle Linus
Torvalds taraf�ndan ba�tan ba�lanarak geli�tirilmi� GNU/Linux i�letim
sisteminin �ekirde�idir. <a href="../linuxnedir.html">Daha fazla
bilgi...</a><br/>
            <strong>�zg�r
Yaz�l�m Nedir?</strong><br/>
Yaz�l�m �r�nlerinin ki�i, kurum ve kurulu�lardan
ba��ms�z olarak geli�tirilmesi, kullan�lmas�, da��t�lmas� ve
payla��lmas� anlay��� �zg�r yaz�l�m olarak
bilinmektedir. <a href="../linuxnedir.html">Daha
fazla bilgi...</a><br/>
            <strong>Nereden Linux
Bulabilirim?</strong><br/>
Linux, di�er bir�ok �zg�r yaz�l�m
�r�n� gibi �cretsiz olarak
edinilebilmektedir. �e�itli Linux da��t�mlar�n�n yans�lar�n�
Dosya Alani b�l�m�n� olu�turan FTP
sunucumuzda bulabilirsiniz. LKD'nin kat�ld��� �e�itli
fuarlarda, stand�m�zda Linux CD'leri bulabilirsiniz. Bunun yan� s�ra CD
satan yerlere de ba�vurabilirsiniz.<br/>
            <strong>Nereden Yard�m
Alabilirim?</strong><br/>
LKD, kar amac� g�tmeyen bir organizasyon oldu�undan bireysel
yada kurumsal Linux deste�i vermemektedir. Buna kar��n, herkesin Linux
ile ilgili �e�itli konulardaki sorular�n� sorarak yan�t
bulabilece�i e-posta listelerine ve �lkemizdeLinux konusunda
e�itim ve destek hizmeti veren firmalar�n bir listesine
ula�abilirsiniz. </td>
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
            <td style="vertical-align: top;"><img src="..//templates/resimler/firmalar/tbd_resim_02_02.gif" alt="Bili�im'06" align="left" border="0"></td>
            <td>23 y�ld�r �lke bili�im sorunlar�n�n tart���ld��� ve sekt�re b�y�k a��l�mlar ve vizyon �izen TBD Ulusal Bili�im Kurultay�'n� da i�inde bar�nd�ran  ve yeni yakla��mlarla zengin bir i�eri�e kavu�arak ana temas� "Ortak Ak�l" olarak belirlenen Bili�im'06 etkinli�imiz 8-10 Kas�m 2006 tarihlerinde Sheraton Kongre Merkezi ? Ankara'da ger�ekle�tirildi.<br>
            LKD olarak bizim de aktif kat�l�m sa�lad���m�z toplant�larda, �lke g�ndeminde bulunan konular g�r���ld� ve fikir al�� veri�lerinde bulunuldu.
            </td>
          </tr>

          <tr class="section">
            <td></td>
            <td></td>
          </tr>
          <tr class="section">
            <td><img src="..//templates/resimler/extras/lkd.png"
 alt="4. Linux ve &Ouml;zg&uuml;r Yaz�l�m �enli�i" align="left" border="0"></td>
            <td><strong>5.
Linux ve &Ouml;zg&uuml;r Yaz�l�m �enli�i</strong><br>
Her sene yap�lan ve bu sene be�incisi d&uuml;zenlenen "Linux ve
&Ouml;zg&uuml;r Yaz�l�m �enli�i" ODTU B�M'in katk�lar� ile 11-14 May�s
2006 tarihleri
aras�nda, ODTU Kongre ve K&uuml;lt&uuml;r Merkezinde yap�ld� [
            <a href="http://senlik.linux.org.tr">Ayr�nt�l� Bilgi</a>
]</td>
          </tr>
        </tbody>
      </table>
      -->
      <table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="border-collapse: collapse;">
        <tbody>
          <tr>
            <td height="20" class="ModulBaslik">�pucu</td>
          </tr>
          <tr>
            <td>
            <table cellpadding="0" border="0" width="100%">
              <tbody>
                <tr>
                  <td width="12" valign="middle"><img align="middle" src="..//templates/resimler/penguen_ipucu.png"/></td>
                  <td valign="top">LKD
                  <a href="http://liste.linux.org.tr" target="_blank">e-posta
ar�ivleri</a>nde arama yapmak
i�in soldaki arama kutusunu kullanabilirsiniz.</td>
                </tr>
              </tbody>
            </table>
            </td>
          </tr>
        </tbody>
      </table>

</td>
