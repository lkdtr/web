<?php $title = "E-Posta Listelerine Nasıl Kaydolurum?"; ?>
<?php include("site_ust.php"); ?>

  <h1 class="head2">E-Posta Listelerine Nasıl Kaydolurum?</h1>
  <br />
  
  <h2>A. Web Arayüzü</h2>
  <blockquote>
    <a href="http://liste.linux.org.tr/mailman/listinfo" target="_blank">http://liste.linux.org.tr/mailman/listinfo</a> adresinde, Linux Kullanıcıları Derneği'nin E-posta listelerinin bir listesini bulabilirsiniz. Üye olmak istediğiniz listeye tıklandığında gelen arayüzden listeye üye olabilir, liste üyeliklerinizi düzenleyebilir ya da üyelikten çıkabilirsiniz.
  </blockquote>
  <br />
  
  <h2>B. E-Posta Yoluyla</h2>
  <blockquote>
    Her listenin bir istek adresi vardır. <u>liste_adı-request@liste.linux.org.tr</u> adresine çeşitli komutlar gönderebilir, kullanıcı ve liste yöneticisi olarak çeşitli işlemler yapabilirsiniz. Kullanıcı olarak gönderdiğiniz komutlar, genelde sadece e-postanın gönderildiği adrese ilişkindir.<br />
    Örneğin, <u>deneme-request@liste.linux.org.tr</u> adresine, konu kısmında subscribe yazıp göndereceğiniz bir ileti ile o listeye üye olabilirsiniz.<br />
    <br />
    Listeci yazılımı konu satırını okur, ve orada geçerli bir komut varsa, geri kalan komutları okumaz. komutlar :<br />
    <br />
    <table border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td><b>Komut</b></td>
        <td><b>Açıklama</b></td>
      </tr>
      <tr>
        <td>lists</td>
        <td>Listelerin dökümü</td>
      </tr>
      <tr>
        <td>commands</td>
        <td>Komutların listesi</td>
      </tr>
      <tr>
        <td>help</td>
        <td>Yardım dosyası</td>
      </tr>
      <tr>
        <td>subscribe &lt;liste adı&gt;</td>
        <td>Listeadi listesine üye ol </td>
      </tr>
      <tr>
        <td>unsubscribe &lt;liste adı&gt;</td>
        <td>İlgili listeden çık</td>
      </tr>
    </table>
  </blockquote>

<?php include("site_alt.php"); ?>