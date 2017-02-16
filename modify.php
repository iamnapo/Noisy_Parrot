<?php

$link = mysql_connect("webpagesdb.it.auth.gr:3306","Administrator","Administrator");
if (!$link) {
    die("Can not connect: " . mysql_error());
}
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("set character_set_client=utf8");
mysql_query("set character_set_connection=utf8");
mysql_query("set collation_connection=utf8");
mysql_query("set character_set_results=utf8");
mysql_query("set time_zone='+02:00'");

$select = mysql_select_db("Noisy_Parrot",$link);
if (!select) {
    echo "Error: " . mysql_error();
}

// Get Data
$numberold = $_POST['numberold'];
$numbernew = $_POST['numbernew'];
$nameold = $_POST['nameold'];
$namenew = $_POST['namenew'];
// Prevent SQL Injection
$numberold = mysql_real_escape_string($numberold);
$numbernew = mysql_real_escape_string($numbernew);
$nameold = mysql_real_escape_string($nameold);
$namenew = mysql_real_escape_string($namenew);
mysql_select_db("Noisy_Parrot",$link);
if(empty($nameold) ){

    $nameold= 'Anonymous';
}
if(empty($namenew) ){

    $namenew= 'Anonymous';
}
utf8_encode($nameold);
utf8_encode($namenew);
$query = "SELECT COUNT(*) FROM Listener WHERE name = '" . $nameold . "' AND phone_number = '" . $numberold . "'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$count = $row[0];
if($count == 1){
    $query = "UPDATE Listener SET phone_number = '" . $numbernew . "', name = '" . $namenew . "' WHERE Listener.phone_number = '" . $numberold . "'";
    $result = mysql_query($query);
}
header('Location: /');

?>
