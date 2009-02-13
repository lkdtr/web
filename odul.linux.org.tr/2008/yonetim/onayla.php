<?php
include "../lib/config.php";
include "../lib/db.php";
include "../lib/functions.php";
include "./tpl/header.php";
include "./tpl/menu.php";
if($_GET['tip'] == "yorum"){include "./tpl/onayla.yorum.tpl.php";}
elseif($_GET['tip'] == "yorumb" AND isset($_GET['id']) AND isset($_GET['islem'])){include "./tpl/onayla.yorum.b.tpl.php";}
elseif($_GET['tip'] == "aday"){include "./tpl/onayla.aday.tpl.php";}
elseif($_GET['tip'] == "adayb" AND isset($_GET['id']) AND isset($_GET['islem'])){include "./tpl/onayla.aday.b.tpl.php";}
elseif($_GET['tip'] == "" || !isset($_GET['tip'])){Header("Location:index.php");}
else{Header("Location:index.php");}
include "./tpl/footer.php";
?>