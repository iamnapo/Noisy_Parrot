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
if (!$select) {
    echo "Error: " . mysql_error();
}

// Get Data
$number = $_POST['number'];
$contestname = $_POST['contest'];
// Prevent SQL Injection
$number = mysql_real_escape_string($number);
$contestname = mysql_real_escape_string($contestname);

mysql_select_db("Noisy_Parrot",$link);

utf8_encode($number);
utf8_encode($contestname);
$query = "SELECT unique_id FROM Contest WHERE name = '" . $contestname . "'";
$result = mysql_query($query);
$contestname = mysql_result($result, 0);
$query = "INSERT INTO Listener_Contest (phone_number, unique_id) VALUES ('" . $number . "', '" . $contestname . "')";
mysql_query($query);
header('Location: /');
