<?

// This is called by a cron job to clean public vote confirmations from the database

// We need to check the requester of this .php file. It must be localhost only
	require '../include/config.inc';

	mysql_connect($dbhost,$dbuser,$dbpass) or die ("Problem connecting to DataBase");
	$todaydate=date("Y-m-d");
	$query = "delete from confirmations where expiration < '$todaydate'";
	mysql_db_query("votedb",$query);
?>
