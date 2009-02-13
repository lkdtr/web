<?php
include "../lib/config.php";
include "../lib/db.php";
include "../lib/functions.php";
include "./tpl/header.php";
include "./tpl/menu.php";
if(yorum_duzenle($_POST['id'],$_POST['yorum_adi'],$_POST['yorum_eposta'],$_POST['yorum']) == "pl"){include "./tpl/yorum_duzenle.tmm.tpl.php";}
elseif(yorum_duzenle($_POST['id'],$_POST['yorum_adi'],$_POST['yorum_eposta'],$_POST['yorum']) == "pll"){include "./tpl/yorum_duzenle.tmmd.tpl.php";}
else{Header("Location:index.php");}
include "./tpl/footer.php";
?>