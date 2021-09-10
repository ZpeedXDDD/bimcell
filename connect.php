<?php

#SQL BAGLANTISI SADECE BU DOSYADAN YAPILIR.
#ICQ @fatal1 - CHE PANEL

$servername = "localhost";
$username   = "xds3";
$password   = "Kerembey789*";
$dbname     = "xds3";

try {
     $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $db->exec("SET NAMES UTF8");
    }
catch(PDOException $e)
    {
     echo $e->getMessage();
    }

?>