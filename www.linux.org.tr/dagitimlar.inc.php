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
<H1 ALIGN="CENTER">Linux Daðýtýmlarý Belgesi</H1>
<P ALIGN="CENTER"><STRONG>A. Murat Eren
<BR>(meren at pardus org tr
<BR><TT><A NAME="tex2html1"
  HREF="http://meren.org/">http://meren.org/</A></TT>)</STRONG></P>
<P ALIGN="CENTER"><STRONG>v1.1, 15.11.2008</STRONG></P>

<H3>Özet:</H3>
<DIV>
Bu belgede, çok kullanýlan kimi Linux daðýtýmlarý hakkýnda, özellikle
baþlangýç son kullanýcýlarýnýn tercih yaparken önceden bir miktar
fikir sahibi olabilmeleri için bilgi verilmeye çalýþýlmýþtýr. Mümkün
olduðunca objektif kalmaya çalýþýlarak verilmiþ bilgilerin ardýndan
yer yer bahsi geçen daðýtýmlarý uzun süredir kullanan kiþilerin, bu
daðýtýmlar ile ilgili -taraflý :)- yorumlarýna da yer verilmiþtir.
Siz de yorumlarýnýzý belge geliþtiricisine ulaþtýrarak potansiyel
kullanýcýlarýn yön bulmasýný kolaylaþtýrabilirsiniz.

<P>
</DIV>
<P>
<BR>

<H2><A NAME="SECTION00010000000000000000">
Ýçindekiler</A>
</H2>
<!--Table of Ýçindekiler-->

<UL>
<LI><A NAME="tex2html74"
  HREF="dagitimlar.html">1 Giriþ</A>
<LI><A NAME="tex2html75"
  HREF="#SECTION00030000000000000000">2 Linux Daðýtýmlarý</A>
<UL>
<LI><A NAME="tex2html76"
  HREF="#SECTION00031000000000000000">2.1 Arch Linux</A>
<UL>
<LI><A NAME="tex2html77"
  HREF="#SECTION00031100000000000000">2.1.1 Alper Kanat'ýn Arch Linux Hakkýndaki Yorumu</A>
</UL>
<LI><A NAME="tex2html78"
  HREF="#SECTION00032000000000000000">2.2 Debian</A>
<UL>
<LI><A NAME="tex2html79"
  HREF="#SECTION00032100000000000000">2.2.1 Enver Altýn'ýn Debian hakkýndaki yorumu</A>
</UL>
<LI><A NAME="tex2html80"
  HREF="#SECTION00033000000000000000">2.3 Fedora</A>
<LI><A NAME="tex2html81"
  HREF="#SECTION00034000000000000000">2.4 Gentoo</A>
<UL>
<LI><A NAME="tex2html82"
  HREF="#SECTION00034100000000000000">2.4.1 S. Çaðlar Onur'un Gentoo Hakkýndaki Yorumu</A>
<LI><A NAME="tex2html83"
  HREF="#SECTION00034200000000000000">2.4.2 A. Murat Eren'in Gentoo Hakkýndaki Yorumu</A>
</UL>
<LI><A NAME="tex2html84"
  HREF="#SECTION00035000000000000000">2.5 Gobolinux</A>
<UL>
<LI><A NAME="tex2html85"
  HREF="#SECTION00035100000000000000">2.5.1 Fatih Altýnok'un Gobolinux Hakkýndaki Yorumu</A>
</UL>
<LI><A NAME="tex2html86"
  HREF="#SECTION00036000000000000000">2.6 Mandrake</A>
<LI><A NAME="tex2html87"
  HREF="#SECTION00037000000000000000">2.7 Knoppix</A>
<LI><A NAME="tex2html88"
  HREF="#SECTION00038000000000000000">2.8 openSUSE</A>
<UL>
<LI><A NAME="tex2html89"
  HREF="#SECTION00038100000000000000">2.8.1 T. Koray Peksayar'ýn openSuSe Hakkýndaki Yorumu</A>
</UL>
<LI><A NAME="tex2html90"
  HREF="#SECTION00039000000000000000">2.9 Pardus</A>
<LI><A NAME="tex2html91"
  HREF="#SECTION000310000000000000000">2.10 Slackware</A>
<UL>
<LI><A NAME="tex2html92"
  HREF="#SECTION000310100000000000000">2.10.1 Doruk Fiþek'in Slackware Hakkýndaki Yorumu</A>
</UL>
<LI><A NAME="tex2html93"
  HREF="#SECTION000311000000000000000">2.11 Ubuntu</A>
<UL>
<LI><A NAME="tex2html94"
  HREF="#SECTION000311100000000000000">2.11.1 D. Uður Karatay'ýn Ubuntu Hakkýndaki Yorumu</A>
</UL>
</UL>
<LI><A NAME="tex2html95"
  HREF="#SECTION00040000000000000000">3 Teþekkürler</A>
<LI><A NAME="tex2html96"
  HREF="#SECTION00050000000000000000">4 Yasal Açýklamalar</A>
<UL>
<LI><A NAME="tex2html97"
  HREF="#SECTION00051000000000000000">4.1 Telif Hakký ve Lisans</A>
<LI><A NAME="tex2html98"
  HREF="#SECTION00052000000000000000">4.2 Feragatname</A>
</UL>
</UL>
<!--End of Table of Ýçindekiler-->

<P>

<H1><A NAME="SECTION00020000000000000000">
1 Giriþ</A>
</H1>

<P>
Belgeye baþlamadan önce GNU, GPL, Linux, Linux Daðýtýmý gibi kavramlarýn
üzerinden bir kez daha geçmek, kavramlardan ayný anlamlarýný anladýðýmýzdan
emin olmak ve muhtemel yanlýþ anlamýþlýklarý düzeltmek için iyi ve
gerekli bir yol.

<P>
<DL>
<DT><STRONG>GNU:</STRONG></DT>
<DD>GNU'nun açýlýmý, 'GNU is Not Unix'tir. Yani GNU, 'GNU, Unix
deðildir' anlamýna gelmekte olan özyinelemeli (recursive) bir kelimedir.
1984 yýlýnda tamamen özgür yazýlýmlarýn meydana getirdiði bir iþletim
sistemi ve iþletim sisteminin araçlarýnýn geliþtirilmesi çalýþmasýnýn
adýdýr. GNU, özgür yazýlým camiasýnýn felsefesini ve görüþünü bünyesinde
barýndýran bir akýmdýr.
</DD>
<DT><STRONG>GPL:</STRONG></DT>
<DD>Yazýlan özgür yazýlýmlarýn bir þemsiye altýnda toplanmasý
için 1985 yýlýnda yine Stallman tarafýndan FSF (Free Software Foundation)
kuruldu, GPL (General Public Licence), GNU<A NAME="tex2html2"
  HREF="#foot320"><SUP>1</SUP></A> yazýlýmlarýn özgürlüklerini korumak üzere FSF tarafýndan duyurulmuþ
bir yazýlým lisansýdýr.
</DD>
<DT><STRONG>Linux:</STRONG></DT>
<DD>Linux, Linus Torvalds adýnda Finlandiya'lý bir bilgisyar
mühendisinin 1991 yýlýnda Helsinki Üniversitesi'nde bir öðrenci iken
kiþisel bilgisayarýnda kullanmak üzere geliþtirmeye baþladýðý bir
iþletim sistemi çekirdeðidir (iþletim sisteminin çekirdeði, iþletim
sisteminin beyni diye tabir edebileceðimiz kýsmýdýr). Ýnternet'te
yaptýðý duyuru sonucunda tüm dünyadan bir çok programcýnýn da desteði
ile hýzla geliþmiþ ve halen ayný destek ile geliþmekte olan açýk kaynak
kodlu, özgür bir yazýlýmdýr (Linux, Linus Torvalds tarafýndan &#34;Linuks&#34;
þeklinde telaffuz edilmektedir, ilgili ses dosyasýna <A NAME="tex2html4"
  HREF="#foot321"><SUP>2</SUP></A> adresinden ulaþabilirsiniz.
</DD>
<DT><STRONG>Linux&nbsp;Daðýtýmý:</STRONG></DT>
<DD>GNU yazýlýmlarýný ve diðer özgür yazýlýmlarý
bir araya getiren ve tüm bunlarý bir Linux çekirdeði ile beraber toplu,
derlenmiþ ve kurulumu kolay bir iþletim sistemi olarak kullanýcýlara
sunmayý amaçlamýþ olan yazýlým birlikteliklerine denir.
</DD>
</DL>
GNU Felsefesi ve Linux Ýþletim Sistemi hakkýnda daha fazla bilgiye
<A NAME="tex2html6"
  HREF="#foot322"><SUP>3</SUP></A> adresinden ulaþabilirsiniz.

<P>
Daðýtýmlar, kullanýcýlara sunduklarý uygulamalar noktasýnda birbirlerinden
çok farklý deðillerdir, nihayetinde hepsinin ortak gayesi kullanýlabilir
olmak ve kullanýcý ihtiyaçlarýna en iyi þekilde cevap verebilmektir.
Genel olarak ayný masaüstü yönetim yazýlýmlarý, ayný multimedia araçlarý
ve ayný ofis uygulamalarý ile beraber gelirler. Onlarý birbirinden
ayýran temel özelliklerden en önemlileri yazýlým kurulmasý, kaldýrýlmasý
ve sorgulanmasýnda kullandýklarý paket yöneticileri, kurulum arayüzleri
ve daðýtým içerisine entegre ettikleri konfigürasyon araçlarý ve kullanýcýya
yaþattýklarý hissiyattýr. Bu baðlamda Linux ile yeni tanýþan bir kullanýcýnýn
&#34;hangi daðýtým?&#34; sorusuna çok net bir yanýt vermek
kolay deðildir. Bu belge, hangi daðýtým ile Linux dünyasýna adým atmanýzý
tam olarak söylemeye çalýþmak yerine daðýtýmlarýn belirgin özelliklerini
ön plana çýkarýp, kararýnýzý verme sürecinizde size daðýtýmlar ile
iligili daha fazla görüþ kazanýrmayý amaçlamýþtýr.

<P>
Sorularýnýzý doðrudan belge geliþtiricisine ya da katkýda bulunanlara
sorabileceðiniz sorabileceðiniz gibi, kolayca üye olabileceðiniz Linux
Kullanýcýlarý Derneði<A NAME="tex2html8"
  HREF="#foot323"><SUP>4</SUP></A> posta listelerine<A NAME="tex2html10"
  HREF="#foot324"><SUP>5</SUP></A> sormanýz daha hýzlý yanýt almanýz için yerinde bir davranýþ olacaktýr
:) Ayný listelerde, daðýtýmlarý kullanýrken rastladýðýnýz diðer sorunlarýnýza
da yanýt arayabilirsiniz.

<P>
Ayrýca bu belge en son güncellendiðinde en çok kullanýlan ilk bir
kaç daðýtým DistroWatch verilerine göre þu þekilde idi: Ubuntu, openSUSE,
Fedora, Mint, PCLinuxOS, Debian, Mandriva.

<P>


<P>

<H1><A NAME="SECTION00030000000000000000">
2 Linux Daðýtýmlarý</A>
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
Arch Linux basitlik ve hafiflik göz önünde bulundurularak geliþtirilen
bir Linux daðýtýmýdýr. Burada 'basitlik', Arch geliþtiricileri tarafýndan
'gerekli olmayan eklentiler ve deðiþiklikler olmaksýzýn' anlamýna
gelmekte ve bu felsefe son kullanýcýdan ziyade geliþtirici bakýþ açýsýný
yansýtmaktadýr. Geliþtirici ekibin Arch'ýn dizayný ile ilgili yaklaþýmý
minimalizm, kod doðruluðu ve kod zerafeti çerçevesindedir. 

<P>
2002 yýlýnýn baþlarýndan bu yana geliþtirilmekte olan Arch Linux,
güncel halini birbirinden baðýmsýz sürümler ile kullanýcýlara ulaþtýrmak
yerine günlük yeni paket ve güncelleme yayýnlarý ile kullanýcýlarýnýn
sistemlerini paket yöneticisi yardýmý ile güncel tutmalarýný kolaylaþtýran
bir yapý sunmaktadýr.

<P>
Arch Linux son dönemlerde sayýsý hýzla artan, gayesi 'kullanýcý dostu'
olmak olan daðýtýmlardan birisi deðildir ve Linux ile yeni tanýþacak
kiþilerden ziyade uzun süredir Linux kullanan kiþilere hitap etmektedir.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Hýzlý, kararlý ve son derece güncel bir daðýtým, basit yapýsý
ile kolay yönetilebilir, hýzlý iþleyen hata takip sistemi, iyi belgelendirme,
aktif topluluk. 
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Yalnýzca Ýnternet'ten kurulum, grafiksiz kurulum arabirimi,
yapýlandýrma araçlarýnýn olmayýþý.
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>Pacman (pkg.tar.gz) 
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Bir çok ülkedeki yansýlarý ile yüksek eriþilebilirlikte.
</DD>
</DL>

<P>

<h3><a class="dagitim" NAME="SECTION00031100000000000000">
2.1.1 Alper Kanat'ýn Arch Linux Hakkýndaki Yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
Arch Linux basit, kolay kurulabilir ve kullanýlabilir bir Linux daðýtýmýdýr.
Herhangi bir daðýtýmý taban olarak almamýþ ve sýfýrdan geliþtirilmiþtir.
KISS (Keep It Simple, Stupid); yani her þeyin olabilecek en basit
ve &#34;güncel&#34; haliyle daðýtýmda yer almasý ana felsefedir.
Alýþýlagelmiþ bir çok yapýlandýrma aracý Arch Linux'da bulunmamakta,
bunun yerine basit yapýlandýrma dosyalarýnda bir kaç satýrý deðiþtirmek
yeterli olmaktadýr. Daðýtýmda, BSD'ye benzer açýlýþ betikleri tercih
edilmektedir.
</BLOCKQUOTE><DL>
<DT><STRONG>Sürüm&nbsp;Yapýsý:</STRONG></DT>
<DD>Diðer bir çok daðýtýmýn aksine Arch Linux, sürekli
devam edebilen bir yapýya sahiptir. Bunun anlamý, eðer güncellemeleri
takip ediyorsanýz ve eðer yeni bir sürüm çýkarýldýysa, siz zaten o
sürüme sahipsiniz demektir. Her yeni sürümle birlikte sisteminizde
bir þeyler deðiþtirmek ya da baþtan kurmak zorunda deðilsiniz!
<BR>
<BR>
Daðýtýma ait &#34;core&#34; ve &#34;ftp&#34; olmak
üzere iki sürüm bulunmaktadýr. Her ikisi de internet'ten kurulmak
ve güncellenmek üzere tasarlanmýþtýr. Bu nedenle &#34;core&#34;
sürümünün boyutu yaklaþýk 290 MB'ken, &#34;ftp&#34; sürümünün
boyutu yaklaþýk 140 MB'týr. Aralarýndaki temel fark, içerdikleri paketler
ve sonrasýndaki kurulumun nasýl olacaðýdýr (ki bu adým kullanýcýya
kalmaktadýr). Son zamanlarda USB diskler üzerinde çalýþabilen sürüm
üzerinde çalýþmalar da devam etmektedir.
</DD>
<DT><STRONG>Paket&nbsp;Yönetim&nbsp;Sistemi:</STRONG></DT>
<DD>Arch Linux, pacman adý verilen bir paket
yöneticisine sahiptir. Daðýtýma ait depolar &#34;core&#34;,
&#34;extra&#34;, &#34;testing&#34;, &#34;unstable&#34;
ve &#34;community&#34; olarak ayrýlmýþtýr. &#34;core&#34;
deposu Arch Linux CD'si ile kurabileceðiniz paketlerin bütününden
ibarettir. pacman ile yalnýzca istenen depolardan paket kurulabilirken,
istenen paketlerin belli bir depodan indirilip sabitlenmesi de saðlanabilir.
Daðýtýmdaki tüm paketler, i686 ve x86-64 mimarilerine göre derlenmiþtir.
<BR>
<BR>
Arch Linux, sýklýkla Gentoo daðýtýmýna benzetilir. Bunun sebeplerinden
biri kullanýcý topluluðunun önemli bir kýsmýnýn Gentoo'dan gelmiþ
olmasý olabilir. Oysa Gentoo ile arasýnda önemli farklýlýklar da vardýr.
Arch Linux'da yazýlýmlar, &#34;derlenmiþ&#34; ve &#34;kaynak
kodundan&#34; derlenecek olmak üzere iki farklý þekilde kurulabilirler.
Resmi depolarda bulunan derlenmiþ paketlerin yanýsýra, AUR adý verilen
sistem sayesinde çok daha geniþ bir yazýlým yelpazesi de kullanýcýlarýn
ellerinin altýndadýr. Resmi depolarda bulunan yazýlýmlarýn bir özelliðini
beðenmediðinizde ya da eksik bulduðunuzda, ABS adý verilen bir diðer
sistem ile paket dosyalarýný indirip çok kýsa bir sürede istediðiniz
þekilde derleyip yeni paketler oluþturabiliyorsunuz.
<BR>
<BR>
Arch Linux paketleri gerçekte PKGBUILD adý verilen metin dosyalarýnýn
ve paketi etkileyecek yama dosyalarýnýn bulunduðu küçük yapýlardýr.
PKGBUILD dosyasý oldukça basit bir yapýya sahiptir ve herhangi bir
kullanýcýnýn son derece rahat paket hazýrlamasýna olanak verir. AUR'da
kullanýcýlar, kendi PKGBUILD dosyalarýný ve (varsa) yamalarý içeren
sýkýþtýrýlmýþ bir paketi sisteme yükleyerek diðer kullanýcýlarla paylaþýrlar.
Yine AUR'da paylaþýlan bazý yazýlýmlar ile AUR'dan herhangi bir yazýlýmý
baðýmlýlýklarýyla birlikte indirip kurmak bir komuta indirgenebilmektedir.
</DD>
<DT><STRONG>Topluluk&nbsp;ve&nbsp;Belgelendirme:</STRONG></DT>
<DD>Arch Linux'un sitesinden eriþilebilen
Wiki ve forumlar, son derece iyi ve güncel belgelere sahiptir. Topluluk
bu bakýmdan Gentoo'dan sonra en aktif ikinci topluluk olarak anýlmaktadýr.
<BR>
<BR>Ülkemizde henüz kurulan Arch Linux Türkiye topluluðu<A NAME="tex2html12"
  HREF="#foot325"><SUP>6</SUP></A> özellikle Wiki'de, daðýtýma Türkçe belgeler kazandýrmaya ve mümkün
olduðunda pacman vb. yazýlýmlarý çevirmeye çalýþmaktadýr.
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
Belki de Özgür Yazýlým Hareketi'nin en saf öðelerinden biri olan Debian
GNU/Linux<A NAME="tex2html14"
  HREF="#foot326"><SUP>7</SUP></A>, 1993'de Ian Murdock tarafýndan ticari olmayan bir proje olarak baþlatýlmýþtýr
-ve hala da öyledir. Dünyanýn her yanýndan binlerce geliþtiricinin
katkýlarý ve kaliteli proje yönetimi ile oluþturulmaktadýr.

<P>
Debian'ýn kullanýcý karþýsýna 3 ana kol ile çýkmaktadýr: &#34;kararlý&#34;,
&#34;test&#34; ve &#34;kararsýz&#34;. Bir paketin
yeni bir versiyonu çýktýðýnda, ilk önce &#34;kararsýz (unstable)&#34;
deposu altýna alýnýr. Sonra daha derinlemesine ve uzun süreli testlerden
geçirilmesi için &#34;test (testing)&#34; deposuna alýnýr.
Eðer paket ayrýntýlý test aþamasýndan geçecek kararlýlýkta ve uyumda
olduðuna karar verildiðinde &#34;kararlý (stable)&#34; deposuna
alýnýr. Bunun sonucu olarak Debian'ýn stable deposu çok yüksek kararlýlýkta
ve uyumda çalýþan bir daðýtým sunar. Stable deposundaki yazýlýmlar
görev kritik uygulamalar ve sunucular için harika bir alternatifse
de genellikle yazýlýmlarýn çok eski versiyonlarýndan oluþtuðu için
son kullanýcýlar tarafýndan tercih edilmezler. Son kullanýcýlar yazýlýmlarýný
daha çok testing ve unstable depolarýndan temin etmeyi tercih ederler.

<P>
Debian'ýn ününün bir diðer nedeni ise DEB paket yöneticisi ve bu paket
yöneticisi üzerindeki apt yazýlýmýdýr. apt ile Internet üzerindeki
depolardan istediðiniz bir uygulamanýn tüm baðýmlýlýklarý ile beraber
sisteminize kurulmasýný saðlamanýz son derece kolaydýr. Ayrýca Debian'ýn
tüm güncellemeleri de apt tarafýndan gerçekleþtirilebilir. Debian'ýn
depolarýnda yer vermediði (bunlar gerçekten çok az sayýdadýr) yazýlýmlara
da apt yardýmý ile resmi olmayan depolardan sahip olabilirsiniz.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>%100 özgür, çok iyi hata takip sistemi ve topluluk çözümleri,
stable sürümü çok iyi test edilmiþ ve neredeyse %100 güvenli, apt
yardýmýyla çok kolay program kurma.
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Grafiksiz kurulum arabirimi, güncel olmayan kararlý sürüm,
yetersiz konfigürasyon araçlarý.
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>DEB
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Bir çok ülkedeki yansýlarý ile yüksek eriþilebilirlikte.
</DD>
</DL>

<P>

<h3><a class="dagitim" NAME="SECTION00032100000000000000">
2.2.1 Enver Altýn'ýn Debian hakkýndaki yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
Bu daðýtýmý kullanýyor olmamýn önemli bazý nedenleri:
<BR></BLOCKQUOTE>
<P><DL>
<DT><STRONG>Genel&nbsp;amaçlý:</STRONG></DT>
<DD>Sunucu için ayrý, masaüstü için ayrý, gömülü sistemler
için ayrý sürümleri yok.
</DD>
<DT><STRONG>Kapsamlý:</STRONG></DT>
<DD>3 farklý Debian paket arþivi, her türden kullanýcýyý
tatmin edecek çok sayýda ve dikkatle paketlenmiþ kullanýma hazýr yazýlým
içeriyor. 
</DD>
<DT><STRONG>Yetenekli:</STRONG></DT>
<DD>Daðýtýmýn saðlam, düzenli, yüksek performanslý ve
güvenilir kalabilmesini saðlayan çok sayýda araca sahip. Özgür: Debian
GNU/Linux projesi kar amacý gütmeyen bir dernek tarafýndan korunuyor
ve destekleniyor, fakat kiþi-kurum-kuruluþlarýn kararlarýndan baðýmsýz. 
</DD>
<DT><STRONG>Yaygýn:</STRONG></DT>
<DD>En çok kullanýlan birkaç daðýtýmdan biri.
<BR>
<P>
</DD>
</DL><BLOCKQUOTE>
Bence Debian GNU/Linux projesinin diðer tüm daðýtým projelerinden
en büyük farký; köklü, tam ve bütün bir özgür yazýlým topluluðu projesi
olarak yoluna devam etmiþ ve edecek olmasý. Debian hiçbir zaman kar
amacý güden bir þirket haline gelmeyecek, daima açýk kaynak kodlu
özgür bir iþletim sistemi olarak kalacak. Debian projesinin kurucusu
Ian Murdock'in da belirttiði gibi Debian projesi, projede aktif çalýþan
binlerce geliþtirici tarafýndan öylesine korunuyor ve destekleniyor
ki, durdurulmasý mümkün deðil. Bu projeyi Debian yapan asýl gerçek,
dünyanýn her yerinden katýlan çok sayýda geliþtiricinin yadsýnamaz
motivasyonu ve birlikteliðidir.
<BR></BLOCKQUOTE>
<P>
<BLOCKQUOTE>Bir baþka önemli yaný, daðýtýmýn güvenilir ve kararlýlýðýnýn saðlanabilmesi
için 3 farklý koldan geliþtiriliyor olmasý:
<BR></BLOCKQUOTE>
<P><DL>
<DT><STRONG>Stable:</STRONG></DT>
<DD>Saðlamlýðýný ve güvenilirliðini zaman içerisinde ispatlamýþ
ve uzun süre test edilmiþ paketler Stable daðýtýmý içerisinde yer
alýr. Stable, genellikle güvenliðin önemli olduðu ve bakým maliyetlerinin
düþük olmasý gereken; kýsaca çalýþmasý ve unutulmasý gereken sistemler
(örneðin sunucular) üzerinde kullanýlýr. Stable daðýtýmý içerisindeki
paketler, genellikle güncel deðildir, biraz eskimiþlerdir. Bu yazýlýmlarla
ilgili bir güvenlik güncelleþtirmesi derhal yüksek önem derecesi ile
duyurulur; fakat yeni sürümlerine güncellenmez, yalnýzca eski sürüm
içerisindeki hatalar giderilir. Stable sürüm genellikle 2 yada 3 yýlda
bir, içerisindeki tüm paketler yeni sürümlerine güncellenmiþ biçimde
duyurulur. 
</DD>
<DT><STRONG>Testing:</STRONG></DT>
<DD>Stable daðýtýmýna kýyasla bir hayli daha güncel bir
sürümdür, bu sürüm içerisine yerleþtirilen paketler Debian geliþtiricileri
ve diðer gönüllüler tarafýndan kýsa bir süre (15 gün, 1 ay gibi) test
edilmiþlerdir, temel fonksiyonlarýnýn çalýþtýðý görülmüþtür. Birçok
açýdan saðlamdýr ve çoðunlukla sorunsuz çalýþacaktýr. Fakat bu sürüm
içerisindeki tüm paketlerin tamamýyla güvenilir olduklarý söylenmez.
Testing sürümü içerisinde uzunca bir dönem test edilen ve tüm hatalarý
ayýklanabilen paketler, birkaç yýllýk aralýklarla alýnarak Stable
sürüm haline getirilir. Bence testing sürümü, genellikle gündelik
iþleri bilgisayarla ilgili olmayan insanlar tarafýndan tercih edilmelidir. 
</DD>
<DT><STRONG>Unstable:</STRONG></DT>
<DD>Herhangi bir özgür yazýlýmýn duyurulmuþ olan en son
sürümüne ait derlenmiþ ve kullanýma hazýr paketi Unstable içerisinde
kolaylýkla bulabilirsiniz. Bu paketler genellikle 1 yada 2 kez birkaç
kiþi tarafýndan test edilmiþlerdir, çeþitli özellikleri düzgün çalýþmýþtýr
ve bu sayede Unstable içerisine eklenmiþlerdir. Fakat unstable içerisindeki
yazýlýmlarýn kararlý olmasý beklenmez. Bir sonraki güncellemede çalýþmayabilir,
hiç çalýþmayabilir, çalýþmasý sýrasýnda çeþitli hatalar verebilir;
veya mucizevi biçimde (!) çalýþabilir de. Belirtmeliyim ki bu metni,
1 yýldan uzun süre önce kurduðum ve (dizüstü bilgisayarýma taþýmýþ
olduðum halde) þimdiye kadar pek de fazla sorun yaþamadýðým unstable
sistemim üzerinde yazýyorum. Unstable sürüm içerisinde 15 gün, 1 ay
gibi bir süre ile test edilen paketler Testing sürümüne aktarýlýr
ve daha uzun bir test süreci için sürüm numarasý sabitlenmiþ olur.
Unstable sürüm IT profesyonelleri, yazýlým geliþtiriciler ve bu sistemleri
kurcalayýp bozmaktan zevk alan kiþiler tarafýndan daha çok tercih
edilir.
<BR>
<P>
</DD>
</DL><BLOCKQUOTE>
Ayrýca experimental adýnda bir alt daðýtým daha Debian tarafýndan
oluþturulmakta, fakat bu alt daðýtým tam ve bütün bir sistem deðil,
yalnýzca bazý deneysel paketleri de içermesi amacýyla kullanýlmakta.
<BR></BLOCKQUOTE>
<P>
<BLOCKQUOTE>Debian GNU/Linux projesi çeþitli teknik yönleri ile de diðer bazý
daðýtýmlara kýyasla daha yeteneklidir:
<BR></BLOCKQUOTE>
<P><DL>
<DT><STRONG>Geliþkin&nbsp;paket&nbsp;yönetimi&nbsp;sistemi:</STRONG></DT>
<DD>APT (Advanced Package Tool)
ve DPKG (Debian Package Manager), sistemdeki paketler arasýndaki baðýmlýlýklarý,
olasý sorunlarýn çözülmesini ve sistemdeki tüm/bazý paketlerin güncellenmesini
mümkün olduðunca basit, otomatik, anlaþýlýr ve kolay hale getirir.
Fakat bu iþlemi yaparken, örneðin kullanýcýlarýn elle deðiþtirdikleri
yapýlandýrma dosyalarý arasýndaki farklarý otomatik birleþtirebilir,
eksik/yarým kurulmuþ (genellikle böyle bir hata olmaz) paketleri düzeltebilir
ve paket ekleme/kaldýrma iþlemleri sýrasýnda sistemin bütünlüðünü
ve çalýþabilirliðini saðlamaya yardýmcý olur. APT, bir süredir RedHat
tabanlý sistemlerde (SuSE, Fedora, Mandrake gibi) de APT-RPM yapýsý
sayesinde kullanýlmakta. 
</DD>
<DT><STRONG>Güncellik:</STRONG></DT>
<DD>Testing ve unstable sürümleri içerisindeki paketlerin
güncel sürümlerine ulaþabilmeleri için büyük çabalar sarfedilir. 
</DD>
<DT><STRONG>Zengin&nbsp;yazýlým&nbsp;depolarý:</STRONG></DT>
<DD>Testing içerisinde 30.000 civarýnda,
unstable içerisinde 70.000 civarýnda derlenmiþ ve kullanýma hazýr
durumda yazýlým paketi bulunur. Debian dýþýndaki tüm daðýtýmlarýn
paket sayýlarýnýn toplamýndan fazla bir rakam olduðu açýk sanýrým.
Herhangi bir yazýlýmý, nispeten hýzlý bir internet baðlantýnýz varsa
sisteminize kurmanýz için genellikle birkaç dakika yeterlidir. Derlemek,
yapýlandýrmak gibi iþlerle çoðunlukla uðraþmazsýnýz.
</DD>
<DT><STRONG>x86&nbsp;dýþýndaki&nbsp;platformlara&nbsp;destek:</STRONG></DT>
<DD>Debian GNU/Linux projesi
x86 sistemlerin yaný sýra hemen sayabileceðim m68k, alpha, ppc, ppc64,
AMD x86-64, sparc, sparc64 vb. gibi çok sayýda donaným mimarisine
de (en azýndan stable sürüm içerisinde) destek saðlar ve bu sistemler
üzerine de kolaylýkla kurulabilir.
</DD>
<DT><STRONG>Dikkatle&nbsp;hazýrlanmýþ,&nbsp;kaliteli&nbsp;paketler:</STRONG></DT>
<DD>Tüm Debian paketleri,
önceden belirlenmiþ çok sayýda kural ve kriterden geçmiþlerdir, dikkatle
hazýrlanmýþlardýr ve sistemin bütünlüðünü bozmazlar. apt-get install
postgresql komutunu verdiðinizde, Debian sisteminiz PostgreSQL sunucu
kurulumu için gerekli olan tüm diðer paketlerle birlikte PostgreSQL'i
sisteminize kurar, yapýlandýrýr ve sizin için kullanýma hazýr hale
getirerek PostgreSQL servisini baþlatýr. Çoðunlukla sadece izlersiniz.
Eðer paketlerin çalýþabilmesi için bir yapýlandýrma gerekiyorsa, basit
diyaloglarla fikriniz alýnýr, bu þekilde isterseniz kuruluma müdahale
edebilirsiniz ancak çoðunlukla öntanýmlý ayarlar sorunsuz çalýþýr.
Tüm Debian paketleri, az da olsa çeþitli belgelerle birlikte sisteme
kurulur (man/info sayfalarý, HOWTO/README belgeleri veya hiçbiri yoksa
en azýndan ChangeLog dosyalarý, o da yoksa paketi hazýrlayan kiþinin
tecrübelerini yazdýðý çeþitli dosyalar mutlaka /usr/share/doc/paketadi
altýnda yer alýr).
</DD>
<DT><STRONG>Güvenilir&nbsp;güncelleme&nbsp;prosedürü:</STRONG></DT>
<DD>apt-get dist-upgrade -u gibi
basit bir komutla, veya Synaptic gibi grafik arayüz yazýlýmlarýyla
birkaç týklama ile tüm sisteminizi kolaylýkla güncelleyebilirsiniz.
Sisteminizi güncellediðinizde genellikle yeni sürüme güncellendikten
sonra (en azýndan testing ve stable için) yazýlýmlar sorunsuz çalýþacaktýr.
Eðer, örneðin PostgreSQL güncellemesinden sonra, bu sunucuya ait veritabaný
dosyalarýnýn da yeni sürüme güncellenmesi gerekiyorsa, genellikle
bu iþlem otomatik olarak yapýlýr veya nasýl yapýlacaðý açýk biçimde
belirtilir. Güncelleme sýrasýnda asla veri kaybedilmez...
<BR>
<P>
</DD>
</DL><BLOCKQUOTE>
Görsel arayüze sahip ve yeni baþlayan kullanýcýlara hitab edebilen
bir kurulum sistemine sahip olmayýþýmýz bir dezavantaj, fakat bu sorunun
çözülebilmesi için bazý projeler üzerinde çalýþýlmakta. Sistem yapýlandýrma
araçlarý konusunda yetersizlik mevcut.
<BR></BLOCKQUOTE>
<P>
<BLOCKQUOTE>Debian içerisinde Debian projesi içerisinde geliþtirilmiþ olan yapýlandýrma
araçlarý yoktur. Debian, sistemdeki çeþitli yazýlýmlarýn kurulum sýrasýnda
otomatik olarak yapýlandýrýlmasýný saðlamaya çalýþýr, fakat, örneðin
PostgreSQL veya Apache için görsel bir yapýlandýrma aracý barýndýrmaz.
Eðer isterseniz, mesela Webmin'i apt-get install webmin komutu ile
kolaylýkla kurabilirsiniz. Bu gibi çok sayýda genel amaçlý yapýlandýrma
aracý Debian üzerinde sorunsuz çalýþacaktýr, fakat SuSE'deki YaST
veya RedHat'in yapýlandýrma araçlarý gibi renkli yazýlýmlar Debian'da
kullanýlmaz.
<BR></BLOCKQUOTE>
<P>
<BLOCKQUOTE>Debian projesi bu yönüyle, sistemde neler olup bittiðini ve kurduðunuz
yazýlýmlarý nasýl kullanacaðýnýzý bildiðinizi (yahut öðreneceðinizi)
varsayar. Kendi adýma bu konuda GNOME System Tools, Utopia projesi
gibi çeþitli projelerin zaman içerisinde bu açýðý kapatacaðýný düþünüyorum.
<BR></BLOCKQUOTE>
<P>
<BLOCKQUOTE>Debian kullanmaya baþlayabilmek için gerçekten bir engeller dizisi
olduðu doðrudur. Kurmayý beceremeyebilirsiniz, bazý donanýmlarýnýzý
çalýþtýramayabilirsiniz, yapýlandýrmayý beceremeyebilirsiniz, renkli
bir masaüstü ortamýna geçmeyi beceremeyebilirsiniz, ekran çözünürlüðünüzü
deðiþtirmeyi yada farenizin tekerleðini aktif hale getirmeyi de beceremeyebilirsiniz.
Hepimiz bu yollardan geçtik. Öncelikle belirtmeliyim ki, gelecekte
bu sorunlarý yaþadýðýnýz ve gördüðünüz için þanslý olduðunuzu düþüneceksiniz;
çünkü sizden sonraki &#34;yeni yetmeler&#34; bu sorunlarý
hiç görmemiþ ve nasýl çözüldüðünü bilmiyor olacaklar, sizden daha
az tecrübe sahibi olacaklar.
<BR></BLOCKQUOTE>
<P>
<BLOCKQUOTE>Eðer sistemleri kurcalamayý ve karýþtýrmayý seviyorsanýz, örneðin
RedHat veya SuSE gibi bir daðýtýmý kendinize uydurmak için bir miktar
zaman harcamýþsanýz ve Debian'a geçmeyi düþünüyorsanýz, belki kýsa
bir süre Slackware veya Gentoo gibi daðýtýmlarla oynamak isteyebilirsiniz.
Size yeterli altyapý saðlayacaktýr.
<BR></BLOCKQUOTE>
<P>
<BLOCKQUOTE>Ama itiraf etmeliyim ki, bu iþ gerçekten birazcýk sabýr ve çaba gerektirecek.
Hazýr hissetmiyorsanýz, daha kolay birþeyler deneyin. Buraya tekrar
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
Uzun bir süre bir çok kiþiye Red Hat<A NAME="tex2html16"
  HREF="#foot327"><SUP>8</SUP></A>, Linux'u, Linux da Red Hat'ý çaðrýþtýrmýþtýr. Bunu en büyük sebebi
Red Hat'ýn dünya çapýnda en tanýnmýþ Linux firmalarýndan birisi olmasýdýr.
Red Hat Inc., 1995'te Bob Young ve Marc Ewing tarafýndan kurulmuþtur.
Yakýn zamana dek kâr amacý gütmeyen þirket, özellikle saðladýðý teknik
destek ve Red Hat Enterprise ürünleriyle bu tavrýný deðiþtirmiþtir.
Red Hat Linux 9, Red Hat Linux ürün zincirinin son halkasýdýr, 2003
yýlýna gelindiðinde Fedora Core sürümü onun yerini almýþtýr. Red Hat
tarafýndan resmi olarak desteklense de, Fedora<A NAME="tex2html18"
  HREF="#foot328"><SUP>9</SUP></A> özgür yazýlým geliþtiricilerinin katýlýmýyla varlýðýný sürdürmektedir,
ve ayný zamanada Red Hat Enterprise Linux ürünü için bir test ortamý
görevi görmektedir.

<P>
Red Hat Linux ve dolayýsýyla Fedora Core'u özel yapan þey kararlý
ve bilinen paketlerin, saðlam bilgi ile biraraya getirilmesidir. Paketler
güncel deðildir; güvenlik güncellemeleri dýþýnda, yeni bir beta versiyon
çýktýðýnda paket versiyonlarý dondurulmaktadýr. Sonuç, iyi test edilmiþ,
nispeten kararlý bir Linux daðýtýmýdýr. Bug rapor etme ve beta programlar
kullanýcýlara açýktýr ve çok sayýda e-posta listesi bulunmaktadýr.
Bu özellikleriyle Red Hat Linux, dünya çapýndaki sunucularýn bir çoðunda
tercih edilmektedir. Ayrýca RPM paket yöneticisi, Red Hat'ýn Linux'a
katkýlarýndan birisidir ve Fedora da daðýtýmlarýn en çok tercih ettikleri
paket yöneticisi olan RPM üzerine inþa edilmiþtir.

<P>
Fedora, Red Hat'ýn enterprise olmasýnýn ardýndan fork eden devamý
niteliðindeki bir daðýtým olarak özgür yazýlým camiasý tarafýndan
desteklenmekte ve geliþimine devam etmektedir. Red Hat'ýn eski sürümlerine
nazaran daha unstable ve yeniliðe açýk bir profil sergilemekte ve
son kullanýcýlara Red Hat'ýn eski haline nazaran daha fazla hitap
etme gayreti içerisindedir.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Geniþ kullaným alaný, iyi topluluk desteði, yenilikler, yetersiz
olmayan yapýlandýrma araçlarý, yýllarýn deneyimini miras almýþ olan
kararlý altyapý. 
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Nispeten kararsýz, hatalarla karþýlaþma olasýlýðý nispeten
yüksek, CD tabanlý daðýtým. 
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>RPM 
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Bir çok ülkedeki yansýlarý ile yüksek eriþilebilirlikte. 
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
  HREF="#foot329"><SUP>10</SUP></A>, eski bir Stampede Linux ve FreeBSD geliþtiricisi olan Daniel Robbins
tarafýndan yaratýlmýþtýr. FreeBSD'de bulunan otomatik kurulum sistemi
&#34;ports&#34;dan esinlenilerek, Gentoo altýnda &#34;portage&#34;
oluþturulmuþtur. Bu konuda detaylý bilgi Daniel Robbins'in <A NAME="tex2html22"
  HREF="#foot330"><SUP>11</SUP></A> adresindeki &#34;Making the Distribution&#34; isimli yazýsýnda
bulunabilir. Gentoo'nun ilk kararlý sürümü 2002 Mart'ýnda çýkarýlmýþtýr. 

<P>
Gentoo Linux, kaynak kod temelli bir daðýtýmdýr. Kurulum ortamlarý,
önceden derlenmiþ paketler sunsa da, Gentoo'nun dayanaðý, kullanýcýnýn
kaynak kodundan derleme ve kurulum yapmasýdýr. Bunun en önemli avantajý,
kullanýlan yazýlýmlarýn, kullanýcýnýn bilgisayarýnýn mimarisine göre
optimize ediliyor olmasýdýr. Ayrýca, kullanýlan yazýlýmlarýn üst versiyonlarýna
güncellenmesi tek bir komutla saðlanacak kadar kolaydýr. Çoðu Gentoo
kullanýcýsý için, yazýlýmlarýn tamamen güncel olmasý, hatta bazen
saatler içinde güncellenmesi büyük bir kolaylýktýr. Diðer taraftan,
Gentoo'nun kurulmasý ve tamamen iþlevsel, en yeni grafik arabirimlerine
sahip bir daðýtým haline getirilmesi, programlar kaynak koddan derlendiðinden
uzun bir süreçtir; hýzlý bir iþlemciye sahip bir bilgisayar için bile
birkaç gün sürebilmektedir.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Yazýlým paketlerinin sorunsuz kurulumu, çok güncel olmasý,
çok iyi dokumantasyon, kullanýcýnýn ihtiyaçlarýna göre þekillendirilebilirlik,
çok iyi komunite desteði.
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Uzun süren sistem kurulumu ve güncellemeler, konfigürasyon
aracý yetersizliði, kurulumun zor olmasý, daha çok linux'u iyi bilen
ya da araþtýrmaktan yorulmayacak kullanýcýlara hitap ediyor olmasý,
hýzlý Internet eriþimi gerektirmesi.
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>ebuild'ler ile portage yazýlýmlarý aracýlýðý ile kaynak
koddan derleme.
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Bir çok ülkedeki yansýlarý ile yüksek eriþilebilirlikte.
</DD>
</DL>

<P>

<h3><a class="dagitim" NAME="SECTION00034100000000000000">
2.4.1 S. Çaðlar Onur'un Gentoo Hakkýndaki Yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
Gentoo Linux bir LFS projesidir, baþka bir daðýtým tabanlý yapay bir
daðýtým deðildir. Ýçinde barýndýrdýðý yenilikler, getirdiði yeni kavramlar
ile tam bir Özgür Yazýlým projesidir.Kar amacý gütmeyen bir organizasyon
olarak hayatýna devam etmektedir. Yönetim yapýsý ile bir dernek gibi
yönetilen, hiyerarþik bir düzen ile tabana daðýlan ve her geliþtirici/kulanýcýnýn
fikirlerinin dinlendiði/uygulandýðý bir yapýya sahiptir. Gentoo tamamen
internet'ten kurulan / güncellenen bir yapýya sahiptir. Bu sebep ile
belli zamanlarda diðer daðýtýmlarýn yaptýðý gibi CD'ler ile güncellemek
/ sistemi yeniden kurmak gibi problemleri yoktur.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Gentoo'nun asýl amacý özelleþtirilmiþ (iþlemci için, kullaným amacý
için, kullanýcý için), optimize edilmiþ bir daðýtým olmaktýr. Herþeyi
&#34;Portage Tree&#34; denilen paket kurulum dosyalarý deposunu
kullanarak derler, ayarlar, sisteme kurar, kaldýrýr, kullanýlan sisteme
özel optimize edilmiþ hale getirir. Herþeyi derlemek istemeyen kullanýcýlar
için 6 ayda bir çýkan düzenli binary paketler ile sistemi kurmak/güncellemek,
gentoo için üretilmiþ binary dosyalarý kullanmak, kurulu sistemden
binary paketleri almak bunlarý eþlenek mimarideki baþka bir sisteme
kurmak kendilerinin diðer yetenekleri arasýnda sayýlabilir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Gentoo Linux rahatlýkla özelleþtirilebilmesi sebebi ile sunucu / masaüstü
her sistemde rahatlýkla kullanýlabilir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Gentoo Linux çok farklý mimari [ alpha, amd64, arm, hppa, ia64,
macos, mips, ppc, ppc64, s390, sparc, x86, x86-obsd, x86-fbsd ] desteði
içerir. Bunlarýn dýþýnda MacOS, FreeBSD ve OpenBSD gibi platformlara
da &#34;Portage&#34; adý verilen paket yöenticisi ve paket
veritabaný desteði de verir. Gentoo Linux 38 farklý çekirdek arasýndan
seçimi gene kullanýcýya býrakýr, kullanýcý istediði özelliklere sahip
çekirdeði seçer ve kurar [ kendi veya genkernel aracý ile ]. Sistem
altyapýsýný oluþturan paketler [ glibc, binutils, coreutils v.s
v.s ] özenle seçilir ve diðer paketler bu altyapýyý kullanarak üzerine
kurulur. Çekirdek tarafýndan desteði verilmeyen donanýmlar için hazýr
paketlere sahiptir. Nvidia, ATI yada benzeri ekran kartý sahiplerinin
sürücüleri, Intel Centrino'lar için kablosuz að sürücüleri gibi paketleri
kurmak Gentoo ile çocuk oyuncaðýdýr. Çünkü Gentoo bunlarý kurduktan
sonra sistemide bunlar için ayarlar.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Geniþ paket veritabanýndaki paketler önce unstable halde tutularak
sistem bütünlüðünü etkileyecek bir problem olup olmadýðý test edilir.
Belirli bir zaman periyodunda kritik bir hata bildirimi olmazsa ve
paket sorunsuzca çalýþýyorsa paket geliþtiricisi tarafýndan kararlý
halde kuruluma hazýr olarak iþaretlenir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Paket kurulmasý/kaldýrýlmasý/güncellenmesi için &#34;emerge&#34;
adý verilen araç kullanýlýr. Emerge paket baðýmlýlýklarýný çözer,
sisteme paketlerin hangi sýra ile kurulacaðýný bilir, paket veritabanýnda
arama yapabilir. Yani siz yeni kurulmuþ bir sistemde &#34;emerge
kde&#34; derseniz, Gentoo baðýmlýlýk sýrasýna göre X'i kurmak
için gerekli kütüphaneleri/yazýlýmlarý kurar, bunlarýn üzerine X'i
kurar sonrada kde'yi kurar. Her paket &#34;USE&#34; bayraklarý
denilen parametreler ile özelleþtirilebilir. Örneðin bluetooth desteði
olmayan bir bilgisayarda her pakete bluetooth desteði vermek gereksizdir
çünkü o özellikler asla kullanýlmayacaktýr yada destekleyen her pakete
SSL desteði vermek böylece SSL kütüphanelerinin metodlarýnýn kullanýlmasý
istenebilir. Böyle durumlarda &#34;USE&#34; bayraklarý ile
sisteme kurulacak paketlerin hangi destekleri içereceði dinamik olarak
belirlenebilir/deðiþtirilebilir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Sisteme paketler &#34;emerge paketadý&#34; ile kurulup &#34;emerge
unmerge paketadý&#34; ile kaldýrýlabilir. Kurulum sýrasýnda baðýmlýlýklar
otomatik olarak çözülür ve gerekli diðer paketler sisteme kurulur.
&#34;emerge sync&#34; ile &#34;Portage Tree&#34;
adý verilen paketveritabaný rsync kullanýlarak Gentoo sunucularý ile
senkronlanabilir. &#34;emerge -Du system&#34; ile sistemdeki
kütüphaneler gibi sistem altyapýsýný içeren paketler güncellenebilir.
&#34;emerge -Du world&#34; ile sistemdeki kurulu tüm paketler
güncellenebilir. Ayný Debian'daki gibi güncelleme sonrasýnda yapýlmasý
gereken iþlemler var ise Gentoo bunlarý ya otomatik yapar ya da kullanýcýyý
gerekli iþlemleri yapmasý için uyarýr. Güncelleme sonrasý ayar dosyalarýndaki
deðiþiklikleri etc-update yada dispatch-conf adý verilen araçlar ile
kullanýcýya gösterir, deðiþiklikleri yaptýrýr. &#34;emerge&#34;
aracýný konsoldan kullanmak istemeyenler için çok farklý, çeþit çeþit
arayüzler mevcuttur.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Sadece güvenlik güncellemelerinin yapýlmasý diðer versiyon güncellemesi/yeni
özellik güncellemelerinin yapýlmamasý için &#34;glsa_check&#34;
komut kullanýlabilir. &#34;glsa_check&#34; sistemi bilinen
güvenlik problemleri için test eder ve sistemi etkileyen paketleri
günceller.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Gentoo kurulum sýrasýnda henüz bir kurulum arayüzüne sahip deðildir.
Fakat Gentoo sahip olduðu mevcut projeler arasýnda, kurulum sihirbazýda
yer almaktadýr. Bunun dýþýnda &#34;catalyst&#34; denilen
aracý ile kullanýcýlarýn kendi daðýtýmlarýný kendilerinin oluþturmasýna
olanak verir. Ayný araç ile daðýtým dýþýnda Gentoo tabanlý LiveCD
üretmek içinde kullanýlabilir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Gentoo yeni baþlayan kullanýcýlar için kurulum sýrasýnda pek dost
deðildir. Ayrýca genel olarak Gentoo'daki paket derleme süreçleri
temel kullanýcýlar için iyi bir yöntem olmayabilir. Fakat Gentoo optimizasyonlarý,
özelleþtirilebilmesi, içinde barýndýrdýðý araçlar ile ne yaptýðýný
bilen, tecrübeli kullanýcýya çok þey katacak bir daðýtýmdýr. Gentýý
yeni/eski kullanýcýlarý için sahip olduðu geniþ dökümantasyonu, e-posta
listeleri, forumlarýnda aranýlaný bulamamak/yardým alamamak diye bir
kavrama sahip deðildir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Sonuç olarak yeni baþlayan tecrübesiz kullanýcýlarýn CD'yi al, tak,
týkla, kur daðýtýmý Gentoo deðildir. Gentoo yeni baþlayan kullanýcýlarýn
&#34;kolay kullanýlan&#34; daðýtýmýdýr, &#34;kolay
kurulan&#34; deðil. Sahip olduðu paket ve sistem yönetim araçlarý,
dökümanlarý ve gönüllü kitlesi ile Gentoo geleceðin yeni nesil daðýtýmý
olmuþtur. Yeni kullanýcý için mevcut tek zorluk Gentoo kurmaktýr,
Gentoo bir kere kurulduktan sonra güncellemesi, paket kurmasý yeni
baþlayan ve tecrübesiz bir kullanýcý için sorun olmayacak hatta son
kullanýcýya zevkli gelecektir. Tecrübesiz kullanýcý Gentoo kullandýkça
baþka hiçbir daðýtýmý kullanarak elde edemeyeceði bilgi ve tecrübeye
kavuþacaktýr.

</BLOCKQUOTE>

<P>

<h3><a class="dagitim" NAME="SECTION00034200000000000000">
2.4.2 A. Murat Eren'in Gentoo Hakkýndaki Yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
Gentoo'nun sunduðu yeni nesi paket derleme ortamýnýn yanýnda Linux
kullanýcýlarýna sunduðu en büyük nimetlerden birisi yarattýðý bilgi
ambarýdýr. Gentoo'nun offical forumlarý<A NAME="tex2html24"
  HREF="#foot331"><SUP>12</SUP></A> sadece Gentoo deðil tüm Linux kullanýcýlarý için mükemmel bir bilgi
kaynaðýdýr. Çok spesifik dahi olsa rastladýðýnýz bir sorunun çözümünü
bu forumlarda bulmanýz iþten bile deðildir. Ayný zamanda sadece bu
forumlarda dolaþýp tips&amp;tricks formatýndaki forum yazýlarýný okumak
ya da daha önceden yapýlmýþ anketler ve bunlarla ilgili yorumlarý
okumak dahi son derece eðitici ve keyiflidir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Öte yandan Gentoo diðer Linux daðýtýmlarýnýn hiç yakalayamadýðý bir
yardýmlaþma aðýný, bir komünite beraberliðini yakalamýþtýr. <A NAME="tex2html26"
  HREF="#foot332"><SUP>13</SUP></A> adresinden bir listesine göz atabileceðiniz irc kanallarýndan #gentoo
kanalý her an ortalama 800 kiþidir, ve sorduðunuz bir soruya çok hýzlý
yanýt alabilirsiniz.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Ayný zamanda e-posta listeleri de son derece aktiftir. Öyle ki <A NAME="tex2html28"
  HREF="#foot333"><SUP>14</SUP></A> adresinden göz atabileceðiniz e-posta listelerinin kullanýcýlar için
olanýnda günde ortalama N adet mesaj dönmektedir, öyle ki ``N &gt;&gt;200''.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Çaðlar'ýn da yorumunda üstü kapalý olarak belirttiði gibi Gentoo Linux
ile tanýþmak için çok iyi bir alternatif olmayabilir, fakat Gentoo
bilgi ve tecrübe kazanmanýz için size en iyi platformu sunar.

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
GoboLinux masaüstü kullanýcýlar için tasarlanmýþ, kurulumu ve kullanýmý
kolay bir daðýtýmdýr. GoboLinux'u diðer daðýtýmlardan ayýran en temel
yaný yenilikçi dizin yapýsýdýr. Klasik UNIX tarzý dizin aðacýnýn aksine
Gobo'da her uygulama kendi dizinine sahip olur. Bu, yeni kullanýcýlar
için görünürde pek bir þey deðiþtirmese de daha kararlý ve kolay anlaþýlýr
bir dizin yapýsý sunmaktadýr.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Hem yeni hem de deneyimli kullanýcýlar için rahat, farklý
dizin yapýsý ve baþlangýç betikleri sayesinde kolay yönetilir.
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Çok popüler bir daðýtým olmadýðý için derlenmiþ paket ve
yardým belgesi eksiklikleri. 
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>InstallPackage, Compile (tar.gz) 
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Birçok ülkedeki yansýlarý sayesinde yüksek eriþilebilirlikte.
</DD>
</DL>

<P>

<h3><a class="dagitim" NAME="SECTION00035100000000000000">
2.5.1 Fatih Altýnok'un Gobolinux Hakkýndaki Yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
GoboLinux'un dizin yapýsýnda uygulamalar kendi dizinlerine sahiptir.
Böylece bir uygulama yüklemek kadar kaldýrmak da herhangi bir dosyayý
silmek kadar kolaydýr. Peki eski dizin yapýsýna ne oldu, bu sistem
nasýl çalýþýyor? Aslýnda bunun cevabý oldukça basit, simgesel baðlar.
Eski dizin yapýsý da bu dizin yapýsýnýn yanýnda durmakta -GoboHide
çekirdek modülü sayesinde bunlar gizleniyor- ve gerekli yerlere simgesel
baðlar bulunmaktadýr. Bu sayede ayný zamanda Gobo'yu köksüz (rootless)
olarak bir ev dizini altýna kurmak da gayet basittir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>GoboLinux'un dizin yapýsý sayesinde paket yöneticisine daha az iþ
düþmektedir. Her uygulama kendi dizininde bulunduðu için bunlarý doðru
yerlere açmak ve yerlerinin izini takip etmek zorunda deðildir. Bir
paket kaldýrýlacaðý zaman da basitçe uygulamanýn dizini silinir ve
simgesel baðlar onarýlýr. Paket yöneticisi ayrýca FreeBSD ve Gentoo'dakine
benzer bir &#34;port&#34; sistemi kullanabilmektedir, tarif
(recipe) denilen paket derleme tariflerini kullanarak paketleri proje
sayfasýndan indirdiði kaynak koddan da derleyebilir (son sürümüyle
paket yöneticisine Gentoo benzeri bir USE bayraðý (USE flag) sistemi
de eklendi).
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Son kullanýcýlar için bunlar çok önemli rol oynamýyor tabii. GoboLinux
grafiksel kurulum aracýyla, KDE masaüstüyle ve yine grafiksel bir
paket yönetici önyüzüyle geliyor. Daha fazla bilgi için tarafýndan
Türkçeleþtirilmiþ GoboLinux.org'u inceleyebilirsiniz.

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
1998 Temmuz'unda ilk sürümü çýkan, Gaël Duval tarafýndan baþlatýlan
Mandrakelinux projesi<A NAME="tex2html30"
  HREF="#foot334"><SUP>15</SUP></A>, günümüzde ciddi bir popülariteye sahiptir. Geliþtiriciler, Red Hat
daðýtýmýndan yola çýkmýþ, varsayýlan masaüstünü KDE'ye çevirmiþ, kullanýmý
çok kolay bir kurulum ekleyerek &#34;Linux'un kurulumu zordur&#34;
düþüncesini bertaraf etmiþlerdir. Mandrake'nin donaným tanýma ve disk
bölümleme araçlarý, çoðu kiþi tarafýndan piyasanýn en iyisi olarak
görülmekte, ve bu nedenle birçok kullanýcý, diðer daðýtýmlardan çok
Mandrake'ye yönelmektedir.

<P>
Mandrakelinux, özellikle Linux'a yeni baþlayan, ya da alternatif bir
iþletim sistemi denemek isteyen ev kullanýcýlarý arasýnda oldukça
popülerdir. Mandrake, tamamen özgür ve þeffaf bir geliþtirme ortamý
sunmaktadýr. Günlük olarak güncellenen &#34;cooker&#34;
depolarýnda yazýlýmlarýn güncel paketleri bulmak mümkündür.

<P>
Mandrake yüksek oranda güncel bir Linux daðýtýmýdýr. Bunun ters bir
etkisi olarak, kullanýcýlar diðer daðýtýmlara nazaran daha fazla hata
ile karþýlaþabilmekte, sistemin kararlýlýk oraný da diðer daðýtýmlara
göre daha düþük olabilmektedir. Çoðu kullanýcý, en son sürüm programlarý
kullanmak adýna, bazý olasý program kilitlenmelerini, ve ufak hatalarý
kendi masaüstü sistemlerinde kabul etmektedirler.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Kullanýcý dostu kurulum arayüzü, grafik destekli ve baþarýlý
konfigürasyon araçlarý, çok büyük topluluk desteði, kullanýcý dostu
masaüstü görünümü, grafik açýdan etkileyici arayüz, yazýlýmlara son
kullanýcý ihtiyaçlarý ön planda tutularak yapýlan yamalar. 
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Sürümlerinde bolca hata ile karþýlaþýlabilmesi, sürümlerin
önce MandrakeClub üyelerine sunulmasý, yazýlýmlara çok fazla test
edilmeden yapýlan yamalar. 
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>RPM 
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Yeni sürüm çýktýktan hemen sonra FTP kurulumuna sunuluyor,
birkaç hafta içinde ISO'larý sunuluyor. 
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
Almanya'da Klaus Knopper tarafýndan geliþtirilen ve Debian tabanlý
olan Knoppix'in, özellikle otomatik donaným tanýma konusunda çýtayý
yükseðe çektiðini söylemek yanlýþ olmaz. Rahat açýlýþý, sunduðu yazýlýmlarýn
çeþitliliði, on-the-fly sýkýþtýrma tekniði ve sabit dist üzerine kurulum
yapabilmesi özellikleri Knoppix'i bir Linux daðýtýmý olmanýn ötesinde
vazgeçilmez bir araç haline getirmiþtir. Bir kurtarma diski olarak,
Linux'u daha görmemiþ olanlara sunmak amacýyla, ya da satýn almadan
önce bir bilgisayarý denemek amacýyla kullanýlabilmektedir. Bunlarýn
dýþýnda, günlük iþleri görmek amacýyla kullanýlabilecek bir Linux
daðýtýmýdýr.

<P>
Knoppix'in yeni sürümleri, ortalama 2-6 hafta aralýklarla sunulmaktadýr.
Yeni sürümlerde, hatalardan arýndýrýlmýþ yazýlýmlar ve Debian'ýn &#34;kararsýz&#34;
deposundaki son yazýlýmlar bulunmaktadýr.

<P>
Knoppix<A NAME="tex2html32"
  HREF="#foot335"><SUP>16</SUP></A>, Linux medyasý tarafýndan da yakýndan takip edilmektedir. Klaus Knopper'la
yapýlmýþ bir ropörtaj'a <A NAME="tex2html34"
  HREF="#foot336"><SUP>17</SUP></A> adresinden ulaþabilirsiniz. Ayrýca Knoppix hakkýnda daha fazla bilgiye
ulaþmak için, Knoppix-the Great Linux Advocate<A NAME="tex2html36"
  HREF="#foot337"><SUP>18</SUP></A> ve Knoppix 3.4 Has Landed<A NAME="tex2html38"
  HREF="#foot338"><SUP>19</SUP></A> yazýlarýna linklerden ulaþabilirsiniz.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Çok iyi donaným tanýma, sabit disk kurulumu olmadan CD'den
çalýþmasý ve sabit disklere özellikle istenmediði taktirde dokunmamasý,
sistem kurtarma aracý olarak kullanýlabilmesi. 
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Sadece CD'den çalýþtýðý takdirde hýzda ve performansda azalma. 
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>DEB 
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Bir çok ülkedeki yansýlarý ile yüksek eriþilebilirlikte.. 
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
openSUSE Projesi, Novell tarafýndan desteklenen ve Linux'un heryerde
kullanýlmasýný amaçlayan dünya çapýnda bir topluluk programýdýr ve
openSuSe'ye kolayca eriþimi amaçlamaktadýr. Dünyanýn en kullanýlabilir
Linux'unu yaratmak ve daðýtmak için openSUSE, ayný zamanda Novell'in
ödüllü SuSe Linux Enterprise ürünlerinide saðlamaktadýr.

<P>
Daha önceden ismi S.u.S.E. GmBH (Software und System-Entwicklung (Yazýlým
ve Sistem Geliþtirme)) olan SuSe AG, önce Almanya daha sonra ABD'de
kayýtlý bir firma olarak Peter MacDonald tarafýndan 1992'de kurulmuþtur
ve SuSe Linux bu firma çatýsýnda geliþtirilmiþ bir daðýtýmdýr (daha
sonradan SuSE AG firmasýnýn Novell'e satýlmasý sonucunda SuSe Linux,
openSUSE adýný almýþtýr. Bu gün openSUSE, Novell'in SUSE Linux Enterprise
Server ve SUSE Linux Enterprise Desktop isimli ücretli desteðe sahip
2 daðýtýmýnýn kod tabanýný oluþturur).

<P>
Ýlk yýllarýnda Slackware Linux'un Almanca çevirisini yeni bir daðýtým
haline getirmeyi amaçlayan MacDonald 1992 yýlýnýn ortalarýnda ilk
kolay kullanýlýr Linux daðýtýmý amacýna SLS (Softlanding Linux System)
daðýtýmý ile ulaþtý. Bu daðýtým, Linux çekirdeði, X ve TCP/IP'nin
zamanýna göre oldukça geliþmiþ entegrasyonunu kullanýcýya sunmayý
baþarmýþtý. 1992 yýlýnda þirketleþme kararý verildikten hemen sonra
SLS ve Slackware için yazýlým paketleri çýkartmaya baþlayarak geliþtiricilerin
dikkatini çekti. Ardýndan 1994 yýlýnda SLS adýnýn S.u.S.E Linux olarak
deðiþtirilmesiyle ilk CD sürümü olan 1.0 yayýnlandý. 1996 yýlýnda
Florian La Roche'un Jurix daðtýmýyla birleþti ve ilk geliþmiþ S.u.S.E
Linux sürümü olan 4.2 yayýnlandý; bu yýllarda S.u.S.E Linux, Red Hat
Linux tarafýndan yaygýnlaþtýrýlan birçok öðeyi bünyesinde topladý
(Örn. RPM, ve /etc/sysconfig).

<P>
S.u.S.E Linux 5.2 sürümüyle daðýtým yarýþýnda açýk arayla öne çýktý.
Bu daðýtým, geliþmiþ yönetim ve kurulum araçlarý olan YaST (<B>Y</B>et
<B>a</B>nother <B>S</B>etup <B>T</B>ool (<B>B</B>ir <B>d</B>iðer
<B>K</B>urulum <B>A</B>racý)) ve SaX'ý (SuSE advanced X setup)
içeriyordu. Bu araçlar sayesinde geniþ bir donaným yelpazesinin desteklenmesi
ve X'in kolay kurulumu hedefleri baþarýlý oldu.

<P>
Ýlerleyen yýllarda S.u.S.E'nin geliþtirici paylaþýmý programý Xfree86'nýn
(X.org) geliþiminde çok önemli etkilere sebep oldu.

<P>
Günümüzde openSUSE 11.0 sürümüyle halen kolay kurulum ve yönetime
sahip Linux daðýtýmlarýndan biri olarak tutunmayý baþarmýþtýr. YaST
geliþerek yeni sürümünün ismi YaST2 olarak deðiþmiþtir ve YaST2 2006
yýlýnda GPL lisansý ile daðýtýlmaya baþlanmýþtýr.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Kolay kurulum ve yönetim, SaX2 ile neredeyse otomatikleþmiþ
X kurulumu, YaST2 sayesinde kolay sistem kurulum ve yönetimi, geniþ
paket deposu .
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Tüm paketlerin yerelleþtirme özellikleri için ek CD gereksinimi,
belirsiz sürüm yenileme periyodu, bir önceki sürümden yeni sürüme
sistemi kapatmadan güncelleme yapýlamamasý, önceki sürümlerde varolan
paketlerin sonraki sürümlerden kaldýrýlmasý riski, bazý paketlerin
elle derlenmesinde karþýlaþýlan baðýmlýlýk problemleri, topluluk destekli
paket depolarýnýn azalmasý, Novell'in ticari iliþkileri yüzünden daðýtýmýn
geliþtirici kadrosunda eksilmeler.
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>RPM
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Bir çok ülkedeki yansýlarý ile yüksek eriþilebilirlikte..
</DD>
</DL>

<P>

"""""""<h3><a class="dagitim" NAME="SECTION00038100000000000000">
2.8.1 T. Koray Peksayar'ýn openSuSe Hakkýndaki Yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
openSUSE, Novell'in Microsoft'a hisse satýþý sonucunda geliþtirici
kadrosunda kayýplar yaþadý.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Sonrasýnda Microsoft SAMBA projesinin patentli SMB/CIFS kodunu kullandýðý
gerekçesiyle ve SAMBA'nýn Novell tarafýndan openSUSE ile daðýtýlmasý
gerekçesiyle Novell üzerinde baský kurdu.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Bu baský daha sonradan gerekçe deðiþtirerek SMB/CIFS kullanýlan dosya
sunucularýnda Windows yerine Linux kullanýmýnýn artmasýný ticari tehdit
olarak gören bir bakýþ açýsýyla Microsoft baskýlara devam etti.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Bu baskýlar sonucunda Novell Microsoft'la Linux-Windows kod paylaþýmý
saðlayan bir anlaþma imzalayarak bu gerilimi azaltmaya çalýþtý.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Bu anlaþmayla Novell Linux ile Windows arasýnda eþ kullanýlabilirlik
ve uyumluluk saðlanmasýnýn amaçlandýðýný söylese de Linux topluluðu
bu giriþime tepki duydu.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Bu sözleþme kimsenin öz varlýðý olmayan, herkese açýk özgür yazýlýmýn
üzerinde denetim oluþturulmasý olarak görüldü. Bu kod paylaþýmý konusunun
GPL sayesinde saðlanan özgürlük unsurlarýnýn korunmasý mantýðýyla
çeliþmesi de Linux'un geliþimine hiçbir katký saðlamayacaðý yoðun
olarak tartýþýldý ve topluluk tarafýndan kabul gördü.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>10.0 sürümünden önce varolan apt4rpm ile saðlanan apt-get ile alternatif
güncelleme ve paket kurulumundan 10.0 sürümünde vazgeçilmesi büyük
tepki gördü.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>openSUSE 10.0 sürümünde YaST ile saðlanan, zypper ve yum ile paket
güncellemede karþýlaþýlan problemler 10.0 sürümü kullanýcýlarýný zor
durumda býraktý. 11.0 sürümünün de gecikmesiyle kullanýcýlarýn tepkisi
giderek arttý.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Yukarýdaki sorunlar, openSUSE'den diðer daðýtýmlara geçiþin yolunu
açtý ve openSUSE bu dönemde oldukça büyük rakamlarda destek kaybetti.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Tüm bu olumsuzluklara raðmen openSUSE halen raðbet gören daðýtýmlarýn
baþýnda geliyor.

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
  HREF="#foot339"><SUP>20</SUP></A>, 2003 yýlýndan bu yana Tübitak/UEKAE bünyesinde geliþtirilmekte olan,
öncelikli hedefi olarak, biliþim okur-yazarlýðýna sahip bilgisayar
kullanýcýlarýnýn temel masaüstü ihtiyaçlarýný belirlemiþ, proje kapsamýnda
geliþtirilen araçlarý ile kurulum, yapýlandýrma ve kullaným kolaylýðý
sunan bir GNU/Linux daðýtýmýdýr.

<P>
Pardus sürümleri &#34;Kurulan&#34; ve &#34;Çalýþan&#34;
olmak üzere iki farklý CD halinde yayýnlanmaktadýr. Yaklaþýk 3 aylýk
aralýklarla ara sürümler ve yýlda bir kez de yeni sürüm sunulmaktadýr.
Bu yazýnýn yazýldýðý tarih itibariyle Pardus'un son sürümü 2008.1
Hyaena Hyaena'dýr.

<P>
Pardus, grafik arayüze sahip kurulum aracý YALI sayesinde, her düzeydeki
kullanýcýlar tarafýndan birkaç basit adýmda kolayca kurulabilir.

<P>
Pardus projesi kapsamýnda geliþtirilen PiSi paket yöneticisini kullanan
Pardus, deposundaki yazýlýmlarý sistem kararlýlýðýný bozmayacak düzeyde
güncel tutarak kullanýcýlarýna &#34;güncel&#34; ve &#34;kararlý&#34;
bir yapý sunmaktadýr. Güvenlik güncellemeleri dýþýndaki güncellemeler,
öncelikle &#34;test&#34; deposuna alýnarak, paket özelinde
ve depo genelinde oluþabilecek olumsuz durumlara karþý bir dizi teste
tabi tutulur, sorunsuz olduðuna karar verilen paketler kararlý depoya
aktarýlýr.

<P>
Ulusal bir daðýtým olma hedefinin yaný sýra Türkiye'de özgür yazýlýmýn
yayýlmasýný ve bir özgür yazýlým ekosistemi oluþmasýný da amaçlayan
Pardus, bu amaç doðrultusunda oluþturduðu e-posta listeleri, kullanýcý
forumlarý, belgeleme sistemi ve benzeri yapýlarla Türkiye'deki kullanýcýlarýn
kendi dillerinde daha çok belge bulabilmelerini ve destek alabilmelerini
saðlamaktadýr. Bunun yanýnda çeþitli gönüllü giriþimler de Pardus
kullanýcýlarýna ek paket depolarý ve yardým kanallarý sunmaktadýr.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Kolay kurulum, kolay kullanýmlý sistem araçlarý, güncel paket
deposu, hýzlý ve pratik paket yönetim sistemi
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Yansý sayýsýnýn azlýðý, Pardus araçlarý ile ilgili dokümanlarýn
az olmasý, 64 bit sürümünün bulunmamasý, sadece standart kurulumu
desteklemesi
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>PiSi
</DD>
<DT><STRONG>(Ýnternet)</STRONG></DT>
<DD>ISO'larý Türkiye'deki bir çok yansý ve yurt dýþýndaki
birkaç yansý tarafýndan sunuluyor.
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
  HREF="#foot340"><SUP>21</SUP></A>, Patrick Volkerding tarafýndan 1992 de yaratýlmýþ olan en eski Linux
daðýtýmýdýr. Grafiksel konfigürasyon araçlarý ve basit arayüzler sunmaktan
ziyade, sizin Linux'a aþina olmanýzý bekleyen bir yapýya sahiptir.
Diðer daðýtýmlar geliþtirmesi zor fakat kullanmasý kolay arayüzler
sunarken, Slackware'de her þeyi konfigürasyon dosyalarýna bizzat el
atarak halletmeniz gerekir. Bundan dolayý Slackware kullanmayý düþünen
acemiler Linux öðrenmek için zaman harcamaya hazýr olmalýdýrlar.

<P>
Bununla birlikte, Slackware'in bir çok kullanýcý üzerinde karþý konulmaz
bir büyüsü vardýr. Yüksek düzeyde kararlý ve güvenli bir yapýsý vardýr
- sunucu olarak kullanmaya son derece uygundur. Deneyimli Linux yöneticileri
onu, daðýtým üreticilerinin çeþitli yamalarý ve eklentilerinin azlýðýndan
dolayý hatasýz ve kararlý bulurlar. Yeni versiyonlarýnýn daðýtým sýklýðý
düþüktür (yaklaþýk yýlda bir kez ), ancak güncel paketleri her zaman
bulunabilmektedir. Slackware, Linux ile ilgili derinlemesine bilgi
sahibi olmak isteyenler için ideal bir daðýtýmdýr.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Yüksek kararlýlýk, daha az hata, UNIX prensiplerine sýký
baðlýlýk. 
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Neredeyse hiç konfigürasyon aracý olmamasý, yeni kullanýcýlar
için zor kurulum. 
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>TGZ 
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Bir çok ülkedeki yansýlarý ile yüksek eriþilebilirlikte..
</DD>
</DL>

<P>

<h3><a class="dagitim" NAME="SECTION000310100000000000000">
2.10.1 Doruk Fiþek'in Slackware Hakkýndaki Yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
Nisan 1993'te yayýnlanan ilk sürümünden beri Slackware, en UNIX-vari
Linux daðýtýmý olmayý hedefliyor.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Slackware'i bir daðýtým olarak tek bir kelimeyle tanýmlamak gerekseydi,
bu herhalde &#34;basit&#34; olurdu. Koruduðu basit yapýsý;
kavranmasýný, hakim olunmasýný ve yönetilmesini kolaylaþtýrýr.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Genellikle popüler daðýtýmlar, kendi kullanýcýlarýnýn arzularýný karþýlayabilmek
için arka planda ciddi anlamda karmaþýk yapýlara yönelirler. Sistemi
gerçek anlamda tanýyarak daðýtýmýn kendi yönetim araçlarý dýþýnda
sisteme müdahale edebilmek için ciddi bir efor ve zaman gerekebilir.
Üstelik kendilerine özgü oluþturduklarý karmaþýk yapýlarýna özgür
yazýlýmlarýn geliþtirildikleri gibi monte edilebilmesi de oldukça
zordur. Bu nedenle yazýlýmlarda daðýtýma özgü ciddi deðiþiklikler
(yamalar) yapmak durumunda kalýrlar.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Slackware ise tüm bu karmaþadan uzak durarak, geliþimini özgür yazýlýmlarýn
geliþimine paralel olarak devam ettirir. Her derde deva olmaya çalýþmak
yerine özgür yazýlým dünyasýnýn bir 'ayna'sý görevi görür - ne eksiðini,
ne de fazlasýný yansýtýr. Basit yapýsý sayesinde yazýlýmlarýn yeni
sürümleri kolaylýkla daðýtýma katýlýr. Slackware'in en güncel sürümünü
içeren -current aðacý, birçok daðýtýmdan daha güncel yazýlýmlar içerir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Slackware'de sürümler arasýnda daðýtýmýn yapýsýnda ciddi deðiþiklikler
olmaz. Daðýtýmýn yapýsýnýn sürekliliði, kullanýcýnýn daðýtým ile uðraþmak
yerine yazýlýmlarýn yeni sürümlerine ve özelliklerine odaklanmasýna
olanak tanýr. 
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Slackware size sistemi arada baþka bir katman olmaksýzýn kontrol etmenize
ve kendi iþinizi kendinizin yapmasýna olanak tanýr. Öte yandan bu,
ne yaptýðýnýzý biliyor olmanýzý ya da öðrenmenizi de gerektirir.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Linux'un günümüzdeki kadar kitleselleþmediði bir dönemin en yaygýn
daðýtýmlarýndan olan Slackware, hala UNIX köklerine baðlý kalmayý
tercih eden Linux kullanýcýlarý tarafýndan tercih edilmeye devam ediliyor.

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
Ubuntu Canonical Ltd. Tarafýndan baþlatýlan ve finanse edilen bir
açýk kaynak iþletim sistemi projesidir. Ýlk sürümü Ubuntu 4.10 Warty
Warthog 2004 Kasým ayýnda daðýtýlmaya baþlanmýþtýr.
Ayrýca kurulum medyalarýný posta yoluyla ücretsiz olarak son kullanýcýya
ulaþtýran ilk daðýtýmdýr. 

<P>
Güney Afrikalý bir þirket tarafýndan yürütüldüðü halde açýk kaynak
olan bu daðýtým, arkasýna aldýðý bu güçle beraber bir çok son kullanýcýnýn
bilgisayarýnda tercih ettiði daðýtým olmuþtur. 2007 yýlýnda yapýlmýþ
olan bir araþtýrmanýn sonucuna göre<A NAME="tex2html44"
  HREF="#foot341"><SUP>22</SUP></A> GNU/Linux kullanýcýlarýnýn %30 gibi büyük bir kýsmý bilgisayarlarýnda
Ubuntu kullanmaktadýr. 

<P>
Ubuntu genel olarak basit ve kullanýþlýdýr. Son kullanýcý hiç bir
sýkýntý çekmeden bilgisayarýna kurup sorun yaþamadan kullanmaya baþlayabilir.

<P>
<DL>
<DT><STRONG>(+)</STRONG></DT>
<DD>Geniþ kullaným alaný, kararlý ve güncel olmasý , grafiksel
kurulum, grafiksel yapýlandýrma araçlarý, iyi belgelendirme, her dilde
yeterli miktarda kaynak sunmasý, aktif topluluk.
</DD>
<DT><STRONG>(-)</STRONG></DT>
<DD>Ýleri düzey kullanýcýlara hitap etmiyor olmasý, sürüm güncellemelerinde
hatalar yaþanmasý.
</DD>
<DT><STRONG>(PYS)</STRONG></DT>
<DD>DEB
</DD>
<DT><STRONG>(Internet)</STRONG></DT>
<DD>Birçok ülkede ve birçok þehirde yansýlarý ile yüksek
eriþilebilirlik.
</DD>
</DL>

<P>

<h3><a class="dagitim" NAME="SECTION000311100000000000000">
2.11.1 D. Uður Karatay'ýn Ubuntu Hakkýndaki Yorumu</A>
</H3>

<P>
<BLOCKQUOTE>
Ubuntu ile ilk tanýþmam 2004 yýlýndaki sürümle baþlamýþtýr. O zamana
kadar GNU/Linux kullanmamýþtým. Ýlk sürümüyle bile son kullanýcý dostu
olmasý beni çok etkilemiþtir. Ayrýca iþi bilgisayarlarla alakalý olmayan
ama bilgisayarýnda özgür yazýlýmlar kullanmak isteyen son kullanýcýlar
için çok az uðraþ ile kararlý ve kullanýlabilir hale gelen bir daðýtým
olmasý da daha sonra denediðim diðer daðýtýmlardan vazgeçip Ubuntu'ya
dönmemi saðladý. 2004 yýlýnýn Kasým ayýndan beri bilgisayarýmda sadece
GNU/Linux kullanýyorum, genel olarakta Ubuntu ve türevlerini kullandým.
Buna raðmen baþka bir iþletim sistemine hiç ihtiyaç duymadýðýmý rahatlýkla
söyleyebilirim. Dýþarýda bilgisayar kullanmam gerektiði zaman taþýnabilir
belleðime kurduðum Ubuntu ile iþlerimi rahatlýkla hallediyorum.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Biraz teknik özelliklerden bahsetmek gerekirse, Sunucu ve masaüstü
sürümleri olarak iki farklý þekilde ulaþabilir durumda Ubuntu. Bunun
yararý ise kullanýcýyý gereksiz paketleri yükleme ve onlarý kaldýrma
iþinden uzak tutmasý. Bir nevi ihtiyaç duyulaný ihtiyaç duyana vermesi
ve fazlasýný yapmak için özel bir çaba göstermemesi de artý puan olarak
geri dönüyor. Ayrýca 18 ayda bir çýkan LTS sürümleri kullanýcýlarýn
gerekli gördükleri takdirde 18 ay boyunca sistemlerini hiç deðiþtirmeden
güncellemeleri ve yardým almalarýný saðlýyor. Çok yaygýn olmasý ekstra
puan kazandýrýyor. 55 dilde kullanýcýlarýna destek sunmasý ve topluluk
desteðinin çok güçlü olmasý Ubuntu'yu yeni baþlayan ve sadece iþini
görmek isteyen son kullanýcýlar için vazgeçilmez yapýyor. Debian tabanlý
bir daðýtým olmasý nedeniyle paket yönetim sistemi olarak APT kullanýyor
ve bu son kullanýcý için çok büyük kolaylýklar sunuyor. Lazým olan
herhangi bir paketi kurmak için paket yöneticisinden seçmek ve kur
demek yeterli oluyor. Eðer terminale alýþýksanýz yine tek bir komut
iþinizi hallediyor. 6.06 sürümüne kadar PPC ve Sparc mimarilerine
de destek veren Ubuntu artýk sadece x86 ve amd64 mimarilerine destek
vermekte ama bu bir eksi puan kazandýrmýyor. Nedeni ise hedeflenen
masaüstü kullanýcýsýnýn zaten bu iki mimariden birine sahip olmasý.
</BLOCKQUOTE>
<P>
<BLOCKQUOTE>Sonuç olarak son kullanýcýyý hedefleyen bir daðýtým olmasý sebebiyle
ileri düzey kullanýcýlara hitap etmeyen, hýzlý ve kolay kurulum, yüksek
kullanýlabilirlikle evlerimizde ve iþ yerlerimizde düzenli olarak
kullanabileceðimiz bir daðýtým olarak size iyi bir ortam sunar.

</BLOCKQUOTE>

<P>

<H1><A NAME="SECTION00040000000000000000">
3 Teþekkürler</A>
</H1>

<P>

<UL>
<LI>Alp Öztarhan
</LI>
<LI>Alper Kanat
</LI>
<LI>Doruk Fiþek
</LI>
<LI>D. Uður Karatay
</LI>
<LI>Engin Ýlkiz
</LI>
<LI>Enver Altýn
</LI>
<LI>Fatih Altýnok
</LI>
<LI>Murat Koç
</LI>
<LI>S. Çaðlar Onur
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
4 Yasal Açýklamalar</A>
</H1>

<P>

<H2><A NAME="SECTION00051000000000000000">
4.1 Telif Hakký ve Lisans</A>
</H2>

<P>
Bu belgenin telif hakký 2004-2008 A. Murat EREN'e aittir. Bu belgeyi,
Free Software Foundation tarafýndan yayýnlanmýþ bulunan GNU Özgür
Belgeleme Lisansýnýn 1.1 ya da daha sonraki sürümünün koþullarýna
baðlý kalarak kopyalayabilir, daðýtabilir ve/veya deðiþtirebilirsiniz.
Bu Lisansýn bir kopyasýný <TT><A NAME="tex2html46"
  HREF="http://www.gnu.org/copyleft/fdl.html">http://www.gnu.org/copyleft/fdl.html</A></TT>adresinde bulabilirsiniz.

<P>
Linux, Linus Torvalds adýna kayýtlý bir ticarî isimdir.

<P>

<H2><A NAME="SECTION00052000000000000000">
4.2 Feragatname</A>
</H2>

<P>
Bu belgedeki bilgilerin kullanýmýndan doðacak sorumluluklar, ve olasý
zararlardan belge yazarý sorumlu tutulamaz. Bu belgedeki bilgileri
uygulama sorumluluðu uygulayana aittir.

<P>
Tüm telif haklarý aksi özellikle belirtilmediði sürece sahibine aittir.
Belge içinde geçen herhangi bir terim bir ticarî isim ya da kuruma
itibar kazandýrma olarak algýlanmamalýdýr. Bir ürün ya da markanýn
kullanýlmýþ olmasý ona onay verildiði anlamýnda görülmemelidir. 

<BR><HR><H4>Dipnotlar</H4>
<DL>
<DT><A NAME="foot320"
 HREF="dagitimlar.html#tex2html2"><SUP>1</SUP></A>
<DD>GNU Web Sayfasý <TT><A NAME="tex2html3"
  HREF="http://www.gnu.org">http://www.gnu.org</A></TT>

<DT><A NAME="foot321"
 HREF="dagitimlar.html#tex2html4"><SUP>2</SUP></A>
<DD>Linus Torvalds'ýn Linux telaffuzu <TT><A NAME="tex2html5"
  HREF="http://www.paul.sladen.org/pronunciation/torvalds-says-linux.wav">http://www.paul.sladen.org/pronunciation/torvalds-says-linux.wav</A></TT>

<DT><A NAME="foot322"
 HREF="dagitimlar.html#tex2html6"><SUP>3</SUP></A>
<DD><TT><A NAME="tex2html7"
  HREF="http://cekirdek.pardus.org.tr/~meren/gnu.html">http://cekirdek.pardus.org.tr/~meren/gnu.html</A></TT>

<DT><A NAME="foot323"
 HREF="dagitimlar.html#tex2html8"><SUP>4</SUP></A>
<DD>LKD Web Sayfasý <TT><A NAME="tex2html9"
  HREF="http://www.lkd.org.tr">http://www.lkd.org.tr</A></TT>

<DT><A NAME="foot324"
 HREF="dagitimlar.html#tex2html10"><SUP>5</SUP></A>
<DD>LKD E-posta Listeci Arayüzü <TT><A NAME="tex2html11"
  HREF="http://liste.linux.org.tr">http://liste.linux.org.tr</A></TT>

<DT><A NAME="foot325"
 HREF="dagitimlar.html#tex2html12"><SUP>6</SUP></A>
<DD>Arch Linux Türkiye Topluluðu <TT><A NAME="tex2html13"
  HREF="http://www.archlinuxtr.org">http://www.archlinuxtr.org</A></TT>

<DT><A NAME="foot326"
 HREF="dagitimlar.html#tex2html14"><SUP>7</SUP></A>
<DD>Debian Linux Ana Sayfasý <TT><A NAME="tex2html15"
  HREF="http://www.debian.org">http://www.debian.org</A></TT>

<DT><A NAME="foot327"
 HREF="dagitimlar.html#tex2html16"><SUP>8</SUP></A>
<DD>RedHat'ýn Web Sayfasý <TT><A NAME="tex2html17"
  HREF="http://www.redhat.com">http://www.redhat.com</A></TT>

<DT><A NAME="foot328"
 HREF="dagitimlar.html#tex2html18"><SUP>9</SUP></A>
<DD>Fedora Projesi Web Sayfasý <TT><A NAME="tex2html19"
  HREF="http://fedora.redhat.com">http://fedora.redhat.com</A></TT>

<DT><A NAME="foot329"
 HREF="dagitimlar.html#tex2html20"><SUP>10</SUP></A>
<DD>Gentoo Linux Web Sayfasý <TT><A NAME="tex2html21"
  HREF="http://www.gentoo.org">http://www.gentoo.org</A></TT>

<DT><A NAME="foot330"
 HREF="dagitimlar.html#tex2html22"><SUP>11</SUP></A>
<DD>Daniel Robbins'in Kaleminden Bir Makale <TT><A NAME="tex2html23"
  HREF="http://www-106.ibm.com/developerworks/library/l-dist1.html">http://www-106.ibm.com/developerworks/library/l-dist1.html</A></TT>

<DT><A NAME="foot331"
 HREF="dagitimlar.html#tex2html24"><SUP>12</SUP></A>
<DD>Gentoo Forumlarý <TT><A NAME="tex2html25"
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
<DD>Knoppix'in Web Sayfasý <TT><A NAME="tex2html33"
  HREF="http://www.knoppix.de">http://www.knoppix.de</A></TT>

<DT><A NAME="foot336"
 HREF="dagitimlar.html#tex2html34"><SUP>17</SUP></A>
<DD>Klaus Knopper Ropörtajý <TT><A NAME="tex2html35"
  HREF="http://www.osnews.com/story.php?news_id=2305">http://www.osnews.com/story.php?news_id=2305</A></TT>

<DT><A NAME="foot337"
 HREF="dagitimlar.html#tex2html36"><SUP>18</SUP></A>
<DD>Knoppix Hakkýnda bir diðer Makale <TT><A NAME="tex2html37"
  HREF="http://lwn.net/Articles/31458/">http://lwn.net/Articles/31458/</A></TT>

<DT><A NAME="foot338"
 HREF="dagitimlar.html#tex2html38"><SUP>19</SUP></A>
<DD>Knoppix Hakkýnda bir diðer Makale <TT><A NAME="tex2html39"
  HREF="http://lwn.net/Articles/84851/">http://lwn.net/Articles/84851/</A></TT>

<DT><A NAME="foot339"
 HREF="dagitimlar.html#tex2html40"><SUP>20</SUP></A>
<DD>Pardus Projesi Web Sayfasý <TT><A NAME="tex2html41"
  HREF="http://www.pardus.org.tr">http://www.pardus.org.tr</A></TT>

<DT><A NAME="foot340"
 HREF="dagitimlar.html#tex2html42"><SUP>21</SUP></A>
<DD>Slackware'in Web Sayfasý <TT><A NAME="tex2html43"
  HREF="http://www.slackware.org">http://www.slackware.org</A></TT>

<DT><A NAME="foot341"
 HREF="dagitimlar.html#tex2html44"><SUP>22</SUP></A>
<DD>2007 yýlýnda yapýlmýþ bir araþtýrmasý <TT><A NAME="tex2html45"
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