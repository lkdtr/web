<td width="508" valign="top">
<h1 align="justify">GNU Felsefesi ve Linux İşletim Sistemi
</h1>
<div align="justify">
<blockquote>
<b>Özet:
</b> Gün geçtikçe kalabalıklaşan bir topluluğa yön veren GNU Felsefesini ve Özgür Yazılım Akımı'nı duymadı iseniz bu yazıya bir göz gezdirmenizde fayda 
var; bu yazıda GNU ve Linux'un ne olduğu anlatılmaya çalışılmıştır.
</blockquote>
<br>
<br>Bu yazıyı okumak ve bahsedilen düşünceleri özümseyebilmek için bilgisayar konusunda uzman olmanız kesinlikle
<i>gerekmemektedir
</i> fakat, başlamadan önce, kavramların aynı anlamlarını kullandığımızdan emin olmak için aşağıdaki bazı bilgisayar terimlerin tanımlarını yapmak 
yerinde bir hatırlatma olacaktır:
<br>
<br>
<!--TOC subparagraph Donanım (Hardware):-->
<b>Donanım (Hardware):
</b>
<!--SEC END -->Bir bilgisayarın veya başka bir benzer sistemin fiziksel, dokunulabilir, gerçek parçaları (ses kartınız, işlemciniz, disk sürücüleriniz, 
monitörünüz, yazıcınız gibi).
<br>
<br>
<!--TOC subparagraph Yazılım (Software):-->
<b>Yazılım (Software):
</b>
<!--SEC END -->Donanımlar üzerinde elektronik olarak saklanabilen bilgisayar programları ya da verilerin tümüne verilen isim (işletim sisteminiz, mp3 
dosyalarınız, mp3 çalıcı programınız, metin belgeleriniz gibi).
<br>
<br>
<!--TOC subparagraph Kaynak Kod (Source Code):-->
<b>Kaynak Kod (Source Code):
</b>
<!--SEC END -->Bir programın, herhangi bir programlama dili ile yazılmış, insana yakın orjinal formu. Programlar, kaynak kodların çeşitli derleyicilerden 
geçirilerek bilgisayarın anlayabileceği bir forma dönüştürülmüş halleridir. Örneğin mp3 çalıcı programınızı bilgisayarınızda 
çalıştırabilirsiniz fakat onun nasıl çalıştığını anlayabilmeniz için kaynak koduna bakmanız gerekir. En ilkel hali ile kaynak kod için, ait olduğu 
programın bilgisayara ne yaptırdığını ve nasıl çalıştığını tam olarak anlayabilmemizi sağlayan yazılı halidir diyebiliriz.
<br>
<br>
<br>Bu çok kısa ve genel bilgilendirmenin ardından, "Bilim ancak kollektif olarak gelişir ve bilgi paylaşılmalıdır" diyen
<b>Richard M. Stallman
</b>'ın öncülüğünü gerçekleştirdiği GNU'nun ne anlama geldiğini açıklayarak başlayalım ve Stallman'ın söylediği ve kimsenin hayır diyemeyeceği 
bu söz ile 1984 yılında başlayan GNU hareketinin arasında nasıl bir bağ olduğundan bahsedelim.
<br>
<br>GNU'nun açılımı, '
<b>G
</b>NU is
<b>N
</b>ot
<b>U
</b>nix'tir. Yani GNU, 'GNU, Unix değildir' anlamına gelmekte olan özyinelemeli (rekürsif) bir kelimedir. Richard M. Stallman, 1970'li yıllarda MIT (Massachusetts 
Institute of Technology)'nin Yapay Zeka laboratuvarlarında serbest yazılımı bir yaşam şekli olarak benimsemiş bir grupla beraber 1980'li yılların başına 
kadar yazılım geliştirici olarak çalışmıştır. Bu grup ile olan birlikteliğinin sona erişinin ardından kendisini o dönemlerde ivme kazanan bazı 
akımlardan dolayı benimsenmeye başlanılmış yeni bir sosyal sistem içerisinde bulmuştur, Stallman bir röportajında
<sup>
<a name="text1" href="linuxnedir.html#note1">1
</a>
</sup> o günleri şu şekilde nitelendirmekte: "Kendimi özgür olmayan (kaynak kodu kapalı olan) yazılımların hakim olduğu ve kullanıcıların yardımsız 
bırakıldığı, parçalanmış ve birlikte çalışmanın korsanlık olarak nitelendirildiği çirkin bir sosyal sistemin içinde buldum. Bu tür bir yaşantıyı 
reddettim. Ancak işimi özgürlüğe ve birlikte çalışmaya adadığım zaman yaptıklarımdan gurur duyabileceğime karar verdim." Ve 1984 yılında tamamen 
özgür yazılımların meydana getirdiği bir işletim sistemi ve işletim sisteminin araçlarının geliştirilmesi çalışması böylece başlamış oldu, 
işte bu çalışmanın adı GNU idi. Yazılan özgür yazılımların bir şemsiye altında toplanması için 1985 yılında yine Stallman tarafından FSF (Free 
Software Foundation) kuruldu ve GNU yazılımları korumak üzere GPL (General Public Licence) adı verilen yazılım lisansı duyuruldu. GPL lisansı ile lisanslanan 
özgür yazılımların amaçları özgürlüklerini korumaktan başka bir şey değildir.
<br>
<br>Özgür yazılımlar hakkında sık rastlanan bir yanlış anlama, özgür yazılımların ücretsiz olduğudur; genellikle böyle olmakla beraber, özgür 
yazılımlar ücretli olabilirler, fakat kaynak kodları ücretlendirmelerinden bağımsız olarak açıktır. Bir yazılımın, 'özgür yazılım' olarak 
değerlendirilebilmesi için yazılımın kullanıcısına neleri sağlaması gerekir?
<ul>
<li> Yazılımı kullanan kişi onu her türlü amaç için çalıştırmakta özgürdür. Özgür yazılımlar kullanıcıları kısıtlamazlar.
</li>
<li>Yazılımı kullanan kişi yazılımın nasıl çalıştığını incelemekte ve kendi özel ihtiyaçlarına daha iyi cevap verebilmesi için yazılım üzerinde 
değişiklik yapmakta özgürdür. Kendisi yeterli bilgiye sahip değilse bunu bir başkasına da yaptırabilir.
</li>
<li>Yazılımı kullanan kişi elindeki yazılımı dağıtmakta ve toplum ile paylaşmakta özgürdür.
</li>
<li>Yazılımı kullanan kişi yazılımı geliştirmekte ve geliştirdiği yeni halini toplum ile paylaşmakta özgürdür.
</li>
</ul>GPL'nin bu hükümlerine bakıldığında 'yazılımı yazan' kişi ile 'yazılımı kullanan' kişi sanki birbirine karıştırılmış gibi görünüyor. 
İnsanın, -özellikle günümüz koşullarında- bir yazılımı kullanan kişinin, kullandığı yazılım üzerinde, yazılımı üreten kişi kadar hakka sahip 
olmasını kabul etmekte güçlük çekmesi çok doğal... Özgür yazılım akımı ile beraber, GPL şemsiyesi altında geliştirilen bir yazılım özel bir çaba 
sarfetmeye gerek bırakmadan, başlangıcından sonuna değin toplumun ve bilimin yararına geliştirilmiş olur. Çünkü bu lisans ve yaklaşım sayesinde,
<ul>
<li> Yazılım geliştiricileri tekerleği yeniden keşfetmekle vakit harcamaz, daha önceden üretilmiş olan araçları yazılımlarına ekleyerek bunlar üzerine 
yeni şeyler inşa edebilir.
</li>
<li>Aynı işi yapan yazılımların en iyi yönleri alınarak kullanıcılara optimum çalışan, kaliteli yazılımlar hızla sunulabilir. Kullanıcılar var olan 
yazılımlar arasından istediğini deneyerek kendi ihtiyacını rahatça seçebilir.
</li>
<li>Kullanıcılar özgür yazılımlara çok makul fiyatlar ile ya da -çoğunlukla- 0 maliyetle sahip olabilir, dolayısı ile yazılım ücretlerine ayırdıkları 
kaynaklarını donanıma ya da diğer ihtiyaçlarına ayırabilir, yaşam ve çalışma standartlarını yükseltebilirler.
</li>
<li>Yazılımın kaynak koduna da sahip olduklarından dolayı kullanıcılar kritik yazılımların nasıl çalıştığını anlamak için kaynak kodlarına bakabilir, 
isteklerine göre özelleştirebilir ve kaynak tasarrufu sağlayabilir. Elbette kullanıcılar yazılım üretimi konusunda bilgili olmak zorunda değildir, ne bir 
programcı kiralamak kullanıcı için, ne de var olan bir yazılım üzerinde değişiklik yapmak bir programcı için zordur.
</li>
</ul>Bütün bunlar göz önünde bulundurulduğunda, özgür yazılım akımı bilişim dünyasının acımasız çarkları arasında açan bir çiçek gibidir. GPL'nin 
zekice düşünülmüş hükümleri sayesinde bu akımın önü kendi menfaatlerinden dolayı kapalı kaynak kodu savunan, küçük bir kitleyi doyuran egoist yazılım 
devleri tarafından bir türlü kesilememektedir ve Free Software Foundation'un kurulduğu 1985 yılından bu yana internet teknolojisinin de hızla yayılması ile bu 
akım bütün ülkelere sıçramış durumdadır. Açık kaynak kodlu özgür yazılımlar yukarda bahsedilen özellikleri ile şu avantajları da beraberinde 
getirmektedir:
<ul>
<li>
<b>Güvenilirlik
</b>: Açık kaynak kodlu yazılımların belki de en büyük artısı olan güvenilir oluşları, kimi çevreler tarafından doğru olmayan bir mantıkla bir dezavantaj 
gibi gösterilmeye çalışılmakta ve topluma 'Açık kaynak kodlu bir yazılımın tam olarak nasıl çalıştığı kaynak koduna bakılarak bilinebildiği için 
yazılımın barındırdığı güvenlik problemleri saldırganlar tarafından kolaylıkla tespit edilip kullanılabilmektedir' gibi bir düşünce yerleştirilmeye 
çalışılmaktadır. Fakat açık kaynak kodlu bir yazılım, doğası gereği geliştirilmesi sürecinden kullanımı zamanına değin onbinlerce göz tarafından 
denetlenmektedir. Var olması muhtemel bir güvenlik problemi ya da kötü niyetli bir programcı tarafından bilinçli olarak yerleştirilebilecek bir kod parçası 
yazılım sizin elinize ulaşmadan tespit edilmekte ve hızla düzeltilmekte ya da size ulaşması engellenmektedir. Ayrıca kimse, binlerce insanın kollektif bir 
şekilde geliştirdiği bir yazılımın güvenilmez olduğunu idda ederken, sınırlı sayıda kişinin geliştirdiği ve kaynak kodunu kapattığı bir 
yazılımın güvenilirliğini kimin ve nasıl garanti edeceği sorusuna yanıt veremez.
</li>
<li>
<b>Sağlamlık
</b>: Yine açık kaynak kodlu yazılımların doğal geliştirme süreci içerisinde çok sayıda insan tarafından denenmeleri ve kaynak kodlarının gözden 
geçirilmesi sonucunca ortaya yüksek kalitede, stabil ve kuvvetli yazılımlar çıkmaktadır.
</li>
<li>
<b>Esneklik
</b>: Kaynak kodu açık bir yazılım hızla ve kolaylıkla yeni bir sistem üzerinde çalışacak şekilde yeniden yapılandırılabilmekte, bir kısmı çıkarılarak 
kapsamı daraltılabilmekte ya da eklenen yeni fonksiyonlarla kapsamı genişletilebilmektedir.
</li>
<li>
<b>Uygulama Desteği
</b>: Çok geniş bir yelpazede ve çeşitlilikteki bir çok açık kaynak kodlu özgür yazılım her gün duyurulmaktadır. Herhangi bir konudaki ihtiyaç açık 
kaynak kodlu yazılımlarla hızlı ve kaliteli bir şekilde çözüme kavuşturulabilmektedir.
</li>
</ul>
<br>Belki de hepsininden önemlisi, bahsedilen yazılım
<b>sizin kendi malınız
</b> olmaktadır. Yukarıda da bahsedilen GPL lisansı uyarınca üretilmiş bir yazılım üzerinde, onu hazırlayan kişi kadar hakka sahip olmanız inanılması güç 
bir şeydir. İnsanların bu durum karşısında şu şekilde bir değerlendirme yapması çok sık rastlanan bir durumdur: 'Bir yazılımın kaynak kodunun açık ya 
da kapalı olması, özgür olması ya da olmaması benim için neyi değiştirir?'
<br>
<br>Aslında çok şeyi değiştirmektedir.
<br>
<br>Bu şekilde düşünen kişilerin bir kısmı, bilgisayarlarında lisans bedelleri ödenmemiş, kopya yazlımlar kullanmaktadırlar, dolayısı ile ellerindeki 
yazılımların yasal kısıtlamaları ve hükümlerinden dolayı hırsız durumuna düşmekte ve yasaları çiğnemektedirler; sırf ihtiyaçlarını karşılamak 
istedikleri için hayatları boyunca yapmayı akıllarından bile geçirmeyecekleri suçlarlı işlemiş sayılmaktadırlar.
<br>
<br>Bir kısmı da bilgisayarlarında kullandıkları yazılımların lisans bedellerini ödemekte, fakat kullandıkları yazılımın lisans hükümleri uyarınca lisans 
bedeli ödenmiş yazılımlarının bir kopyasını çok yakın arkadaşları dahi istese ona 'hayır' demek durumunda kalmaktadırlar. Demedikleri taktirde de 
arkadaşlarını ilk kısımdaki insanlar genellemesine itmektedirler. Yani lisans bedelini ödedikleri taktirde dahi bir yazılıma sahip olamamakta, yazılımı 
özgürce kullanamamakta, özgür olamamaktadırlar. İşte bu durum, Richard M. Stallman'ın "bu yaşam şeklini reddettim" dediği yaşam şeklidir.
<br>
<br>Peki bunca koşuşturma arasında
<b>Linux
</b>'un yeri nerededir? (Linux, linuks şeklinde telaffuz edilir
<sup>
<a name="text2" href="linuxnedir.html#note2">2
</a>
</sup>)
<br>
<br>Linux, Linus Torvalds adında Finlandiya'lı bir bilgisyar mühendisinin 1991 yılında Helsinki Üniversitesi'nde bir öğrenci iken kişisel bilgisayarında 
kullanmak üzere geliştirmeye başladığı bir işletim sistemi çekirdeğidir (işletim sisteminin çekirdeği, işletim sisteminin beyni diye tabir 
edebileceğimiz kısmıdır). İnternet'te yaptığı duyuru sonucunda tüm dünyadan bir çok programcının da desteği ile hızla gelişmiş ve halen aynı destek 
ile gelişmekte olan açık kaynak kodlu, özgür bir yazılımdır. Hızlı bir sürecin sonunda Linus'un geliştirdiği çekirdek, GNU hareketinin bir meyvesi ve 
aynı zamanda taşıyıcısı haline gelmiştir. GNU için yazılmış özgür yazılımlar çok kısa süre içerisinde Linux çekirdeği ile uyumlu çalışabilecek 
hale getirilmiş ve ortaya güçlü, esnek ve açık kaynak kodlu bir işletim sistemi çıkmıştır. GNU/Linux olarak anılması gereken işletim sistemi zaman 
içerisinde telaffuz kolaylıklarından ötürü Linux olarak anılmaya başlanmıştır.
<br>
<br>Şu anda GNU yazılımlarını ve diğer özgür yazılımları bir araya getiren ve tüm bunları bir Linux çekirdeği ile beraber toplu, derlenmiş ve kurulumu 
çok kolay bir işletim sistemi olarak piyasaya süren irili ufaklı bir çok çalışma mevcuttur. Fedora, Debian, SuSe, Mandrake, Slackware bunlardan çok bilinen bir 
kaçıdır. Her biri, normal bir bilgisyar kullanıcısının biraz dikkat ederek bilgisayarına kurabileceği ve neredeyse hiç yabancılık çekmeden kullanabileceği 
kadar rahat bir kurulum arayüzüne sahip bir şekilde dağıtılmaktadır. Eğer dağıtımlar hakkında daha fazla bilgi almak istiyorsanız
<sup>
<a name="text3" href="linuxnedir.html#note3">3
</a>
</sup> adresini ziyaret edebilirsiniz. Bu dağıtımlar üniversitelerin Bilgi İşlem Dairesi başkanlıklarından, bilgisayar mühendislikleri bölümlerinden ya da 
sadece dağıtım işini üstlenmiş internet sitelerinden çok cüzzi miktarlar karşılığında temin edilebilmektedirler.
<br>
<br>Türkiye'de de dünyanın her yerinde olduğu gibi Linux ile tanışmak isteyen ve yukarda vaad edilen şekilde bir bilgisayar yaşantısına adım atmak isteyen 
kişileri bir araya getirmek ve desteklemek vazifesini üstlenmiş ciddi ve özverili organizasyonlar mevcuttur. LKD (Linux Kullanıcıları Derneği), tüm Linux 
camiasının buluşma noktası olmayı hedefleyen ve bütün özgür yazılım hareketlerine kucak açmış bir dernektir. Her yıl düzenlenen ve 4 gün süren Linux 
Şenlikleri ile 3-4 paralel salonda yapılan seminer oturumları ile insanlar Linux ile ilgili çeşitli konularda bilgilendirilmekte, hiç bilmeyenlerden profesyonel 
bilgisayar kullanıcılarına kadar herkezin faydalanabileceği etkinliklere Türkiye'nin dört yanından konuşmacılar ve izleyiciler katılmaktadır. E-posta 
listelerinde özgür yazılım ve linux konusunda yardım almak isteyen kişilere yardım edilmekte, düzenli ve gezici seminerler ile kitleler ücretsiz 
bilgilendirilmektedir. Türkçeleştirme, yeni özgür yazılımların geliştirilmesi gibi çalışmalara destek verilmektedir.
<br>
<br>Şu anda nerede ise tüm üniversite bilgi işlem merkezlerinin yanı sıra, NASA, IBM, HP, Boeing, HSBC, CityBank, SonyEricsson, Nokia, Siemens, Samsung, General 
Motors, Hyundai, Oracle, EToys gibi çok büyük kuruluşlar Linux kullanmakta ve bir şekilde özgür yazılımlara destek olmaktadırlar.
<br>
<br>Peki, şu anda nasıl linux sahibi olabilir ve onu kullanmaya başlayabilirsiniz? Bu sorunun yanıtı da çok basittir:
<ul>
<li> En yakın üniversitenin bilgi işlem dairesine 3 adet boş CD ile gidip size tavsiye ettikleri bir Linux dağıtımını çekmelerini rica edin.
</li>
<li>
<a href="http://liste.linux.org.tr">
<tt>http://liste.linux.org.tr
</tt>
</a> adresindeki e-posta listelerinden linux listesine üye olun ve 'ben linux kullanmak istiyorum, bana yardim edin' diyin.
</li>
</ul>Eğer çaba sarf etmeyi göze almışsanız sonrasının nasıl geldiğine siz de şaşıracaksınız.
<br>
<br>Bütün bunlar sanki bir pazarlama şirketinin serzenişleri gibi görünmekte, insanın aklına 'Peki bunca insan neden bu fikrin peşinden koşturuyor? Bu 
kişilerin menfaati nedir?' soruları takılmaktadır.
<br>
<br>Siz kabul etmesenizde, özgür yazılımlar ve Linux sizin kullanmanız için hiç bir karşılık beklemeden size sunulmuş birer hediyedir. Sizin malınızdırlar, 
ve ona sahip çıkmak ya da çıkmamak özgürlüğü de diğer tüm özgürlükleriniz gibi sizin elinizdedir. Bu akım ve bu akımın ürettikleri, toplumların refah 
seviyesini yükseltmek için çalışan bilime ve gelecek nesillere bir mirastır.
<br>
<br>Richard M. Stallman'ın söylediği gibi, 'Özgür yazılım kullanmayı hak ediyorsunuz'.
<br>
<br>
<br>
<br>Bağlantılar:
<br>
<br>
<a href="http://www.lkd.org.tr/">
<tt>http://www.lkd.org.tr
</tt>
</a> Türkiye Linux Kullanıcıları Derneği.
<br>
<br>
<a href="index.html">
<tt>http://www.linux.org.tr
</tt>
</a> Özgür yazılım kullanıcılarının buluşma noktası.
<br>
<br>
<a href="http://www.uludag.org.tr/">
<tt>http://www.uludag.org.tr
</tt>
</a> Ulusal Dağıtım Projesi
<br>
<br>
<a href="http://www.belgeler.org/">
<tt>http://www.belgeler.org/
</tt>
</a> Linux ve özgür yazılımlar hakkında derlenmiş bir çok Türkçe belge.
<br>
<br>
<a href="http://www.gnu.org/">
<tt>http://www.gnu.org
</tt>
</a> GNU resmi web sitesi.
<!--BEGIN NOTES document-->
</div>
<hr align="JUSTIFY" width="50%" size="1">
<div align="justify">
<dl>
<dt>
<a name="note1" href="linuxnedir.html#text1">
<font size="5">1
</font>
</a>
</dt>
<dd>Bahsi geçen röportaj, 2000 yılı Aralık ayında Umut Gökbayrak tarafından gerçekleştirilmiştir.
</dd>
<dt>
<a name="note2" href="linuxnedir.html#text2">
<font size="5">2
</font>
</a>
</dt>
<dd>
<a href="http://www.paul.sladen.org/pronunciation/torvalds-says-linux.wav">
<tt>http://www.paul.sladen.org/pronunciation/torvalds-says-linux.wav
</tt>
</a>
</dd>
<dt>
<a name="note3" href="linuxnedir.html#text3">
<font size="5">3
</font>
</a>
</dt>
<dd>
<a href="http://www.linux.org.tr/dagitimlar.html">
<tt>http://www.linux.org.tr/dagitimlar.html
</tt>
</a>
</dd>
</dl>
<!--END NOTES-->
<!--HTMLFOOT-->
<!--ENDHTML-->
<!--FOOTER-->
</div>
<hr align="JUSTIFY" size="2">
<p align="justify">&nbsp;
</p>
<P ALIGN=justify STYLE="margin-bottom: 0cm">
</P>
</td>

