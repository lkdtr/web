<?php
include "./tpl/header.php";
if(aday_ekle($_POST['aday_adi'],$_POST['kategori'],$_POST['oneren_adi'],$_POST['oneren_eposta'],$_POST['oneri_metni']) == "pl"){include "./tpl/aday_ekle.tmm.tpl.php";}
elseif(aday_ekle($_POST['aday_adi'],$_POST['kategori'],$_POST['oneren_adi'],$_POST['oneren_eposta'],$_POST['oneri_metni']) == "pll"){include "./tpl/aday_ekle.tmmd.tpl.php";}
else{Header("Location:index.php");}
include "./tpl/footer.php";
?>