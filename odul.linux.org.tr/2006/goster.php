<?php
include "./tpl/header.php";
if($_GET['tip'] == "kategori"){include "./tpl/goster.kategori.tpl.php";}
elseif($_GET['tip'] == "kategorib"){include "./tpl/goster.kategori.b.tpl.php";}
elseif($_GET['tip'] == "aday" AND empty($_GET['id'])){include "./tpl/goster.aday.tpl.php";}
elseif($_GET['tip'] == "aday" AND isset($_GET['id'])){include "./tpl/goster.aday.b.tpl.php";}
elseif($_GET['tip'] == "" || !isset($_GET['tip'])){Header("Location:index.php");}
else{Header("Location:index.php");}
include "./tpl/footer.php";
?>