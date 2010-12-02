<?php $title = "Liste Arşivleri"; ?>
<?php include("site_ust.php"); ?>

  <h1 class="head2">Liste Arşivleri</h1>
  <br />
  
  <div>
    <ul>
     <li><a href="arsivler_1993-2001/">Aralık 1993 - Agustos 2001 Linux Listesi</a><br>&nbsp;</li>
     <li><a href="/arsivler_2002-2004/">Şubat 2002 - Ekim 2004 - Tüm Linux Listeleri</a><br>&nbsp;</li>
     <li><a href="/pipermail/">Ekim 2004 - Bugün</a><br /></li>
  </div>
  
  <br />
  <br />
    <form method="get" action="http://www.google.com/custom">
      <input type="hidden" name="cof" value="S:http://www.linux.org.tr;AH:center;LH:120;L:http://liste.linux.org.tr/resim/lkdlogo.png;LW:279;AWFID:addc628b01ef0105;">
      <input type="hidden" name="domains" value="liste.linux.org.tr">
      <input type="hidden" name="sitesearch" value="liste.linux.org.tr">
      <a href="http://www.google.com/search"><img src="http://www.google.com/logos/Logo_40wht.gif" border="0" alt="google" align="middle"></a>
      <input type="text" name="q" size="31" maxlength="255" value="">
      <input type="submit" name="sa" value="Google İle Ara">
    </form>

<?php include("site_alt.php"); ?>
