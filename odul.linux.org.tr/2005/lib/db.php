<?php
if(DBCTYPE == "p"){$db_connection = @mysql_pconnect(DBHOST,DBUSER,DBPASS);}
else{$db_connection = @mysql_connect(DBHOST,DBUSER,DBPASS);}

if(!$db_connection){
echo "Veritabaný sunucusuna baðlanamadým. Bir hata oluþtu.<br>";
echo "Hata mesajý: <b>".mysql_error()."</b><br>";
echo "Hata numarasý: <b>".mysql_errno()."</b><br>";
exit();
}

$db_select = @mysql_select_db(DBNAME);

if(!$db_select){
echo "Veritabanýna baðlantý kuramadým. Bir hata oluþtu.<br>";
echo "Hata mesajý: <b>".mysql_error()."</b><br>";
echo "Hata numarasý: <b>".mysql_errno()."</b><br>";
exit();
}
?>