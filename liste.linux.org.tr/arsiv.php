<?php $title = "Liste Arşivleri"; ?>
<?php include("site_ust.php"); ?>

  <h1 class="head2">Liste Arşivleri</h1>
  <br />
  
  <div>
    <a href="http://listweb.bilkent.edu.tr/linux/">Aralık 1993- Agustos 2001 Linux Listesi</a><br />
    <br />
    <a href="http://listweb.bilkent.edu.tr/Linux/">Şubat 2002-Ekim 2004 - Tüm Linux Listeleri</a><br />
    <br />
    <br />
    Daha yeni arşiv için alttaki arama kutusundan arşivi tarayabilirsiniz.
  </div>
  
  <br />
  <br />
  <center>
    <form method="get" action="http://www.google.com/custom">
      <input type="hidden" name="cof" value="S:http://www.linux.org.tr;AH:center;LH:120;L:http://www.lkd.org.tr/images/r1c1.gif;LW:279;AWFID:addc628b01ef0105;">
      <input type="hidden" name="domains" value="liste.linux.org.tr">
      <a href="http://www.google.com/search"><img src="http://www.google.com/logos/Logo_40wht.gif" border="0" alt="google" align="middle"></a>
      <input type="text" name="q" size="31" maxlength="255" value="">
      <input type="submit" name="sa" value="Google İle Ara">
      <br />
      <input type="radio" name="sitesearch" value="liste.linux.org.tr" checked> LKD e-posta listelerinin yeni arşivlerinde ara<br />
      <input type="radio" name="sitesearch" value="listweb.bilkent.edu.tr"> LKD e-posta listelerinin eski arşivlerinde ara
    </form>
  </center>

<?php include("site_alt.php"); ?>