<?
$db_host = "localhost";
$db_user = "xds3";
$db_pass = "Kerembey789*";
$db_name = "xds3";

$connect = @mysql_connect($db_host,$db_user,$db_pass);

$db = mysql_select_db($db_name,$connect);
if (!$connect) {
echo ("noconnection");
exit();
}
?>
