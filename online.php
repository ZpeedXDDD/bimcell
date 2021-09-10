<?php
include('baglanti.php');

//Fetch Time
$timestamp = time();
$timeout = $timestamp - 180;

//Insert User
$insert = mysql_query("INSERT INTO online (timestamp, ip, file) VALUES('$timestamp','".$_SERVER['REMOTE_ADDR']."','".$_SERVER[PHP_SELF].'?'.$_SERVER[QUERY_STRING]."')") or die("Error in who's online insert query!");
//Delete Users
$delete = mysql_query("DELETE FROM online WHERE timestamp<$timeout") or die("Error in who's online delete query!");
//Fetch Users Online
$result = mysql_query("SELECT DISTINCT ip FROM online") or die("Error in who's online result query!");
$users = mysql_num_rows($result);

//Show Who's Online
if($users == 1) {
print("Online $users\n");
} else {
print("Online $users\n");
}
?>