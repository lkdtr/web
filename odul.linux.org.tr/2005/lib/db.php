<?php
if(DBCTYPE == "p"){$db_connection = @mysql_pconnect(DBHOST,DBUSER,DBPASS);}
else{$db_connection = @mysql_connect(DBHOST,DBUSER,DBPASS);}

if(!$db_connection){
echo "Veritaban� sunucusuna ba�lanamad�m. Bir hata olu�tu.<br>";
echo "Hata mesaj�: <b>".mysql_error()."</b><br>";
echo "Hata numaras�: <b>".mysql_errno()."</b><br>";
exit();
}

$db_select = @mysql_select_db(DBNAME);

if(!$db_select){
echo "Veritaban�na ba�lant� kuramad�m. Bir hata olu�tu.<br>";
echo "Hata mesaj�: <b>".mysql_error()."</b><br>";
echo "Hata numaras�: <b>".mysql_errno()."</b><br>";
exit();
}
?>