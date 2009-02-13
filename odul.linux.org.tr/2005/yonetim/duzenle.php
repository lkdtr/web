<?php
include "../lib/config.php";
include "../lib/db.php";
include "../lib/functions.php";
include "./tpl/header.php";
include "./tpl/menu.php";
if($_GET['tip'] == "yorum" AND isset($_GET['id'])){include "./tpl/duzenle.yorum.tpl.php";}
elseif($_GET['tip'] == "aday" AND isset($_GET['id'])){include "./tpl/duzenle.aday.tpl.php";}
elseif($_GET['tip'] == "" || !isset($_GET['tip']) || $_GET['id'] == "" || !isset($_GET['id'])){Header("Location:index.php");}
else{Header("Location:index.php");}
include "./tpl/footer.php";
?>