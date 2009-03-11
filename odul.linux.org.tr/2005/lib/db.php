<?php
if(DBCTYPE == "p"){$db_connection = @mysql_pconnect(DBHOST,DBUSER,DBPASS);}
else{$db_connection = @mysql_connect(DBHOST,DBUSER,DBPASS);}

if(!$db_connection){
echo "Veritabanı sunucusuna bağlanamadım. Bir hata oluştu.<br>";
echo "Hata mesajı: <b>".mysql_error()."</b><br>";
echo "Hata numarası: <b>".mysql_errno()."</b><br>";
exit();
}

$db_select = @mysql_select_db(DBNAME);

if(!$db_select){
echo "Veritabanına bağlantı kuramadım. Bir hata oluştu.<br>";
echo "Hata mesajı: <b>".mysql_error()."</b><br>";
echo "Hata numarası: <b>".mysql_errno()."</b><br>";
exit();
}
?>