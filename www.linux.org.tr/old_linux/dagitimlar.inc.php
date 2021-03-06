<td width="508" valign="top">
<p />
<p />
<p />
<p />
    <table width="400" border="0" align="center">
      <tbody><tr>
	  <td colspan="2">
<P>

<P>

<P>

<P>
<H1 ALIGN="CENTER">Linux Dağıtımları Belgesi</H1>
<P ALIGN="CENTER"><STRONG>A. Murat Eren
<BR>(meren at pardus org tr
<BR><TT><A NAME="tex2html1"
  HREF="http://meren.org/">http://meren.org/</A></TT>)</STRONG></P>
<P ALIGN="CENTER"><STRONG>v1.1, 15.11.2008</STRONG></P>

<H3>Özet:</H3>
<DIV>
Bu belgede, çok kullanılan kimi Linux dağıtımları hakkında, özellikle
başlangıç son kullanıcılarının tercih yaparken önceden bir miktar
fikir sahibi olabilmeleri için bilgi verilmeye çalışılmıştır. Mümkün
olduğunca objektif kalmaya çalışılarak verilmiş bilgilerin ardından
yer yer bahsi geçen dağıtımları uzun süredir kullanan kişilerin, bu
dağıtımlar ile ilgili -taraflı :)- yorumlarına da yer verilmiştir.
Siz de yorumlarınızı belge geliştiricisine ulaştırarak potansiyel
kullanıcıların yön bulmasını kolaylaştırabilirsiniz.

<P>
</DIV>
<P>
<BR>

<H2><A NAME="SECTION00010000000000000000">
İçindekiler</A>
</H2>
<!--Table of İçindekiler-->

<UL>
<LI><A NAME="tex2html74"
  HREF="dagitimlar.html">1 Giriş</A>
<LI><A NAME="tex2html75"
  HREF="#SECTION00030000000000000000">2 Linux Dağıtımları</A>
<UL>
<LI><A NAME="tex2html76"
  HREF="#SECTION00031000000000000000">2.1 Arch Linux</A>
<UL>
<LI><A NAME="tex2html77"
  HREF="#SECTION00031100000000000000">2.1.1 Alper Kanat'ın Arch Linux Hakkındaki Yorumu</A>
</UL>
<LI><A NAME="tex2html78"
  HREF="#SECTION00032000000000000000">2.2 Debian</A>
<UL>
<LI><A NAME="tex2html79"
  HREF="#SECTION00032100000000000000">2.2.1 Enver Altın'ın Debian hakkındaki yorumu</A>
</UL>
<LI><A NAME="tex2html80"
  HREF="#SECTION00033000000000000000">2.3 Fedora</A>
<LI><A NAME="tex2html81"
  HREF="#SECTION00034000000000000000">2.4 Gentoo</A>
<UL>
<LI><A NAME="tex2html82"
  HREF="#SECTION00034100000000000000">2.4.1 S. Çağlar Onur'un Gentoo Hakkındaki Yorumu</A>
<LI><A NAME="tex2html83"
  HREF="#SECTION00034200000000000000">2.4.2 A. Murat Eren'in Gentoo Hakkındaki Yorumu</A>
</UL>
<LI><A NAME="tex2html84"
  HREF="#SECTION00035000000000000000">2.5 Gobolinux</A>
<UL>
<LI><A NAME="tex2html85"
  HREF="#SECTION00035100000000000000">2.5.1 Fatih Altınok'un Gobolinux Hakkındaki Yorumu</A>
</UL>
<LI><A NAME="tex2html86"
  HREF="#SECTION00036000000000000000">2.6 Mandrake</A>
<LI><A NAME="tex2html87"
  HREF="#SECTION00037000000000000000">2.7 Knoppix</A>
<LI><A NAME="tex2html88"
  HREF="#SECTION00038000000000000000">2.8 openSUSE</A>
<UL>
<LI><A NAME="tex2html89"
  HREF="#SECTION00038100000000000000">2.8.1 T. Koray Peksayar'ın openSuSe Hakkındaki Yorumu</A>
</UL>
<LI><A NAME="tex2html90"
  HREF="#SECTION00039000000000000000">2.9 Pardus</A>
<LI><A NAME="tex2html91"
  HREF="#SECTION000310000000000000000">2.10 Slackware</A>
<UL>
<LI><A NAME="tex2html92"
  HREF="#SECTION000310100000000000000">2.10.1 Doruk Fişek'in Slackware Hakkındaki Yorumu</A>
</UL>
<LI><A NAME="tex2html93"
  HREF="#SECTION000311000000000000000">2.11 Ubuntu</A>
<UL>
<LI><A NAME="tex2html94"
  HREF="#SECTION000311100000000000000">2.11.1 D. Uğur Karatay'ın Ubuntu Hakkındaki Yorumu</A>
</UL>
</UL>
<LI><A NAME="tex2html95"
  HREF="#SECTION00040000000000000000">3 Teşekkürler</A>
<LI><A NAME="tex2html96"
  HREF="#SECTION00050000000000000000">4 Yasal Açıklamalar</A>
<UL>
<LI><A NAME="tex2html97"
  HREF="#SECTION00051000000000000000">4.1 Telif Hakkı ve Lisans</A>
<LI><A NAME="tex2html98"
  HREF="#SECTION00052000000000000000">4.2 Feragatname</A>
</UL>
</UL>
<!--End of Table of İçindekiler-->

<P>

<H1><A NAME="SECTION00020000000000000000">
1 Giriş</A>
</H1>

<P>
Belgeye başlamadan önce GNU, GPL, Linux, Linux Dağıtımı gibi kavramların
üzerinden bir kez daha geçmek, kavramlardan aynı anlamlarını anladığımızdan
emin olmak ve muhtemel yanlış anlamışlıkları düzeltmek için iyi ve
gerekli bir yol.

<P>
<DL>
<DT><STRONG>GNU:</STRONG></DT>
<DD>GNU'nun açılımı, 'GNU is Not Unix'tir. Yani GNU, 'GNU, Unix
değildir' anlamına gelmekte olan özyinelemeli (recursive) bir kelimedir.
1984 yılında tamamen özgür yazılımların meydana getirdiği bir işletim
sistemi ve işletim sisteminin araçlarının geliştirilmesi çalışmasının
adıdır. GNU, özgür yazılım camiasının felsefesini ve görüşünü bünyesinde
barındıran bir akımdır.
</DD>
<DT><STRONG>GPL:</STRONG></DT>
<DD>Yazılan özgür yazılımların bir şemsiye altında toplanması
için 1985 yılında yine Stallman tarafından FSF (Free Software Foundation)
kuruldu, GPL (General Public Licence), GNU<A NAME="tex2html2"
  HREF="#foot320"><SUP>1</SUP></A> yazılımların özgürlüklerini korumak üzere FSF tarafından duyurulmuş
bir yazılım lisansıdır.
</DD>
<DT><STRONG>Linux:</STRONG></DT>
<DD>Linux, Linus Torvalds adında Finlandiya'lı bir bilgisyar
mühendisinin 1991 yılında Helsinki Üniversitesi'nde bir öğrenci iken
kişisel bilgisayarında kullanmak üzere geliştirmeye başladığı bir
işletim sistemi çekirdeğidir (işletim sisteminin çekirdeği, işletim
sisteminin beyni diye tabir edebileceğimiz kısmıdır). İnternet'te
yaptığı duyuru sonucunda tüm dünyadan bir çok programcının da desteği
ile hızla gelişmiş ve halen aynı destek ile gelişmekte olan açık kaynak
kodlu, özgür bir yazılımdır (Linux, Linus Torvalds tarafından &#34;Linuks&#34;
şeklinde telaffuz edilmektedir, ilgili ses dosyasına <A NAME="tex2html4"
  HREF="#foot321"><SUP>2</SUP></A> adresinden ulaşabilirsiniz.
</DD>
<DT><STRONG>Linux&nbsp;Dağıtımı:</STRONG></DT>
<DD>GNU yazılımlarını ve diğer özgür yazılımları
bir araya getiren ve tüm bunları bir Linux çekirdeği ile beraber toplu,
derlenmiş ve kurulumu kolay bir işletim sistemi olarak kullanıcılara
sunmayı amaçlamış olan yazılım birlikteliklerine denir.
</DD>
</DL>
GNU Felsefesi ve Linux İşletim Sistemi hakkında daha fazla bilgiye
<A NAME="tex2html6"
  HREF="#foot322"><SUP>3</SUP></A> adresinden ulaşabilirsiniz.

<P>
Dağıtımlar, kullanıcılara sundukları uygulamalar noktasında birbirlerinden
çok farklı değillerdir, nihayetinde hepsinin ortak gayesi kullanılabilir
olmak ve kullanıcı ihtiyaçlarına en iyi şekilde cevap verebilmektir.
Genel olarak aynı masaüstü yönetim yazılımları, aynı multimedia araçları
ve aynı ofis uygulamaları ile beraber gelirler. Onları birbirinden
ayıran temel özelliklerden en önemlileri yazılım kurulması, kaldırılması
ve sorgulanmasında kullandıkları paket yöneticileri, kurulum arayüzleri
ve dağıtım içerisine entegre ettikleri konfigürasyon araçları ve kullanıcıya
yaşattıkları hissiyattır. Bu bağlamda Linux ile yeni tanışan bir kullanıcının
&#34;hangi dağıtım?&#34; sorusuna çok net bir yanıt vermek
kolay değildir. Bu belge, hangi dağıtım ile Linux dünyasına adım atmanızı
tam olarak söylemeye çalışmak yerine dağıtımların belirgin özelliklerini
ön plana çıkarıp, kararınızı verme sürecinizde size dağıtımlar ile
iligili daha fazla görüş kazanırmayı amaçlamıştır.

<P>
Sorularınızı doğrudan belge geliştiricisine ya da katkıda bulunanlara
sorabileceğiniz sorabileceğiniz gibi, kolayca üye olabileceğiniz Linux
Kullanıcıları Derneği<A NAME="tex2html8"
  HREF="#foot323"><SUP>4</SUP></A> posta listelerine<A NAME="tex2html10"
  HREF="#foot324"><SUP>5</SUP></A> sormanız daha hızlı yanıt almanız için yerinde bir davranış olacaktır
:) Aynı listelerde, dağıtımları kullanırken rastladığınız diğer sorunlarınıza
da yanıt arayabilirsiniz.

<P>
Ayrıca bu belge en son güncellendiğinde en çok kullanılan ilk bir
kaç dağıtım DistroWatch verilerine göre şu şekilde idi: Ubuntu, openSUSE,
Fedora, Mint, PCLinuxOS, Debian, Mandriva.

<P>


<P>

<H1><A NAME="SECTION00030000000000000000">
2 Linux Dağıtımları</A>
</H1>

<P>

<H2><A NAME="SECTION00031000000000000000">
2.1 Arch Linux</A>
</H2>

<P>
<!-- MATH
 $\includegraphics{resim/archlinux}$
 -->
<IMG
 WIDTH="128" HEIGHT="101" ALIGN="BOTTOM" BORDER="0"
 src="<?php echo $path . $resimler . $dagitim ; ?>arch.png"
 >

<P>
Arch Linux basitlik ve hafiflik göz önünde bulundurularak geliştirilen
bir Linux dağıtımıdır. Burada 'basitlik', Arch geliştiricileri tarafından
'gerekli olmayan eklentiler ve değişiklikler olmaksızın' anlamına
gelmekte ve bu felsefe son kullanıcıdan ziyade geliştirici bakış açısını
yansıtmaktadır. Geliştirici ekibin Arch'ın dizaynı ile ilgili yaklaşımı
minimalizm, kod doğruluğu ve kod zerafeti çerçevesindedir. 

<P>
2002 yılının başlarından bu yana geliştirilmekte olan Arch Linux,
güncel halini birbirinden bağımsız sürümler ile kullanıcılara ulaştırmak
yerine günlük yeni paket ve güncelleme yayınları ile kullanıcılarının
sistemlerini paket yöneticisi yardımı ile güncel tutmalarını kolaylaştıran
bir yapı sunmaktadır.

<P>
Arch Linux son dönemlerde sayısı hızla artan, gayesi 'kullanıcı dostu'
olmak olan dağıtımlardan birisi değildir ve Linux ile yeni tanışacak
kişilerden ziyade uzun süredir Linux kullanan kişilere hitap etmektedir.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Hızlı, kararlı ve son derece güncel bir dağıtım, basit yapısı
ile kolay yönetilebilir, hızlı işleyen hata takip sistemi, iyi belgelendirme,
aktif topluluk. 
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Yalnızca İnternet'ten kurulum, grafiksiz kurulum arabirimi,
yapılandırma araçlarının olmayışı.
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>Pacman (pkg.tar.gz) 
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Bir çok ülkedeki yansıları ile yüksek erişilebilirlikte.
</DD>
</DL>

<P>

<h3><a class="dagitim" NAME="SECTION00031100000000000000">
2.1.1 Alper Kanat'ın Arch Linux Hakkındaki Yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
Arch Linux basit, kolay kurulabilir ve kullanılabilir bir Linux dağıtımıdır.
Herhangi bir dağıtımı taban olarak almamış ve sıfırdan geliştirilmiştir.
KISS (Keep It Simple, Stupid); yani her şeyin olabilecek en basit
ve &#34;güncel&#34; haliyle dağıtımda yer alması ana felsefedir.
Alışılagelmiş bir çok yapılandırma aracı Arch Linux'da bulunmamakta,
bunun yerine basit yapılandırma dosyalarında bir kaç satırı değiştirmek
yeterli olmaktadır. Dağıtımda, BSD'ye benzer açılış betikleri tercih
edilmektedir.
</BLOCKQUOTE><DL>
<DT><STRONG>Sürüm&nbsp;Yapısı:</STRONG></DT>
<DD>Diğer bir çok dağıtımın aksine Arch Linux, sürekli
devam edebilen bir yapıya sahiptir. Bunun anlamı, eğer güncellemeleri
takip ediyorsanız ve eğer yeni bir sürüm çıkarıldıysa, siz zaten o
sürüme sahipsiniz demektir. Her yeni sürümle birlikte sisteminizde
bir şeyler değiştirmek ya da baştan kurmak zorunda değilsiniz!
<BR>
<BR>
Dağıtıma ait &#34;core&#34; ve &#34;ftp&#34; olmak
üzere iki sürüm bulunmaktadır. Her ikisi de internet'ten kurulmak
ve güncellenmek üzere tasarlanmıştır. Bu nedenle &#34;core&#34;
sürümünün boyutu yaklaşık 290 MB'ken, &#34;ftp&#34; sürümünün
boyutu yaklaşık 140 MB'tır. Aralarındaki temel fark, içerdikleri paketler
ve sonrasındaki kurulumun nasıl olacağıdır (ki bu adım kullanıcıya
kalmaktadır). Son zamanlarda USB diskler üzerinde çalışabilen sürüm
üzerinde çalışmalar da devam etmektedir.
</DD>
<DT><STRONG>Paket&nbsp;Yönetim&nbsp;Sistemi:</STRONG></DT>
<DD>Arch Linux, pacman adı verilen bir paket
yöneticisine sahiptir. Dağıtıma ait depolar &#34;core&#34;,
&#34;extra&#34;, &#34;testing&#34;, &#34;unstable&#34;
ve &#34;community&#34; olarak ayrılmıştır. &#34;core&#34;
deposu Arch Linux CD'si ile kurabileceğiniz paketlerin bütününden
ibarettir. pacman ile yalnızca istenen depolardan paket kurulabilirken,
istenen paketlerin belli bir depodan indirilip sabitlenmesi de sağlanabilir.
Dağıtımdaki tüm paketler, i686 ve x86-64 mimarilerine göre derlenmiştir.
<BR>
<BR>
Arch Linux, sıklıkla Gentoo dağıtımına benzetilir. Bunun sebeplerinden
biri kullanıcı topluluğunun önemli bir kısmının Gentoo'dan gelmiş
olması olabilir. Oysa Gentoo ile arasında önemli farklılıklar da vardır.
Arch Linux'da yazılımlar, &#34;derlenmiş&#34; ve &#34;kaynak
kodundan&#34; derlenecek olmak üzere iki farklı şekilde kurulabilirler.
Resmi depolarda bulunan derlenmiş paketlerin yanısıra, AUR adı verilen
sistem sayesinde çok daha geniş bir yazılım yelpazesi de kullanıcıların
ellerinin altındadır. Resmi depolarda bulunan yazılımların bir özelliğini
beğenmediğinizde ya da eksik bulduğunuzda, ABS adı verilen bir diğer
sistem ile paket dosyalarını indirip çok kısa bir sürede istediğiniz
şekilde derleyip yeni paketler oluşturabiliyorsunuz.
<BR>
<BR>
Arch Linux paketleri gerçekte PKGBUILD adı verilen metin dosyalarının
ve paketi etkileyecek yama dosyalarının bulunduğu küçük yapılardır.
PKGBUILD dosyası oldukça basit bir yapıya sahiptir ve herhangi bir
kullanıcının son derece rahat paket hazırlamasına olanak verir. AUR'da
kullanıcılar, kendi PKGBUILD dosyalarını ve (varsa) yamaları içeren
sıkıştırılmış bir paketi sisteme yükleyerek diğer kullanıcılarla paylaşırlar.
Yine AUR'da paylaşılan bazı yazılımlar ile AUR'dan herhangi bir yazılımı
bağımlılıklarıyla birlikte indirip kurmak bir komuta indirgenebilmektedir.
</DD>
<DT><STRONG>Topluluk&nbsp;ve&nbsp;Belgelendirme:</STRONG></DT>
<DD>Arch Linux'un sitesinden erişilebilen
Wiki ve forumlar, son derece iyi ve güncel belgelere sahiptir. Topluluk
bu bakımdan Gentoo'dan sonra en aktif ikinci topluluk olarak anılmaktadır.
<BR>
<BR>Ülkemizde henüz kurulan Arch Linux Türkiye topluluğu<A NAME="tex2html12"
  HREF="#foot325"><SUP>6</SUP></A> özellikle Wiki'de, dağıtıma Türkçe belgeler kazandırmaya ve mümkün
olduğunda pacman vb. yazılımları çevirmeye çalışmaktadır.
</DD>
</DL>

<P>

<H2><A NAME="SECTION00032000000000000000">
2.2 Debian</A>
</H2>

<P>
<!-- MATH
 $\includegraphics{resim/debian}$
 -->
<IMG
 WIDTH="149" HEIGHT="182" ALIGN="BOTTOM" BORDER="0"
 src="<?php echo $path . $resimler . $dagitim ; ?>debian.png"
 >

<P>
Belki de Özgür Yazılım Hareketi'nin en saf öğelerinden biri olan Debian
GNU/Linux<A NAME="tex2html14"
  HREF="#foot326"><SUP>7</SUP></A>, 1993'de Ian Murdock tarafından ticari olmayan bir proje olarak başlatılmıştır
-ve hala da öyledir. Dünyanın her yanından binlerce geliştiricinin
katkıları ve kaliteli proje yönetimi ile oluşturulmaktadır.

<P>
Debian'ın kullanıcı karşısına 3 ana kol ile çıkmaktadır: &#34;kararlı&#34;,
&#34;test&#34; ve &#34;kararsız&#34;. Bir paketin
yeni bir versiyonu çıktığında, ilk önce &#34;kararsız (unstable)&#34;
deposu altına alınır. Sonra daha derinlemesine ve uzun süreli testlerden
geçirilmesi için &#34;test (testing)&#34; deposuna alınır.
Eğer paket ayrıntılı test aşamasından geçecek kararlılıkta ve uyumda
olduğuna karar verildiğinde &#34;kararlı (stable)&#34; deposuna
alınır. Bunun sonucu olarak Debian'ın stable deposu çok yüksek kararlılıkta
ve uyumda çalışan bir dağıtım sunar. Stable deposundaki yazılımlar
görev kritik uygulamalar ve sunucular için harika bir alternatifse
de genellikle yazılımların çok eski versiyonlarından oluştuğu için
son kullanıcılar tarafından tercih edilmezler. Son kullanıcılar yazılımlarını
daha çok testing ve unstable depolarından temin etmeyi tercih ederler.

<P>
Debian'ın ününün bir diğer nedeni ise DEB paket yöneticisi ve bu paket
yöneticisi üzerindeki apt yazılımıdır. apt ile Internet üzerindeki
depolardan istediğiniz bir uygulamanın tüm bağımlılıkları ile beraber
sisteminize kurulmasını sağlamanız son derece kolaydır. Ayrıca Debian'ın
tüm güncellemeleri de apt tarafından gerçekleştirilebilir. Debian'ın
depolarında yer vermediği (bunlar gerçekten çok az sayıdadır) yazılımlara
da apt yardımı ile resmi olmayan depolardan sahip olabilirsiniz.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>%100 özgür, çok iyi hata takip sistemi ve topluluk çözümleri,
stable sürümü çok iyi test edilmiş ve neredeyse %100 güvenli, apt
yardımıyla çok kolay program kurma.
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Grafiksiz kurulum arabirimi, güncel olmayan kararlı sürüm,
yetersiz konfigürasyon araçları.
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>DEB
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Bir çok ülkedeki yansıları ile yüksek erişilebilirlikte.
</DD>
</DL>

<P>

<h3><a class="dagitim" NAME="SECTION00032100000000000000">
2.2.1 Enver Altın'ın Debian hakkındaki yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
Bu dağıtımı kullanıyor olmamın önemli bazı nedenleri:
<BR></BLOCKQUOTE>
<P><DL>
<DT><STRONG>Genel&nbsp;amaçlı:</STRONG></DT>
<DD>Sunucu için ayrı, masaüstü için ayrı, gömülü sistemler
için ayrı sürümleri yok.
</DD>
<DT><STRONG>Kapsamlı:</STRONG></DT>
<DD>3 farklı Debian paket arşivi, her türden kullanıcıyı
tatmin edecek çok sayıda ve dikkatle paketlenmiş kullanıma hazır yazılım
içeriyor. 
</DD>
<DT><STRONG>Yetenekli:</STRONG></DT>
<DD>Dağıtımın sağlam, düzenli, yüksek performanslı ve
güvenilir kalabilmesini sağlayan çok sayıda araca sahip. Özgür: Debian
GNU/Linux projesi kar amacı gütmeyen bir dernek tarafından korunuyor
ve destekleniyor, fakat kişi-kurum-kuruluşların kararlarından bağımsız. 
</DD>
<DT><STRONG>Yaygın:</STRONG></DT>
<DD>En çok kullanılan birkaç dağıtımdan biri.
<BR>
<P>
</DD>
</DL><BLOCKQUOTE>
Bence Debian GNU/Linux projesinin diğer tüm dağıtım projelerinden
en büyük farkı; köklü, tam ve bütün bir özgür yazılım topluluğu projesi
olarak yoluna devam etmiş ve edecek olması. Debian hiçbir zaman kar
amacı güden bir şirket haline gelmeyecek, daima açık kaynak kodlu
özgür bir işletim sistemi olarak kalacak. Debian projesinin kurucusu
Ian Murdock'in da belirttiği gibi Debian projesi, projede aktif çalışan
binlerce geliştirici tarafından öylesine korunuyor ve destekleniyor
ki, durdurulması mümkün değil. Bu projeyi Debian yapan asıl gerçek,
dünyanın her yerinden katılan çok sayıda geliştiricinin yadsınamaz
motivasyonu ve birlikteliğidir.
<BR></BLOCKQUOTE>
<P>
<BLOCKQUOTE>Bir başka önemli yanı, dağıtımın güvenilir ve kararlılığının sağlanabilmesi
için 3 farklı koldan geliştiriliyor olması:
<BR></BLOCKQUOTE>
<P><DL>
<DT><STRONG>Stable:</STRONG></DT>
<DD>Sağlamlığını ve güvenilirliğini zaman içerisinde ispatlamış
ve uzun süre test edilmiş paketler Stable dağıtımı içerisinde yer
alır. Stable, genellikle güvenliğin önemli olduğu ve bakım maliyetlerinin
düşük olması gereken; kısaca çalışması ve unutulması gereken sistemler
(örneğin sunucular) üzerinde kullanılır. Stable dağıtımı içerisindeki
paketler, genellikle güncel değildir, biraz eskimişlerdir. Bu yazılımlarla
ilgili bir güvenlik güncelleştirmesi derhal yüksek önem derecesi ile
duyurulur; fakat yeni sürümlerine güncellenmez, yalnızca eski sürüm
içerisindeki hatalar giderilir. Stable sürüm genellikle 2 yada 3 yılda
bir, içerisindeki tüm paketler yeni sürümlerine güncellenmiş biçimde
duyurulur. 
</DD>
<DT><STRONG>Testing:</STRONG></DT>
<DD>Stable dağıtımına kıyasla bir hayli daha güncel bir
sürümdür, bu sürüm içerisine yerleştirilen paketler Debian geliştiricileri
ve diğer gönüllüler tarafından kısa bir süre (15 gün, 1 ay gibi) test
edilmişlerdir, temel fonksiyonlarının çalıştığı görülmüştür. Birçok
açıdan sağlamdır ve çoğunlukla sorunsuz çalışacaktır. Fakat bu sürüm
içerisindeki tüm paketlerin tamamıyla güvenilir oldukları söylenmez.
Testing sürümü içerisinde uzunca bir dönem test edilen ve tüm hataları
ayıklanabilen paketler, birkaç yıllık aralıklarla alınarak Stable
sürüm haline getirilir. Bence testing sürümü, genellikle gündelik
işleri bilgisayarla ilgili olmayan insanlar tarafından tercih edilmelidir. 
</DD>
<DT><STRONG>Unstable:</STRONG></DT>
<DD>Herhangi bir özgür yazılımın duyurulmuş olan en son
sürümüne ait derlenmiş ve kullanıma hazır paketi Unstable içerisinde
kolaylıkla bulabilirsiniz. Bu paketler genellikle 1 yada 2 kez birkaç
kişi tarafından test edilmişlerdir, çeşitli özellikleri düzgün çalışmıştır
ve bu sayede Unstable içerisine eklenmişlerdir. Fakat unstable içerisindeki
yazılımların kararlı olması beklenmez. Bir sonraki güncellemede çalışmayabilir,
hiç çalışmayabilir, çalışması sırasında çeşitli hatalar verebilir;
veya mucizevi biçimde (!) çalışabilir de. Belirtmeliyim ki bu metni,
1 yıldan uzun süre önce kurduğum ve (dizüstü bilgisayarıma taşımış
olduğum halde) şimdiye kadar pek de fazla sorun yaşamadığım unstable
sistemim üzerinde yazıyorum. Unstable sürüm içerisinde 15 gün, 1 ay
gibi bir süre ile test edilen paketler Testing sürümüne aktarılır
ve daha uzun bir test süreci için sürüm numarası sabitlenmiş olur.
Unstable sürüm IT profesyonelleri, yazılım geliştiriciler ve bu sistemleri
kurcalayıp bozmaktan zevk alan kişiler tarafından daha çok tercih
edilir.
<BR>
<P>
</DD>
</DL><BLOCKQUOTE>
Ayrıca experimental adında bir alt dağıtım daha Debian tarafından
oluşturulmakta, fakat bu alt dağıtım tam ve bütün bir sistem değil,
yalnızca bazı deneysel paketleri de içermesi amacıyla kullanılmakta.
<BR></BLOCKQUOTE>
<P>
<BLOCKQUOTE>Debian GNU/Linux projesi çeşitli teknik yönleri ile de diğer bazı
dağıtımlara kıyasla daha yeteneklidir:
<BR></BLOCKQUOTE>
<P><DL>
<DT><STRONG>Gelişkin&nbsp;paket&nbsp;yönetimi&nbsp;sistemi:</STRONG></DT>
<DD>APT (Advanced Package Tool)
ve DPKG (Debian Package Manager), sistemdeki paketler arasındaki bağımlılıkları,
olası sorunların çözülmesini ve sistemdeki tüm/bazı paketlerin güncellenmesini
mümkün olduğunca basit, otomatik, anlaşılır ve kolay hale getirir.
Fakat bu işlemi yaparken, örneğin kullanıcıların elle değiştirdikleri
yapılandırma dosyaları arasındaki farkları otomatik birleştirebilir,
eksik/yarım kurulmuş (genellikle böyle bir hata olmaz) paketleri düzeltebilir
ve paket ekleme/kaldırma işlemleri sırasında sistemin bütünlüğünü
ve çalışabilirliğini sağlamaya yardımcı olur. APT, bir süredir RedHat
tabanlı sistemlerde (SuSE, Fedora, Mandrake gibi) de APT-RPM yapısı
sayesinde kullanılmakta. 
</DD>
<DT><STRONG>Güncellik:</STRONG></DT>
<DD>Testing ve unstable sürümleri içerisindeki paketlerin
güncel sürümlerine ulaşabilmeleri için büyük çabalar sarfedilir. 
</DD>
<DT><STRONG>Zengin&nbsp;yazılım&nbsp;depoları:</STRONG></DT>
<DD>Testing içerisinde 30.000 civarında,
unstable içerisinde 70.000 civarında derlenmiş ve kullanıma hazır
durumda yazılım paketi bulunur. Debian dışındaki tüm dağıtımların
paket sayılarının toplamından fazla bir rakam olduğu açık sanırım.
Herhangi bir yazılımı, nispeten hızlı bir internet bağlantınız varsa
sisteminize kurmanız için genellikle birkaç dakika yeterlidir. Derlemek,
yapılandırmak gibi işlerle çoğunlukla uğraşmazsınız.
</DD>
<DT><STRONG>x86&nbsp;dışındaki&nbsp;platformlara&nbsp;destek:</STRONG></DT>
<DD>Debian GNU/Linux projesi
x86 sistemlerin yanı sıra hemen sayabileceğim m68k, alpha, ppc, ppc64,
AMD x86-64, sparc, sparc64 vb. gibi çok sayıda donanım mimarisine
de (en azından stable sürüm içerisinde) destek sağlar ve bu sistemler
üzerine de kolaylıkla kurulabilir.
</DD>
<DT><STRONG>Dikkatle&nbsp;hazırlanmış,&nbsp;kaliteli&nbsp;paketler:</STRONG></DT>
<DD>Tüm Debian paketleri,
önceden belirlenmiş çok sayıda kural ve kriterden geçmişlerdir, dikkatle
hazırlanmışlardır ve sistemin bütünlüğünü bozmazlar. apt-get install
postgresql komutunu verdiğinizde, Debian sisteminiz PostgreSQL sunucu
kurulumu için gerekli olan tüm diğer paketlerle birlikte PostgreSQL'i
sisteminize kurar, yapılandırır ve sizin için kullanıma hazır hale
getirerek PostgreSQL servisini başlatır. Çoğunlukla sadece izlersiniz.
Eğer paketlerin çalışabilmesi için bir yapılandırma gerekiyorsa, basit
diyaloglarla fikriniz alınır, bu şekilde isterseniz kuruluma müdahale
edebilirsiniz ancak çoğunlukla öntanımlı ayarlar sorunsuz çalışır.
Tüm Debian paketleri, az da olsa çeşitli belgelerle birlikte sisteme
kurulur (man/info sayfaları, HOWTO/README belgeleri veya hiçbiri yoksa
en azından ChangeLog dosyaları, o da yoksa paketi hazırlayan kişinin
tecrübelerini yazdığı çeşitli dosyalar mutlaka /usr/share/doc/paketadi
altında yer alır).
</DD>
<DT><STRONG>Güvenilir&nbsp;güncelleme&nbsp;prosedürü:</STRONG></DT>
<DD>apt-get dist-upgrade -u gibi
basit bir komutla, veya Synaptic gibi grafik arayüz yazılımlarıyla
birkaç tıklama ile tüm sisteminizi kolaylıkla güncelleyebilirsiniz.
Sisteminizi güncellediğinizde genellikle yeni sürüme güncellendikten
sonra (en azından testing ve stable için) yazılımlar sorunsuz çalışacaktır.
Eğer, örneğin PostgreSQL güncellemesinden sonra, bu sunucuya ait veritabanı
dosyalarının da yeni sürüme güncellenmesi gerekiyorsa, genellikle
bu işlem otomatik olarak yapılır veya nasıl yapılacağı açık biçimde
belirtilir. Güncelleme sırasında asla veri kaybedilmez...
<BR>
<P>
</DD>
</DL><BLOCKQUOTE>
Görsel arayüze sahip ve yeni başlayan kullanıcılara hitab edebilen
bir kurulum sistemine sahip olmayışımız bir dezavantaj, fakat bu sorunun
çözülebilmesi için bazı projeler üzerinde çalışılmakta. Sistem yapılandırma
araçları konusunda yetersizlik mevcut.
<BR></BLOCKQUOTE>
<P>
<BLOCKQUOTE>Debian içerisinde Debian projesi içerisinde geliştirilmiş olan yapılandırma
araçları yoktur. Debian, sistemdeki çeşitli yazılımların kurulum sırasında
otomatik olarak yapılandırılmasını sağlamaya çalışır, fakat, örneğin
PostgreSQL veya Apache için görsel bir yapılandırma aracı barındırmaz.
Eğer isterseniz, mesela Webmin'i apt-get install webmin komutu ile
kolaylıkla kurabilirsiniz. Bu gibi çok sayıda genel amaçlı yapılandırma
aracı Debian üzerinde sorunsuz çalışacaktır, fakat SuSE'deki YaST
veya RedHat'in yapılandırma araçları gibi renkli yazılımlar Debian'da
kullanılmaz.
<BR></BLOCKQUOTE>
<P>
<BLOCKQUOTE>Debian projesi bu yönüyle, sistemde neler olup bittiğini ve kurduğunuz
yazılımları nasıl kullanacağınızı bildiğinizi (yahut öğreneceğinizi)
varsayar. Kendi adıma bu konuda GNOME System Tools, Utopia projesi
gibi çeşitli projelerin zaman içerisinde bu açığı kapatacağını düşünüyorum.
<BR></BLOCKQUOTE>
<P>
<BLOCKQUOTE>Debian kullanmaya başlayabilmek için gerçekten bir engeller dizisi
olduğu doğrudur. Kurmayı beceremeyebilirsiniz, bazı donanımlarınızı
çalıştıramayabilirsiniz, yapılandırmayı beceremeyebilirsiniz, renkli
bir masaüstü ortamına geçmeyi beceremeyebilirsiniz, ekran çözünürlüğünüzü
değiştirmeyi yada farenizin tekerleğini aktif hale getirmeyi de beceremeyebilirsiniz.
Hepimiz bu yollardan geçtik. Öncelikle belirtmeliyim ki, gelecekte
bu sorunları yaşadığınız ve gördüğünüz için şanslı olduğunuzu düşüneceksiniz;
çünkü sizden sonraki &#34;yeni yetmeler&#34; bu sorunları
hiç görmemiş ve nasıl çözüldüğünü bilmiyor olacaklar, sizden daha
az tecrübe sahibi olacaklar.
<BR></BLOCKQUOTE>
<P>
<BLOCKQUOTE>Eğer sistemleri kurcalamayı ve karıştırmayı seviyorsanız, örneğin
RedHat veya SuSE gibi bir dağıtımı kendinize uydurmak için bir miktar
zaman harcamışsanız ve Debian'a geçmeyi düşünüyorsanız, belki kısa
bir süre Slackware veya Gentoo gibi dağıtımlarla oynamak isteyebilirsiniz.
Size yeterli altyapı sağlayacaktır.
<BR></BLOCKQUOTE>
<P>
<BLOCKQUOTE>Ama itiraf etmeliyim ki, bu iş gerçekten birazcık sabır ve çaba gerektirecek.
Hazır hissetmiyorsanız, daha kolay birşeyler deneyin. Buraya tekrar
gelmek için vaktiniz olacak.

</BLOCKQUOTE>

<P>

<H2><A NAME="SECTION00033000000000000000">
2.3 Fedora</A>
</H2>

<P>
<!-- MATH
 $\includegraphics{resim/fedora}$
 -->
<IMG
 WIDTH="144" HEIGHT="131" ALIGN="BOTTOM" BORDER="0"
 src="<?php echo $path . $resimler . $dagitim ; ?>fedora.png"
 >

<P>
Uzun bir süre bir çok kişiye Red Hat<A NAME="tex2html16"
  HREF="#foot327"><SUP>8</SUP></A>, Linux'u, Linux da Red Hat'ı çağrıştırmıştır. Bunu en büyük sebebi
Red Hat'ın dünya çapında en tanınmış Linux firmalarından birisi olmasıdır.
Red Hat Inc., 1995'te Bob Young ve Marc Ewing tarafından kurulmuştur.
Yakın zamana dek kâr amacı gütmeyen şirket, özellikle sağladığı teknik
destek ve Red Hat Enterprise ürünleriyle bu tavrını değiştirmiştir.
Red Hat Linux 9, Red Hat Linux ürün zincirinin son halkasıdır, 2003
yılına gelindiğinde Fedora Core sürümü onun yerini almıştır. Red Hat
tarafından resmi olarak desteklense de, Fedora<A NAME="tex2html18"
  HREF="#foot328"><SUP>9</SUP></A> özgür yazılım geliştiricilerinin katılımıyla varlığını sürdürmektedir,
ve aynı zamanada Red Hat Enterprise Linux ürünü için bir test ortamı
görevi görmektedir.

<P>
Red Hat Linux ve dolayısıyla Fedora Core'u özel yapan şey kararlı
ve bilinen paketlerin, sağlam bilgi ile biraraya getirilmesidir. Paketler
güncel değildir; güvenlik güncellemeleri dışında, yeni bir beta versiyon
çıktığında paket versiyonları dondurulmaktadır. Sonuç, iyi test edilmiş,
nispeten kararlı bir Linux dağıtımıdır. Bug rapor etme ve beta programlar
kullanıcılara açıktır ve çok sayıda e-posta listesi bulunmaktadır.
Bu özellikleriyle Red Hat Linux, dünya çapındaki sunucuların bir çoğunda
tercih edilmektedir. Ayrıca RPM paket yöneticisi, Red Hat'ın Linux'a
katkılarından birisidir ve Fedora da dağıtımların en çok tercih ettikleri
paket yöneticisi olan RPM üzerine inşa edilmiştir.

<P>
Fedora, Red Hat'ın enterprise olmasının ardından fork eden devamı
niteliğindeki bir dağıtım olarak özgür yazılım camiası tarafından
desteklenmekte ve gelişimine devam etmektedir. Red Hat'ın eski sürümlerine
nazaran daha unstable ve yeniliğe açık bir profil sergilemekte ve
son kullanıcılara Red Hat'ın eski haline nazaran daha fazla hitap
etme gayreti içerisindedir.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Geniş kullanım alanı, iyi topluluk desteği, yenilikler, yetersiz
olmayan yapılandırma araçları, yılların deneyimini miras almış olan
kararlı altyapı. 
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Nispeten kararsız, hatalarla karşılaşma olasılığı nispeten
yüksek, CD tabanlı dağıtım. 
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>RPM 
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Bir çok ülkedeki yansıları ile yüksek erişilebilirlikte. 
</DD>
</DL>

<P>

<H2><A NAME="SECTION00034000000000000000">
2.4 Gentoo</A>
</H2>

<P>
<!-- MATH
 $\includegraphics{resim/gentoo}$
 -->
<IMG
 WIDTH="147" HEIGHT="149" ALIGN="BOTTOM" BORDER="0"
 src="<?php echo $path . $resimler . $dagitim ; ?>gentoo.png"
 >

<P>
Gentoo Linux<A NAME="tex2html20"
  HREF="#foot329"><SUP>10</SUP></A>, eski bir Stampede Linux ve FreeBSD geliştiricisi olan Daniel Robbins
tarafından yaratılmıştır. FreeBSD'de bulunan otomatik kurulum sistemi
&#34;ports&#34;dan esinlenilerek, Gentoo altında &#34;portage&#34;
oluşturulmuştur. Bu konuda detaylı bilgi Daniel Robbins'in <A NAME="tex2html22"
  HREF="#foot330"><SUP>11</SUP></A> adresindeki &#34;Making the Distribution&#34; isimli yazısında
bulunabilir. Gentoo'nun ilk kararlı sürümü 2002 Mart'ında çıkarılmıştır. 

<P>
Gentoo Linux, kaynak kod temelli bir dağıtımdır. Kurulum ortamları,
önceden derlenmiş paketler sunsa da, Gentoo'nun dayanağı, kullanıcının
kaynak kodundan derleme ve kurulum yapmasıdır. Bunun en önemli avantajı,
kullanılan yazılımların, kullanıcının bilgisayarının mimarisine göre
optimize ediliyor olmasıdır. Ayrıca, kullanılan yazılımların üst versiyonlarına
güncellenmesi tek bir komutla sağlanacak kadar kolaydır. Çoğu Gentoo
kullanıcısı için, yazılımların tamamen güncel olması, hatta bazen
saatler içinde güncellenmesi büyük bir kolaylıktır. Diğer taraftan,
Gentoo'nun kurulması ve tamamen işlevsel, en yeni grafik arabirimlerine
sahip bir dağıtım haline getirilmesi, programlar kaynak koddan derlendiğinden
uzun bir süreçtir; hızlı bir işlemciye sahip bir bilgisayar için bile
birkaç gün sürebilmektedir.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Yazılım paketlerinin sorunsuz kurulumu, çok güncel olması,
çok iyi dokumantasyon, kullanıcının ihtiyaçlarına göre şekillendirilebilirlik,
çok iyi komunite desteği.
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Uzun süren sistem kurulumu ve güncellemeler, konfigürasyon
aracı yetersizliği, kurulumun zor olması, daha çok linux'u iyi bilen
ya da araştırmaktan yorulmayacak kullanıcılara hitap ediyor olması,
hızlı Internet erişimi gerektirmesi.
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>ebuild'ler ile portage yazılımları aracılığı ile kaynak
koddan derleme.
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Bir çok ülkedeki yansıları ile yüksek erişilebilirlikte.
</DD>
</DL>

<P>

<h3><a class="dagitim" NAME="SECTION00034100000000000000">
2.4.1 S. Çağlar Onur'un Gentoo Hakkındaki Yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
Gentoo Linux bir LFS projesidir, başka bir dağıtım tabanlı yapay bir
dağıtım değildir. İçinde barındırdığı yenilikler, getirdiği yeni kavramlar
ile tam bir Özgür Yazılım projesidir.Kar amacı gütmeyen bir organizasyon
olarak hayatına devam etmektedir. Yönetim yapısı ile bir dernek gibi
yönetilen, hiyerarşik bir düzen ile tabana dağılan ve her geliştirici/kulanıcının
fikirlerinin dinlendiği/uygulandığı bir yapıya sahiptir. Gentoo tamamen
internet'ten kurulan / güncellenen bir yapıya sahiptir. Bu sebep ile
belli zamanlarda diğer dağıtımların yaptığı gibi CD'ler ile güncellemek
/ sistemi yeniden kurmak gibi problemleri yoktur.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Gentoo'nun asıl amacı özelleştirilmiş (işlemci için, kullanım amacı
için, kullanıcı için), optimize edilmiş bir dağıtım olmaktır. Herşeyi
&#34;Portage Tree&#34; denilen paket kurulum dosyaları deposunu
kullanarak derler, ayarlar, sisteme kurar, kaldırır, kullanılan sisteme
özel optimize edilmiş hale getirir. Herşeyi derlemek istemeyen kullanıcılar
için 6 ayda bir çıkan düzenli binary paketler ile sistemi kurmak/güncellemek,
gentoo için üretilmiş binary dosyaları kullanmak, kurulu sistemden
binary paketleri almak bunları eşlenek mimarideki başka bir sisteme
kurmak kendilerinin diğer yetenekleri arasında sayılabilir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Gentoo Linux rahatlıkla özelleştirilebilmesi sebebi ile sunucu / masaüstü
her sistemde rahatlıkla kullanılabilir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Gentoo Linux çok farklı mimari [ alpha, amd64, arm, hppa, ia64,
macos, mips, ppc, ppc64, s390, sparc, x86, x86-obsd, x86-fbsd ] desteği
içerir. Bunların dışında MacOS, FreeBSD ve OpenBSD gibi platformlara
da &#34;Portage&#34; adı verilen paket yöenticisi ve paket
veritabanı desteği de verir. Gentoo Linux 38 farklı çekirdek arasından
seçimi gene kullanıcıya bırakır, kullanıcı istediği özelliklere sahip
çekirdeği seçer ve kurar [ kendi veya genkernel aracı ile ]. Sistem
altyapısını oluşturan paketler [ glibc, binutils, coreutils v.s
v.s ] özenle seçilir ve diğer paketler bu altyapıyı kullanarak üzerine
kurulur. Çekirdek tarafından desteği verilmeyen donanımlar için hazır
paketlere sahiptir. Nvidia, ATI yada benzeri ekran kartı sahiplerinin
sürücüleri, Intel Centrino'lar için kablosuz ağ sürücüleri gibi paketleri
kurmak Gentoo ile çocuk oyuncağıdır. Çünkü Gentoo bunları kurduktan
sonra sistemide bunlar için ayarlar.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Geniş paket veritabanındaki paketler önce unstable halde tutularak
sistem bütünlüğünü etkileyecek bir problem olup olmadığı test edilir.
Belirli bir zaman periyodunda kritik bir hata bildirimi olmazsa ve
paket sorunsuzca çalışıyorsa paket geliştiricisi tarafından kararlı
halde kuruluma hazır olarak işaretlenir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Paket kurulması/kaldırılması/güncellenmesi için &#34;emerge&#34;
adı verilen araç kullanılır. Emerge paket bağımlılıklarını çözer,
sisteme paketlerin hangi sıra ile kurulacağını bilir, paket veritabanında
arama yapabilir. Yani siz yeni kurulmuş bir sistemde &#34;emerge
kde&#34; derseniz, Gentoo bağımlılık sırasına göre X'i kurmak
için gerekli kütüphaneleri/yazılımları kurar, bunların üzerine X'i
kurar sonrada kde'yi kurar. Her paket &#34;USE&#34; bayrakları
denilen parametreler ile özelleştirilebilir. Örneğin bluetooth desteği
olmayan bir bilgisayarda her pakete bluetooth desteği vermek gereksizdir
çünkü o özellikler asla kullanılmayacaktır yada destekleyen her pakete
SSL desteği vermek böylece SSL kütüphanelerinin metodlarının kullanılması
istenebilir. Böyle durumlarda &#34;USE&#34; bayrakları ile
sisteme kurulacak paketlerin hangi destekleri içereceği dinamik olarak
belirlenebilir/değiştirilebilir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Sisteme paketler &#34;emerge paketadı&#34; ile kurulup &#34;emerge
unmerge paketadı&#34; ile kaldırılabilir. Kurulum sırasında bağımlılıklar
otomatik olarak çözülür ve gerekli diğer paketler sisteme kurulur.
&#34;emerge sync&#34; ile &#34;Portage Tree&#34;
adı verilen paketveritabanı rsync kullanılarak Gentoo sunucuları ile
senkronlanabilir. &#34;emerge -Du system&#34; ile sistemdeki
kütüphaneler gibi sistem altyapısını içeren paketler güncellenebilir.
&#34;emerge -Du world&#34; ile sistemdeki kurulu tüm paketler
güncellenebilir. Aynı Debian'daki gibi güncelleme sonrasında yapılması
gereken işlemler var ise Gentoo bunları ya otomatik yapar ya da kullanıcıyı
gerekli işlemleri yapması için uyarır. Güncelleme sonrası ayar dosyalarındaki
değişiklikleri etc-update yada dispatch-conf adı verilen araçlar ile
kullanıcıya gösterir, değişiklikleri yaptırır. &#34;emerge&#34;
aracını konsoldan kullanmak istemeyenler için çok farklı, çeşit çeşit
arayüzler mevcuttur.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Sadece güvenlik güncellemelerinin yapılması diğer versiyon güncellemesi/yeni
özellik güncellemelerinin yapılmaması için &#34;glsa_check&#34;
komut kullanılabilir. &#34;glsa_check&#34; sistemi bilinen
güvenlik problemleri için test eder ve sistemi etkileyen paketleri
günceller.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Gentoo kurulum sırasında henüz bir kurulum arayüzüne sahip değildir.
Fakat Gentoo sahip olduğu mevcut projeler arasında, kurulum sihirbazıda
yer almaktadır. Bunun dışında &#34;catalyst&#34; denilen
aracı ile kullanıcıların kendi dağıtımlarını kendilerinin oluşturmasına
olanak verir. Aynı araç ile dağıtım dışında Gentoo tabanlı LiveCD
üretmek içinde kullanılabilir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Gentoo yeni başlayan kullanıcılar için kurulum sırasında pek dost
değildir. Ayrıca genel olarak Gentoo'daki paket derleme süreçleri
temel kullanıcılar için iyi bir yöntem olmayabilir. Fakat Gentoo optimizasyonları,
özelleştirilebilmesi, içinde barındırdığı araçlar ile ne yaptığını
bilen, tecrübeli kullanıcıya çok şey katacak bir dağıtımdır. Gentıı
yeni/eski kullanıcıları için sahip olduğu geniş dökümantasyonu, e-posta
listeleri, forumlarında aranılanı bulamamak/yardım alamamak diye bir
kavrama sahip değildir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Sonuç olarak yeni başlayan tecrübesiz kullanıcıların CD'yi al, tak,
tıkla, kur dağıtımı Gentoo değildir. Gentoo yeni başlayan kullanıcıların
&#34;kolay kullanılan&#34; dağıtımıdır, &#34;kolay
kurulan&#34; değil. Sahip olduğu paket ve sistem yönetim araçları,
dökümanları ve gönüllü kitlesi ile Gentoo geleceğin yeni nesil dağıtımı
olmuştur. Yeni kullanıcı için mevcut tek zorluk Gentoo kurmaktır,
Gentoo bir kere kurulduktan sonra güncellemesi, paket kurması yeni
başlayan ve tecrübesiz bir kullanıcı için sorun olmayacak hatta son
kullanıcıya zevkli gelecektir. Tecrübesiz kullanıcı Gentoo kullandıkça
başka hiçbir dağıtımı kullanarak elde edemeyeceği bilgi ve tecrübeye
kavuşacaktır.

</BLOCKQUOTE>

<P>

<h3><a class="dagitim" NAME="SECTION00034200000000000000">
2.4.2 A. Murat Eren'in Gentoo Hakkındaki Yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
Gentoo'nun sunduğu yeni nesi paket derleme ortamının yanında Linux
kullanıcılarına sunduğu en büyük nimetlerden birisi yarattığı bilgi
ambarıdır. Gentoo'nun offical forumları<A NAME="tex2html24"
  HREF="#foot331"><SUP>12</SUP></A> sadece Gentoo değil tüm Linux kullanıcıları için mükemmel bir bilgi
kaynağıdır. Çok spesifik dahi olsa rastladığınız bir sorunun çözümünü
bu forumlarda bulmanız işten bile değildir. Aynı zamanda sadece bu
forumlarda dolaşıp tips&amp;tricks formatındaki forum yazılarını okumak
ya da daha önceden yapılmış anketler ve bunlarla ilgili yorumları
okumak dahi son derece eğitici ve keyiflidir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Öte yandan Gentoo diğer Linux dağıtımlarının hiç yakalayamadığı bir
yardımlaşma ağını, bir komünite beraberliğini yakalamıştır. <A NAME="tex2html26"
  HREF="#foot332"><SUP>13</SUP></A> adresinden bir listesine göz atabileceğiniz irc kanallarından #gentoo
kanalı her an ortalama 800 kişidir, ve sorduğunuz bir soruya çok hızlı
yanıt alabilirsiniz.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Aynı zamanda e-posta listeleri de son derece aktiftir. Öyle ki <A NAME="tex2html28"
  HREF="#foot333"><SUP>14</SUP></A> adresinden göz atabileceğiniz e-posta listelerinin kullanıcılar için
olanında günde ortalama N adet mesaj dönmektedir, öyle ki ``N &gt;&gt;200''.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Çağlar'ın da yorumunda üstü kapalı olarak belirttiği gibi Gentoo Linux
ile tanışmak için çok iyi bir alternatif olmayabilir, fakat Gentoo
bilgi ve tecrübe kazanmanız için size en iyi platformu sunar.

</BLOCKQUOTE>

<P>

<H2><A NAME="SECTION00035000000000000000">
2.5 Gobolinux</A>
</H2>

<P>
<!-- MATH
 $\includegraphics{resim/gobolinux}$
 -->
<IMG
 WIDTH="96" HEIGHT="83" ALIGN="BOTTOM" BORDER="0"
 src="<?php echo $path . $resimler . $dagitim ; ?>gobo.png"
 >

<P>
GoboLinux masaüstü kullanıcılar için tasarlanmış, kurulumu ve kullanımı
kolay bir dağıtımdır. GoboLinux'u diğer dağıtımlardan ayıran en temel
yanı yenilikçi dizin yapısıdır. Klasik UNIX tarzı dizin ağacının aksine
Gobo'da her uygulama kendi dizinine sahip olur. Bu, yeni kullanıcılar
için görünürde pek bir şey değiştirmese de daha kararlı ve kolay anlaşılır
bir dizin yapısı sunmaktadır.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Hem yeni hem de deneyimli kullanıcılar için rahat, farklı
dizin yapısı ve başlangıç betikleri sayesinde kolay yönetilir.
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Çok popüler bir dağıtım olmadığı için derlenmiş paket ve
yardım belgesi eksiklikleri. 
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>InstallPackage, Compile (tar.gz) 
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Birçok ülkedeki yansıları sayesinde yüksek erişilebilirlikte.
</DD>
</DL>

<P>

<h3><a class="dagitim" NAME="SECTION00035100000000000000">
2.5.1 Fatih Altınok'un Gobolinux Hakkındaki Yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
GoboLinux'un dizin yapısında uygulamalar kendi dizinlerine sahiptir.
Böylece bir uygulama yüklemek kadar kaldırmak da herhangi bir dosyayı
silmek kadar kolaydır. Peki eski dizin yapısına ne oldu, bu sistem
nasıl çalışıyor? Aslında bunun cevabı oldukça basit, simgesel bağlar.
Eski dizin yapısı da bu dizin yapısının yanında durmakta -GoboHide
çekirdek modülü sayesinde bunlar gizleniyor- ve gerekli yerlere simgesel
bağlar bulunmaktadır. Bu sayede aynı zamanda Gobo'yu köksüz (rootless)
olarak bir ev dizini altına kurmak da gayet basittir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>GoboLinux'un dizin yapısı sayesinde paket yöneticisine daha az iş
düşmektedir. Her uygulama kendi dizininde bulunduğu için bunları doğru
yerlere açmak ve yerlerinin izini takip etmek zorunda değildir. Bir
paket kaldırılacağı zaman da basitçe uygulamanın dizini silinir ve
simgesel bağlar onarılır. Paket yöneticisi ayrıca FreeBSD ve Gentoo'dakine
benzer bir &#34;port&#34; sistemi kullanabilmektedir, tarif
(recipe) denilen paket derleme tariflerini kullanarak paketleri proje
sayfasından indirdiği kaynak koddan da derleyebilir (son sürümüyle
paket yöneticisine Gentoo benzeri bir USE bayrağı (USE flag) sistemi
de eklendi).
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Son kullanıcılar için bunlar çok önemli rol oynamıyor tabii. GoboLinux
grafiksel kurulum aracıyla, KDE masaüstüyle ve yine grafiksel bir
paket yönetici önyüzüyle geliyor. Daha fazla bilgi için tarafından
Türkçeleştirilmiş GoboLinux.org'u inceleyebilirsiniz.

</BLOCKQUOTE>

<P>

<H2><A NAME="SECTION00036000000000000000">
2.6 Mandrake</A>
</H2>

<P>
<!-- MATH
 $\includegraphics{resim/mandrake}$
 -->
<IMG
 WIDTH="145" HEIGHT="94" ALIGN="BOTTOM" BORDER="0"
 src="<?php echo $path . $resimler . $dagitim ; ?>mandrake.png"
 >

<P>
1998 Temmuz'unda ilk sürümü çıkan, Gaël Duval tarafından başlatılan
Mandrakelinux projesi<A NAME="tex2html30"
  HREF="#foot334"><SUP>15</SUP></A>, günümüzde ciddi bir popülariteye sahiptir. Geliştiriciler, Red Hat
dağıtımından yola çıkmış, varsayılan masaüstünü KDE'ye çevirmiş, kullanımı
çok kolay bir kurulum ekleyerek &#34;Linux'un kurulumu zordur&#34;
düşüncesini bertaraf etmişlerdir. Mandrake'nin donanım tanıma ve disk
bölümleme araçları, çoğu kişi tarafından piyasanın en iyisi olarak
görülmekte, ve bu nedenle birçok kullanıcı, diğer dağıtımlardan çok
Mandrake'ye yönelmektedir.

<P>
Mandrakelinux, özellikle Linux'a yeni başlayan, ya da alternatif bir
işletim sistemi denemek isteyen ev kullanıcıları arasında oldukça
popülerdir. Mandrake, tamamen özgür ve şeffaf bir geliştirme ortamı
sunmaktadır. Günlük olarak güncellenen &#34;cooker&#34;
depolarında yazılımların güncel paketleri bulmak mümkündür.

<P>
Mandrake yüksek oranda güncel bir Linux dağıtımıdır. Bunun ters bir
etkisi olarak, kullanıcılar diğer dağıtımlara nazaran daha fazla hata
ile karşılaşabilmekte, sistemin kararlılık oranı da diğer dağıtımlara
göre daha düşük olabilmektedir. Çoğu kullanıcı, en son sürüm programları
kullanmak adına, bazı olası program kilitlenmelerini, ve ufak hataları
kendi masaüstü sistemlerinde kabul etmektedirler.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Kullanıcı dostu kurulum arayüzü, grafik destekli ve başarılı
konfigürasyon araçları, çok büyük topluluk desteği, kullanıcı dostu
masaüstü görünümü, grafik açıdan etkileyici arayüz, yazılımlara son
kullanıcı ihtiyaçları ön planda tutularak yapılan yamalar. 
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Sürümlerinde bolca hata ile karşılaşılabilmesi, sürümlerin
önce MandrakeClub üyelerine sunulması, yazılımlara çok fazla test
edilmeden yapılan yamalar. 
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>RPM 
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Yeni sürüm çıktıktan hemen sonra FTP kurulumuna sunuluyor,
birkaç hafta içinde ISO'ları sunuluyor. 
</DD>
</DL>

<P>

<H2><A NAME="SECTION00037000000000000000">
2.7 Knoppix</A>
</H2>

<P>
<!-- MATH
 $\includegraphics{resim/knoppix}$
 -->
<IMG
 WIDTH="145" HEIGHT="134" ALIGN="BOTTOM" BORDER="0"
 src="<?php echo $path . $resimler . $dagitim ; ?>knoppix.png"
 >

<P>
Almanya'da Klaus Knopper tarafından geliştirilen ve Debian tabanlı
olan Knoppix'in, özellikle otomatik donanım tanıma konusunda çıtayı
yükseğe çektiğini söylemek yanlış olmaz. Rahat açılışı, sunduğu yazılımların
çeşitliliği, on-the-fly sıkıştırma tekniği ve sabit dist üzerine kurulum
yapabilmesi özellikleri Knoppix'i bir Linux dağıtımı olmanın ötesinde
vazgeçilmez bir araç haline getirmiştir. Bir kurtarma diski olarak,
Linux'u daha görmemiş olanlara sunmak amacıyla, ya da satın almadan
önce bir bilgisayarı denemek amacıyla kullanılabilmektedir. Bunların
dışında, günlük işleri görmek amacıyla kullanılabilecek bir Linux
dağıtımıdır.

<P>
Knoppix'in yeni sürümleri, ortalama 2-6 hafta aralıklarla sunulmaktadır.
Yeni sürümlerde, hatalardan arındırılmış yazılımlar ve Debian'ın &#34;kararsız&#34;
deposundaki son yazılımlar bulunmaktadır.

<P>
Knoppix<A NAME="tex2html32"
  HREF="#foot335"><SUP>16</SUP></A>, Linux medyası tarafından da yakından takip edilmektedir. Klaus Knopper'la
yapılmış bir ropörtaj'a <A NAME="tex2html34"
  HREF="#foot336"><SUP>17</SUP></A> adresinden ulaşabilirsiniz. Ayrıca Knoppix hakkında daha fazla bilgiye
ulaşmak için, Knoppix-the Great Linux Advocate<A NAME="tex2html36"
  HREF="#foot337"><SUP>18</SUP></A> ve Knoppix 3.4 Has Landed<A NAME="tex2html38"
  HREF="#foot338"><SUP>19</SUP></A> yazılarına linklerden ulaşabilirsiniz.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Çok iyi donanım tanıma, sabit disk kurulumu olmadan CD'den
çalışması ve sabit disklere özellikle istenmediği taktirde dokunmaması,
sistem kurtarma aracı olarak kullanılabilmesi. 
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Sadece CD'den çalıştığı takdirde hızda ve performansda azalma. 
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>DEB 
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Bir çok ülkedeki yansıları ile yüksek erişilebilirlikte.. 
</DD>
</DL>

<P>

<H2><A NAME="SECTION00038000000000000000">
2.8 openSUSE</A>
</H2>

<P>
<!-- MATH
 $\includegraphics{resim/opensuse}$
 -->
<IMG
 WIDTH="159" HEIGHT="101" ALIGN="BOTTOM" BORDER="0"
 src="<?php echo $path . $resimler . $dagitim ; ?>suse.png"
 >

<P>
openSUSE Projesi, Novell tarafından desteklenen ve Linux'un heryerde
kullanılmasını amaçlayan dünya çapında bir topluluk programıdır ve
openSuSe'ye kolayca erişimi amaçlamaktadır. Dünyanın en kullanılabilir
Linux'unu yaratmak ve dağıtmak için openSUSE, aynı zamanda Novell'in
ödüllü SuSe Linux Enterprise ürünlerinide sağlamaktadır.

<P>
Daha önceden ismi S.u.S.E. GmBH (Software und System-Entwicklung (Yazılım
ve Sistem Geliştirme)) olan SuSe AG, önce Almanya daha sonra ABD'de
kayıtlı bir firma olarak Peter MacDonald tarafından 1992'de kurulmuştur
ve SuSe Linux bu firma çatısında geliştirilmiş bir dağıtımdır (daha
sonradan SuSE AG firmasının Novell'e satılması sonucunda SuSe Linux,
openSUSE adını almıştır. Bu gün openSUSE, Novell'in SUSE Linux Enterprise
Server ve SUSE Linux Enterprise Desktop isimli ücretli desteğe sahip
2 dağıtımının kod tabanını oluşturur).

<P>
İlk yıllarında Slackware Linux'un Almanca çevirisini yeni bir dağıtım
haline getirmeyi amaçlayan MacDonald 1992 yılının ortalarında ilk
kolay kullanılır Linux dağıtımı amacına SLS (Softlanding Linux System)
dağıtımı ile ulaştı. Bu dağıtım, Linux çekirdeği, X ve TCP/IP'nin
zamanına göre oldukça gelişmiş entegrasyonunu kullanıcıya sunmayı
başarmıştı. 1992 yılında şirketleşme kararı verildikten hemen sonra
SLS ve Slackware için yazılım paketleri çıkartmaya başlayarak geliştiricilerin
dikkatini çekti. Ardından 1994 yılında SLS adının S.u.S.E Linux olarak
değiştirilmesiyle ilk CD sürümü olan 1.0 yayınlandı. 1996 yılında
Florian La Roche'un Jurix dağtımıyla birleşti ve ilk gelişmiş S.u.S.E
Linux sürümü olan 4.2 yayınlandı; bu yıllarda S.u.S.E Linux, Red Hat
Linux tarafından yaygınlaştırılan birçok öğeyi bünyesinde topladı
(Örn. RPM, ve /etc/sysconfig).

<P>
S.u.S.E Linux 5.2 sürümüyle dağıtım yarışında açık arayla öne çıktı.
Bu dağıtım, gelişmiş yönetim ve kurulum araçları olan YaST (<B>Y</B>et
<B>a</B>nother <B>S</B>etup <B>T</B>ool (<B>B</B>ir <B>d</B>iğer
<B>K</B>urulum <B>A</B>racı)) ve SaX'ı (SuSE advanced X setup)
içeriyordu. Bu araçlar sayesinde geniş bir donanım yelpazesinin desteklenmesi
ve X'in kolay kurulumu hedefleri başarılı oldu.

<P>
İlerleyen yıllarda S.u.S.E'nin geliştirici paylaşımı programı Xfree86'nın
(X.org) gelişiminde çok önemli etkilere sebep oldu.

<P>
Günümüzde openSUSE 11.0 sürümüyle halen kolay kurulum ve yönetime
sahip Linux dağıtımlarından biri olarak tutunmayı başarmıştır. YaST
gelişerek yeni sürümünün ismi YaST2 olarak değişmiştir ve YaST2 2006
yılında GPL lisansı ile dağıtılmaya başlanmıştır.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Kolay kurulum ve yönetim, SaX2 ile neredeyse otomatikleşmiş
X kurulumu, YaST2 sayesinde kolay sistem kurulum ve yönetimi, geniş
paket deposu .
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Tüm paketlerin yerelleştirme özellikleri için ek CD gereksinimi,
belirsiz sürüm yenileme periyodu, bir önceki sürümden yeni sürüme
sistemi kapatmadan güncelleme yapılamaması, önceki sürümlerde varolan
paketlerin sonraki sürümlerden kaldırılması riski, bazı paketlerin
elle derlenmesinde karşılaşılan bağımlılık problemleri, topluluk destekli
paket depolarının azalması, Novell'in ticari ilişkileri yüzünden dağıtımın
geliştirici kadrosunda eksilmeler.
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>RPM
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Bir çok ülkedeki yansıları ile yüksek erişilebilirlikte..
</DD>
</DL>

<P>

"""""""<h3><a class="dagitim" NAME="SECTION00038100000000000000">
2.8.1 T. Koray Peksayar'ın openSuSe Hakkındaki Yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
openSUSE, Novell'in Microsoft'a hisse satışı sonucunda geliştirici
kadrosunda kayıplar yaşadı.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Sonrasında Microsoft SAMBA projesinin patentli SMB/CIFS kodunu kullandığı
gerekçesiyle ve SAMBA'nın Novell tarafından openSUSE ile dağıtılması
gerekçesiyle Novell üzerinde baskı kurdu.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Bu baskı daha sonradan gerekçe değiştirerek SMB/CIFS kullanılan dosya
sunucularında Windows yerine Linux kullanımının artmasını ticari tehdit
olarak gören bir bakış açısıyla Microsoft baskılara devam etti.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Bu baskılar sonucunda Novell Microsoft'la Linux-Windows kod paylaşımı
sağlayan bir anlaşma imzalayarak bu gerilimi azaltmaya çalıştı.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Bu anlaşmayla Novell Linux ile Windows arasında eş kullanılabilirlik
ve uyumluluk sağlanmasının amaçlandığını söylese de Linux topluluğu
bu girişime tepki duydu.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Bu sözleşme kimsenin öz varlığı olmayan, herkese açık özgür yazılımın
üzerinde denetim oluşturulması olarak görüldü. Bu kod paylaşımı konusunun
GPL sayesinde sağlanan özgürlük unsurlarının korunması mantığıyla
çelişmesi de Linux'un gelişimine hiçbir katkı sağlamayacağı yoğun
olarak tartışıldı ve topluluk tarafından kabul gördü.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>10.0 sürümünden önce varolan apt4rpm ile sağlanan apt-get ile alternatif
güncelleme ve paket kurulumundan 10.0 sürümünde vazgeçilmesi büyük
tepki gördü.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>openSUSE 10.0 sürümünde YaST ile sağlanan, zypper ve yum ile paket
güncellemede karşılaşılan problemler 10.0 sürümü kullanıcılarını zor
durumda bıraktı. 11.0 sürümünün de gecikmesiyle kullanıcıların tepkisi
giderek arttı.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Yukarıdaki sorunlar, openSUSE'den diğer dağıtımlara geçişin yolunu
açtı ve openSUSE bu dönemde oldukça büyük rakamlarda destek kaybetti.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Tüm bu olumsuzluklara rağmen openSUSE halen rağbet gören dağıtımların
başında geliyor.

</BLOCKQUOTE>

<P>

<H2><A NAME="SECTION00039000000000000000">
2.9 Pardus</A>
</H2>

<P>
<!-- MATH
 $\includegraphics{resim/pardus}$
 -->
<IMG
 WIDTH="77" HEIGHT="90" ALIGN="BOTTOM" BORDER="0"
 src="<?php echo $path . $resimler . $dagitim ; ?>pardus.jpg"
 >

<P>
Pardus<A NAME="tex2html40"
  HREF="#foot339"><SUP>20</SUP></A>, 2003 yılından bu yana Tübitak/UEKAE bünyesinde geliştirilmekte olan,
öncelikli hedefi olarak, bilişim okur-yazarlığına sahip bilgisayar
kullanıcılarının temel masaüstü ihtiyaçlarını belirlemiş, proje kapsamında
geliştirilen araçları ile kurulum, yapılandırma ve kullanım kolaylığı
sunan bir GNU/Linux dağıtımıdır.

<P>
Pardus sürümleri &#34;Kurulan&#34; ve &#34;Çalışan&#34;
olmak üzere iki farklı CD halinde yayınlanmaktadır. Yaklaşık 3 aylık
aralıklarla ara sürümler ve yılda bir kez de yeni sürüm sunulmaktadır.
Bu yazının yazıldığı tarih itibariyle Pardus'un son sürümü 2008.1
Hyaena Hyaena'dır.

<P>
Pardus, grafik arayüze sahip kurulum aracı YALI sayesinde, her düzeydeki
kullanıcılar tarafından birkaç basit adımda kolayca kurulabilir.

<P>
Pardus projesi kapsamında geliştirilen PiSi paket yöneticisini kullanan
Pardus, deposundaki yazılımları sistem kararlılığını bozmayacak düzeyde
güncel tutarak kullanıcılarına &#34;güncel&#34; ve &#34;kararlı&#34;
bir yapı sunmaktadır. Güvenlik güncellemeleri dışındaki güncellemeler,
öncelikle &#34;test&#34; deposuna alınarak, paket özelinde
ve depo genelinde oluşabilecek olumsuz durumlara karşı bir dizi teste
tabi tutulur, sorunsuz olduğuna karar verilen paketler kararlı depoya
aktarılır.

<P>
Ulusal bir dağıtım olma hedefinin yanı sıra Türkiye'de özgür yazılımın
yayılmasını ve bir özgür yazılım ekosistemi oluşmasını da amaçlayan
Pardus, bu amaç doğrultusunda oluşturduğu e-posta listeleri, kullanıcı
forumları, belgeleme sistemi ve benzeri yapılarla Türkiye'deki kullanıcıların
kendi dillerinde daha çok belge bulabilmelerini ve destek alabilmelerini
sağlamaktadır. Bunun yanında çeşitli gönüllü girişimler de Pardus
kullanıcılarına ek paket depoları ve yardım kanalları sunmaktadır.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Kolay kurulum, kolay kullanımlı sistem araçları, güncel paket
deposu, hızlı ve pratik paket yönetim sistemi
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Yansı sayısının azlığı, Pardus araçları ile ilgili dokümanların
az olması, 64 bit sürümünün bulunmaması, sadece standart kurulumu
desteklemesi
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>PiSi
</DD>
<DT><STRONG>(İnternet)</STRONG></DT>
<DD>ISO'ları Türkiye'deki bir çok yansı ve yurt dışındaki
birkaç yansı tarafından sunuluyor.
</DD>
</DL>

<P>

<H2><A NAME="SECTION000310000000000000000">
2.10 Slackware</A>
</H2>

<P>
<!-- MATH
 $\includegraphics{resim/slackware}$
 -->
<IMG
 WIDTH="142" HEIGHT="134" ALIGN="BOTTOM" BORDER="0"
 src="<?php echo $path . $resimler . $dagitim ; ?>slackware.png"
 >

<P>
Slackware Linux<A NAME="tex2html42"
  HREF="#foot340"><SUP>21</SUP></A>, Patrick Volkerding tarafından 1992 de yaratılmış olan en eski Linux
dağıtımıdır. Grafiksel konfigürasyon araçları ve basit arayüzler sunmaktan
ziyade, sizin Linux'a aşina olmanızı bekleyen bir yapıya sahiptir.
Diğer dağıtımlar geliştirmesi zor fakat kullanması kolay arayüzler
sunarken, Slackware'de her şeyi konfigürasyon dosyalarına bizzat el
atarak halletmeniz gerekir. Bundan dolayı Slackware kullanmayı düşünen
acemiler Linux öğrenmek için zaman harcamaya hazır olmalıdırlar.

<P>
Bununla birlikte, Slackware'in bir çok kullanıcı üzerinde karşı konulmaz
bir büyüsü vardır. Yüksek düzeyde kararlı ve güvenli bir yapısı vardır
- sunucu olarak kullanmaya son derece uygundur. Deneyimli Linux yöneticileri
onu, dağıtım üreticilerinin çeşitli yamaları ve eklentilerinin azlığından
dolayı hatasız ve kararlı bulurlar. Yeni versiyonlarının dağıtım sıklığı
düşüktür (yaklaşık yılda bir kez ), ancak güncel paketleri her zaman
bulunabilmektedir. Slackware, Linux ile ilgili derinlemesine bilgi
sahibi olmak isteyenler için ideal bir dağıtımdır.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Yüksek kararlılık, daha az hata, UNIX prensiplerine sıkı
bağlılık. 
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Neredeyse hiç konfigürasyon aracı olmaması, yeni kullanıcılar
için zor kurulum. 
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>TGZ 
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Bir çok ülkedeki yansıları ile yüksek erişilebilirlikte..
</DD>
</DL>

<P>

<h3><a class="dagitim" NAME="SECTION000310100000000000000">
2.10.1 Doruk Fişek'in Slackware Hakkındaki Yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
Nisan 1993'te yayınlanan ilk sürümünden beri Slackware, en UNIX-vari
Linux dağıtımı olmayı hedefliyor.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Slackware'i bir dağıtım olarak tek bir kelimeyle tanımlamak gerekseydi,
bu herhalde &#34;basit&#34; olurdu. Koruduğu basit yapısı;
kavranmasını, hakim olunmasını ve yönetilmesini kolaylaştırır.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Genellikle popüler dağıtımlar, kendi kullanıcılarının arzularını karşılayabilmek
için arka planda ciddi anlamda karmaşık yapılara yönelirler. Sistemi
gerçek anlamda tanıyarak dağıtımın kendi yönetim araçları dışında
sisteme müdahale edebilmek için ciddi bir efor ve zaman gerekebilir.
Üstelik kendilerine özgü oluşturdukları karmaşık yapılarına özgür
yazılımların geliştirildikleri gibi monte edilebilmesi de oldukça
zordur. Bu nedenle yazılımlarda dağıtıma özgü ciddi değişiklikler
(yamalar) yapmak durumunda kalırlar.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Slackware ise tüm bu karmaşadan uzak durarak, gelişimini özgür yazılımların
gelişimine paralel olarak devam ettirir. Her derde deva olmaya çalışmak
yerine özgür yazılım dünyasının bir 'ayna'sı görevi görür - ne eksiğini,
ne de fazlasını yansıtır. Basit yapısı sayesinde yazılımların yeni
sürümleri kolaylıkla dağıtıma katılır. Slackware'in en güncel sürümünü
içeren -current ağacı, birçok dağıtımdan daha güncel yazılımlar içerir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Slackware'de sürümler arasında dağıtımın yapısında ciddi değişiklikler
olmaz. Dağıtımın yapısının sürekliliği, kullanıcının dağıtım ile uğraşmak
yerine yazılımların yeni sürümlerine ve özelliklerine odaklanmasına
olanak tanır. 
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Slackware size sistemi arada başka bir katman olmaksızın kontrol etmenize
ve kendi işinizi kendinizin yapmasına olanak tanır. Öte yandan bu,
ne yaptığınızı biliyor olmanızı ya da öğrenmenizi de gerektirir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Linux'un günümüzdeki kadar kitleselleşmediği bir dönemin en yaygın
dağıtımlarından olan Slackware, hala UNIX köklerine bağlı kalmayı
tercih eden Linux kullanıcıları tarafından tercih edilmeye devam ediliyor.

</BLOCKQUOTE>

<P>

<H2><A NAME="SECTION000311000000000000000">
2.11 Ubuntu</A>
</H2>

<P>
<!-- MATH
 $\includegraphics{resim/ubuntu}$
 -->
<IMG
 WIDTH="38" HEIGHT="38" ALIGN="BOTTOM" BORDER="0"
 src="<?php echo $path . $resimler . $dagitim ; ?>UbuntuLogoSn.png"
 >

<P>
Ubuntu Canonical Ltd. Tarafından başlatılan ve finanse edilen bir
açık kaynak işletim sistemi projesidir. İlk sürümü Ubuntu 4.10 Warty
Warthog 2004 Kasım ayında dağıtılmaya başlanmıştır.
Ayrıca kurulum medyalarını posta yoluyla ücretsiz olarak son kullanıcıya
ulaştıran ilk dağıtımdır. 

<P>
Güney Afrikalı bir şirket tarafından yürütüldüğü halde açık kaynak
olan bu dağıtım, arkasına aldığı bu güçle beraber bir çok son kullanıcının
bilgisayarında tercih ettiği dağıtım olmuştur. 2007 yılında yapılmış
olan bir araştırmanın sonucuna göre<A NAME="tex2html44"
  HREF="#foot341"><SUP>22</SUP></A> GNU/Linux kullanıcılarının %30 gibi büyük bir kısmı bilgisayarlarında
Ubuntu kullanmaktadır. 

<P>
Ubuntu genel olarak basit ve kullanışlıdır. Son kullanıcı hiç bir
sıkıntı çekmeden bilgisayarına kurup sorun yaşamadan kullanmaya başlayabilir.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Geniş kullanım alanı, kararlı ve güncel olması , grafiksel
kurulum, grafiksel yapılandırma araçları, iyi belgelendirme, her dilde
yeterli miktarda kaynak sunması, aktif topluluk.
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>İleri düzey kullanıcılara hitap etmiyor olması, sürüm güncellemelerinde
hatalar yaşanması.
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>DEB
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Birçok ülkede ve birçok şehirde yansıları ile yüksek
erişilebilirlik.
</DD>
</DL>

<P>

<h3><a class="dagitim" NAME="SECTION000311100000000000000">
2.11.1 D. Uğur Karatay'ın Ubuntu Hakkındaki Yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
Ubuntu ile ilk tanışmam 2004 yılındaki sürümle başlamıştır. O zamana
kadar GNU/Linux kullanmamıştım. İlk sürümüyle bile son kullanıcı dostu
olması beni çok etkilemiştir. Ayrıca işi bilgisayarlarla alakalı olmayan
ama bilgisayarında özgür yazılımlar kullanmak isteyen son kullanıcılar
için çok az uğraş ile kararlı ve kullanılabilir hale gelen bir dağıtım
olması da daha sonra denediğim diğer dağıtımlardan vazgeçip Ubuntu'ya
dönmemi sağladı. 2004 yılının Kasım ayından beri bilgisayarımda sadece
GNU/Linux kullanıyorum, genel olarakta Ubuntu ve türevlerini kullandım.
Buna rağmen başka bir işletim sistemine hiç ihtiyaç duymadığımı rahatlıkla
söyleyebilirim. Dışarıda bilgisayar kullanmam gerektiği zaman taşınabilir
belleğime kurduğum Ubuntu ile işlerimi rahatlıkla hallediyorum.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Biraz teknik özelliklerden bahsetmek gerekirse, Sunucu ve masaüstü
sürümleri olarak iki farklı şekilde ulaşabilir durumda Ubuntu. Bunun
yararı ise kullanıcıyı gereksiz paketleri yükleme ve onları kaldırma
işinden uzak tutması. Bir nevi ihtiyaç duyulanı ihtiyaç duyana vermesi
ve fazlasını yapmak için özel bir çaba göstermemesi de artı puan olarak
geri dönüyor. Ayrıca 18 ayda bir çıkan LTS sürümleri kullanıcıların
gerekli gördükleri takdirde 18 ay boyunca sistemlerini hiç değiştirmeden
güncellemeleri ve yardım almalarını sağlıyor. Çok yaygın olması ekstra
puan kazandırıyor. 55 dilde kullanıcılarına destek sunması ve topluluk
desteğinin çok güçlü olması Ubuntu'yu yeni başlayan ve sadece işini
görmek isteyen son kullanıcılar için vazgeçilmez yapıyor. Debian tabanlı
bir dağıtım olması nedeniyle paket yönetim sistemi olarak APT kullanıyor
ve bu son kullanıcı için çok büyük kolaylıklar sunuyor. Lazım olan
herhangi bir paketi kurmak için paket yöneticisinden seçmek ve kur
demek yeterli oluyor. Eğer terminale alışıksanız yine tek bir komut
işinizi hallediyor. 6.06 sürümüne kadar PPC ve Sparc mimarilerine
de destek veren Ubuntu artık sadece x86 ve amd64 mimarilerine destek
vermekte ama bu bir eksi puan kazandırmıyor. Nedeni ise hedeflenen
masaüstü kullanıcısının zaten bu iki mimariden birine sahip olması.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Sonuç olarak son kullanıcıyı hedefleyen bir dağıtım olması sebebiyle
ileri düzey kullanıcılara hitap etmeyen, hızlı ve kolay kurulum, yüksek
kullanılabilirlikle evlerimizde ve iş yerlerimizde düzenli olarak
kullanabileceğimiz bir dağıtım olarak size iyi bir ortam sunar.

</BLOCKQUOTE>

<P>

<H1><A NAME="SECTION00040000000000000000">
3 Teşekkürler</A>
</H1>

<P>

<UL>
<LI>Alp Öztarhan
</LI>
<LI>Alper Kanat
</LI>
<LI>Doruk Fişek
</LI>
<LI>D. Uğur Karatay
</LI>
<LI>Engin İlkiz
</LI>
<LI>Enver Altın
</LI>
<LI>Fatih Altınok
</LI>
<LI>Murat Koç
</LI>
<LI>S. Çağlar Onur
</LI>
<LI>Serbülent Ünsal 
</LI>
<LI>T. Koray Peksayar
</LI>
<LI>Türker Sezer
</LI>
</UL>

<P>

<H1><A NAME="SECTION00050000000000000000">
4 Yasal Açıklamalar</A>
</H1>

<P>

<H2><A NAME="SECTION00051000000000000000">
4.1 Telif Hakkı ve Lisans</A>
</H2>

<P>
Bu belgenin telif hakkı 2004-2008 A. Murat EREN'e aittir. Bu belgeyi,
Free Software Foundation tarafından yayınlanmış bulunan GNU Özgür
Belgeleme Lisansının 1.1 ya da daha sonraki sürümünün koşullarına
bağlı kalarak kopyalayabilir, dağıtabilir ve/veya değiştirebilirsiniz.
Bu Lisansın bir kopyasını <TT><A NAME="tex2html46"
  HREF="http://www.gnu.org/copyleft/fdl.html">http://www.gnu.org/copyleft/fdl.html</A></TT>adresinde bulabilirsiniz.

<P>
Linux, Linus Torvalds adına kayıtlı bir ticarî isimdir.

<P>

<H2><A NAME="SECTION00052000000000000000">
4.2 Feragatname</A>
</H2>

<P>
Bu belgedeki bilgilerin kullanımından doğacak sorumluluklar, ve olası
zararlardan belge yazarı sorumlu tutulamaz. Bu belgedeki bilgileri
uygulama sorumluluğu uygulayana aittir.

<P>
Tüm telif hakları aksi özellikle belirtilmediği sürece sahibine aittir.
Belge içinde geçen herhangi bir terim bir ticarî isim ya da kuruma
itibar kazandırma olarak algılanmamalıdır. Bir ürün ya da markanın
kullanılmış olması ona onay verildiği anlamında görülmemelidir. 

<BR><HR><H4>Dipnotlar</H4>
<DL>
<DT><A NAME="foot320"
 HREF="dagitimlar.html#tex2html2"><SUP>1</SUP></A>
<DD>GNU Web Sayfası <TT><A NAME="tex2html3"
  HREF="http://www.gnu.org">http://www.gnu.org</A></TT>

<DT><A NAME="foot321"
 HREF="dagitimlar.html#tex2html4"><SUP>2</SUP></A>
<DD>Linus Torvalds'ın Linux telaffuzu <TT><A NAME="tex2html5"
  HREF="http://www.paul.sladen.org/pronunciation/torvalds-says-linux.wav">http://www.paul.sladen.org/pronunciation/torvalds-says-linux.wav</A></TT>

<DT><A NAME="foot322"
 HREF="dagitimlar.html#tex2html6"><SUP>3</SUP></A>
<DD><TT><A NAME="tex2html7"
  HREF="http://cekirdek.pardus.org.tr/~meren/gnu.html">http://cekirdek.pardus.org.tr/~meren/gnu.html</A></TT>

<DT><A NAME="foot323"
 HREF="dagitimlar.html#tex2html8"><SUP>4</SUP></A>
<DD>LKD Web Sayfası <TT><A NAME="tex2html9"
  HREF="http://www.lkd.org.tr">http://www.lkd.org.tr</A></TT>

<DT><A NAME="foot324"
 HREF="dagitimlar.html#tex2html10"><SUP>5</SUP></A>
<DD>LKD E-posta Listeci Arayüzü <TT><A NAME="tex2html11"
  HREF="http://liste.linux.org.tr">http://liste.linux.org.tr</A></TT>

<DT><A NAME="foot325"
 HREF="dagitimlar.html#tex2html12"><SUP>6</SUP></A>
<DD>Arch Linux Türkiye Topluluğu <TT><A NAME="tex2html13"
  HREF="http://www.archlinuxtr.org">http://www.archlinuxtr.org</A></TT>

<DT><A NAME="foot326"
 HREF="dagitimlar.html#tex2html14"><SUP>7</SUP></A>
<DD>Debian Linux Ana Sayfası <TT><A NAME="tex2html15"
  HREF="http://www.debian.org">http://www.debian.org</A></TT>

<DT><A NAME="foot327"
 HREF="dagitimlar.html#tex2html16"><SUP>8</SUP></A>
<DD>RedHat'ın Web Sayfası <TT><A NAME="tex2html17"
  HREF="http://www.redhat.com">http://www.redhat.com</A></TT>

<DT><A NAME="foot328"
 HREF="dagitimlar.html#tex2html18"><SUP>9</SUP></A>
<DD>Fedora Projesi Web Sayfası <TT><A NAME="tex2html19"
  HREF="http://fedora.redhat.com">http://fedora.redhat.com</A></TT>

<DT><A NAME="foot329"
 HREF="dagitimlar.html#tex2html20"><SUP>10</SUP></A>
<DD>Gentoo Linux Web Sayfası <TT><A NAME="tex2html21"
  HREF="http://www.gentoo.org">http://www.gentoo.org</A></TT>

<DT><A NAME="foot330"
 HREF="dagitimlar.html#tex2html22"><SUP>11</SUP></A>
<DD>Daniel Robbins'in Kaleminden Bir Makale <TT><A NAME="tex2html23"
  HREF="http://www-106.ibm.com/developerworks/library/l-dist1.html">http://www-106.ibm.com/developerworks/library/l-dist1.html</A></TT>

<DT><A NAME="foot331"
 HREF="dagitimlar.html#tex2html24"><SUP>12</SUP></A>
<DD>Gentoo Forumları <TT><A NAME="tex2html25"
  HREF="http://forums.gentoo.org">http://forums.gentoo.org</A></TT>

<DT><A NAME="foot332"
 HREF="dagitimlar.html#tex2html26"><SUP>13</SUP></A>
<DD>Gentoo IRC Sunucusu <TT><A NAME="tex2html27"
  HREF="http://www.gentoo.org/main/en/irc.xml">http://www.gentoo.org/main/en/irc.xml</A></TT>

<DT><A NAME="foot333"
 HREF="dagitimlar.html#tex2html28"><SUP>14</SUP></A>
<DD>Gentoo E-posta Listeleri <TT><A NAME="tex2html29"
  HREF="http://www.gentoo.org/main/en/lists.xml">http://www.gentoo.org/main/en/lists.xml</A></TT>

<DT><A NAME="foot334"
 HREF="dagitimlar.html#tex2html30"><SUP>15</SUP></A>
<DD>Mandrake Linux Projesi <TT><A NAME="tex2html31"
  HREF="http://www.mandrake.com">http://www.mandrake.com</A></TT>

<DT><A NAME="foot335"
 HREF="dagitimlar.html#tex2html32"><SUP>16</SUP></A>
<DD>Knoppix'in Web Sayfası <TT><A NAME="tex2html33"
  HREF="http://www.knoppix.de">http://www.knoppix.de</A></TT>

<DT><A NAME="foot336"
 HREF="dagitimlar.html#tex2html34"><SUP>17</SUP></A>
<DD>Klaus Knopper Ropörtajı <TT><A NAME="tex2html35"
  HREF="http://www.osnews.com/story.php?news_id=2305">http://www.osnews.com/story.php?news_id=2305</A></TT>

<DT><A NAME="foot337"
 HREF="dagitimlar.html#tex2html36"><SUP>18</SUP></A>
<DD>Knoppix Hakkında bir diğer Makale <TT><A NAME="tex2html37"
  HREF="http://lwn.net/Articles/31458/">http://lwn.net/Articles/31458/</A></TT>

<DT><A NAME="foot338"
 HREF="dagitimlar.html#tex2html38"><SUP>19</SUP></A>
<DD>Knoppix Hakkında bir diğer Makale <TT><A NAME="tex2html39"
  HREF="http://lwn.net/Articles/84851/">http://lwn.net/Articles/84851/</A></TT>

<DT><A NAME="foot339"
 HREF="dagitimlar.html#tex2html40"><SUP>20</SUP></A>
<DD>Pardus Projesi Web Sayfası <TT><A NAME="tex2html41"
  HREF="http://www.pardus.org.tr">http://www.pardus.org.tr</A></TT>

<DT><A NAME="foot340"
 HREF="dagitimlar.html#tex2html42"><SUP>21</SUP></A>
<DD>Slackware'in Web Sayfası <TT><A NAME="tex2html43"
  HREF="http://www.slackware.org">http://www.slackware.org</A></TT>

<DT><A NAME="foot341"
 HREF="dagitimlar.html#tex2html44"><SUP>22</SUP></A>
<DD>2007 yılında yapılmış bir araştırması <TT><A NAME="tex2html45"
  HREF="http://www.desktoplinux.com/cgi-bin/survey/survey.cgi?view=archive&amp;id=0813200712407">http://www.desktoplinux.com/cgi-bin/survey/survey.cgi?view=archive&amp;id=0813200712407</A></TT>

</DL>
<BR>
<BR>
<HR>
<ADDRESS>
A. Murat Eren
2008-11-15
</ADDRESS>
</td>
    </tbody></table></td>