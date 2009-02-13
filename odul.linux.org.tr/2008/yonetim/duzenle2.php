<?php
include "../lib/config.php";
include "../lib/db.php";
include "../lib/functions.php";
include "./tpl/header.php";
include "./tpl/menu.php";
if(aday_duzenle($_POST['id'],$_POST['aday_adi'],$_POST['kategori'],$_POST['oneren_adi'],$_POST['oneren_eposta'],$_POST['oneri_metni']) == "pl"){include "./tpl/aday_duzenle.tmm.tpl.php";}
elseif(aday_duzenle($_POST['id'],$_POST['aday_adi'],$_POST['kategori'],$_POST['oneren_adi'],$_POST['oneren_eposta'],$_POST['oneri_metni']) == "pll"){include "./tpl/aday_duzenle.tmmd.tpl.php";}
else{Header("Location:index.php");}
include "./tpl/footer.php";
?>