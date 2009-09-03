<?php include("site_ust.php"); ?>

  <style type="text/css" media="screen">
    
    .listeler {
      font-size: 14px;
    }
    
    .listeler h2 {
      margin-top: 30px;
    }
    
    .listeler .baslik {
      margin-top: 5px;
      padding-left: 15px;
      margin-top: 40px;
      height: 40px;
      line-height: 40px;
      font-size: 150%;
      color: black;
      text-decoration: none;
      white-space: nowrap;
      overflow: hidden;
      background: url(resim/liste.jpg) no-repeat left top;
    }
    
    .listeler .baslik span {
      line-height: 40px;
      font-size: 11px;
      letter-spacing: -0.5px;
      color: gray;
    }
    
    .listeler .detay {
      padding: 10px;
      padding-bottom: 30px;
      margin-bottom: 10px;
    }
    
    .listeler .detay a {
      font-size: 12px;
      display: block;
      float: left;
      padding: 3px;
      padding-left: 20px;
      margin-right: 10px;
    }
    
    .listeler .detay a.gir {
      background: url(resim/listeye_ekle.png) no-repeat left top;
    }

    .listeler .detay a.cik {
      background: url(resim/listeden_cik.png) no-repeat left top;
    }
    .listeler .detay a.gmane {
      background: url(resim/gmane.png) no-repeat left top;    
    }

    .listeler hr {
      display: none;
    }
    
  </style>
  
  <h1 class="head2">LKD E-Posta Listeleri</h1>
  
  <div class="listeler">
    
    <div class="baslik">Duyuru <span>(lkd-duyuru@liste.linux.org.tr)</span></div>
    <div class="detay">
      Linux Kullanıcıları Derneği'nin yaptığı duyuruları içeren, düşük hacimli (ayda en fazla birkaç mesaj gelen), salt-okunur duyuru e-posta listesi.<br />
      <br />
      <a class="gir" href="mailto:lkd-duyuru-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:lkd-duyuru-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.duyuru">Web/RSS/NNTP ile Okuyun</a>
    </div>
    <hr>

    <div class="baslik">İnsan Kaynakları <span>(linux-ik@liste.linux.org.tr)</span></div>
    <div class="detay">
      Linux ve diğer özgür yazılımlar üzerine çalışacak eleman arayanlar duyuruları için bu e-posta listesini kullanabilirler.<br />
      <br />
      <a class="gir" href="mailto:linux-ik-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:linux-ik-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.insan-kaynaklari">Web/RSS/NNTP ile Okuyun</a>
    </div>
    <hr>
    
    <div class="baslik">Masaüstü <span>(linux-masaustu@liste.linux.org.tr)</span></div>
    <div class="detay">
      Linux'un masaüstünde kullanıma ilişkin konular ve uygulamalar (OpenOffice.org, Firefox, KDE, GNOME, Oyunlar, vs) bu listede konuşulur.<br />
      <br />
      <a class="gir" href="mailto:linux-masaustu-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:linux-masaustu-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.masaustu">Web/RSS/NNTP ile Okuyun</a>
    </div>
    <hr>
    
    <div class="baslik">Sunucu <span>(linux-sunucu@liste.linux.org.tr)</span></div>
    <div class="detay">
      Tüm sunucu servisleri (Apache, Postfix, MySQL, vb) ve sistem yönetimi ile ilgili konular konuşulur.<br />
      <br />
      <a class="gir" href="mailto:linux-sunucu-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:linux-sunucu-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.sunucu">Web/RSS/NNTP ile Okuyun</a>
    </div>
    <hr>
    
    <div class="baslik">Ağ <span>(linux-ag@liste.linux.org.tr)</span></div>
    <div class="detay">
      Ağ yönlendirme, güvenlik duvarı, proxy ve benzeri verinin taşınmasına ilişkin konular konuşulur. Sunucu/sistem yönetimi ile ilgili konular için ayrı bir linux-sunucu isimli listesi bulunuyor.<br />
      <br />
      <a class="gir" href="mailto:linux-ag-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:linux-ag-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.ag">Web/RSS/NNTP ile Okuyun</a>
    </div>
    <hr>
    
    <div class="baslik">Programlama <span>(linux-programlama@liste.linux.org.tr)</span></div>
    <div class="detay">
      Linux ve özgür yazılımlarla çeşitli dillerde yazılım geliştirme ile ilgili konular konuşulur.<br />
      <br />
      <a class="gir" href="mailto:linux-programlama-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:linux-programlama-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.programlama">Web/RSS/NNTP ile Okuyun</a>
    </div>
    <hr>
    
    <div class="baslik">Güvenlik <span>(linux-guvenlik@liste.linux.org.tr)</span></div>
    <div class="detay">
      Bilgi güvenligi ve özgür yazılım uygulamaları ile ilgili konular bu listenin kapsamına girmektedir.<br />
      <br />
      <a class="gir" href="mailto:linux-guvenlik-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:linux-guvenlik-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.guvenlik">Web/RSS/NNTP ile Okuyun</a>
    </div>
    <hr>
    
    <div class="baslik">Donanım <span>(linux-donanim@liste.linux.org.tr)</span></div>
    <div class="detay">
      Linux'taki donanım ile ilgili konuların konuşulabileceği bir listedir.<br />
      <br />
      <a class="gir" href="mailto:linux-donanim-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:linux-donanim-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.donanim">Web/RSS/NNTP ile Okuyun</a>
    </div>
    <hr>
    
    <div class="baslik">Yerelleştirme <span>(linux-yerellestirme@liste.linux.org.tr)</span></div>
    <div class="detay">
      Yerelleştirme ile ilgili tüm konuların konuşulabileceği bir e-posta listesidir.<br />
      <br />
      <a class="gir" href="mailto:linux-yerellestirme-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:linux-yerellestirme-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.yerellestirme">Web/RSS/NNTP ile Okuyun</a>
    </div>
    <hr>
    
    <div class="baslik">Çekirdek <span>(linux-cekirdek@liste.linux.org.tr)</span></div>
    <div class="detay">
      Linux çekirdeği ile ilgili konular konuşulur.<br />
      <br />
      <a class="gir" href="mailto:linux-cekirdek-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:linux-cekirdek-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.cekirdek">Web/RSS/NNTP ile Okuyun</a>
    </div>
    <hr>
    
    <div class="baslik">BSD <span>(bsd@liste.linux.org.tr)</span></div>
    <div class="detay">
      *BSD işletim sistemler ile ilgili konular konuşulur.<br />
      <br />
      <a class="gir" href="mailto:bsd-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:bsd-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.bsd">Web/RSS/NNTP ile Okuyun</a>
    </div>
    <hr>
    
    <div class="baslik">Kurulum <span>(linux-kurulum@liste.linux.org.tr)</span></div>
    <div class="detay">
      Listede, herhangi bir Linux dağıtımının kurulumu ile ilgili konular konuşulabilir. Ancak kurulumdan sonraki aşamalar için lütfen ilgili diğer listelere e-posta atınız.<br />
      <br />
      <a class="gir" href="mailto:linux-kurulum-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:linux-kurulum-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.kurulum">Web/RSS/NNTP ile Okuyun</a>
    </div>
    <hr>
    
    <div class="baslik">Sohbet <span>(linux-sohbet@liste.linux.org.tr)</span></div>
    <div class="detay">
      Linux ve özgür yazılım hakkında olmak koşuluyla, sınırsız tartışma ve haberleşme listesidir. Dünya üzerinde açık kaynak kod ile ilgili gelişmeler ve haberler gibi konular bu listenin kapsamına girmektedir.<br />
      <br />
      <a class="gir" href="mailto:linux-sohbet-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:linux-sohbet-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.sohbet">Web/RSS/NNTP ile Okuyun</a>
    </div>
    <hr>
    
    <div class="baslik">Linux <span>(linux@liste.linux.org.tr)</span></div>
    <div class="detay">
      Linux ve özgür yazılımlar ile ilgili diğer liste konularına girmeyen ve giriş seviyesinde olan her türlü konu konuşulabiliyor. Sohbet konusu olabilecek konular için ayrıca linux-sohbet listesi bulunmaktadır.<br />
      <br />
      <a class="gir" href="mailto:linux-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:linux-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.linux">Web/RSS/NNTP ile Okuyun</a>
    </div>
    <hr>

    <div class="baslik">Elektronik <span>(elektronik@liste.linux.org.tr)</span></div>
    <div class="detay">
Özgür yazılım temelli elektronik, otomasyon, robotik, gömülü sistemler konuları konuşulur.
<br />
      <br />
      <a class="gir" href="mailto:elektronik-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:elektronik-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.elektronik">Web/RSS/NNTP ile Okuyun</a>
    </div>
    <hr>
    
    <div class="baslik">Deneme <span>(deneme@liste.linux.org.tr)</span></div>
    <div class="detay">
      Deneme Listesi. Listeci ile ilgili denemelerinizi burada yapabilirsiniz.<br />
      <br />
      <a class="gir" href="mailto:deneme-request@liste.linux.org.tr?subject=subscribe">Üye olmak için buraya tıkayın</a>
      <a class="cik" href="mailto:deneme-request@liste.linux.org.tr?subject=unsubscribe">Listeden çıkmak için buraya tıklayın</a>
      <a class="gmane" href="http://dir.gmane.org/gmane.org.user-groups.linux.turkey.deneme">Web/RSS/NNTP ile Okuyun</a>
    </div>
    
  </div>


<?php include("site_alt.php"); ?>
