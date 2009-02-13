<?php
include "./tpl/header.php";
if(yorum_ekle($_POST['penguen'],$_POST['yorum_adi'],$_POST['yorum_eposta'],$_POST['yorum']) == "pl"){include "./tpl/yorum_ekle.tmm.tpl.php";}
elseif(yorum_ekle($_POST['penguen'],$_POST['yorum_adi'],$_POST['yorum_eposta'],$_POST['yorum']) == "pll"){include "./tpl/yorum_ekle.tmmd.tpl.php";}
else{Header("Location:index.php");}
include "./tpl/footer.php";
?>