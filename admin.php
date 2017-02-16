<?php

$link = mysql_connect("webpagesdb.it.auth.gr:3306","Administrator","Administrator");
if (!$link) {
    die("Can not connect: " . mysql_error());
}
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");

$select = mysql_select_db("Noisy_Parrot",$link);
if (!select) {
    echo "Error: " . mysql_error();
}

// Get Data
$admincode = $_POST['admincode'];
$sqlquery = $_POST['sqlquery'];
// Prevent SQL Injection
$admincode = mysql_real_escape_string($admincode);
mysql_select_db("Noisy_Parrot",$link);

// get the info from the db
$sql = "SELECT * FROM AdminCode";
$result = mysql_query($sql);
$list = mysql_fetch_array($result);
if ($list['code'] == $admincode) {
   $query = mysql_query($sqlquery);
}
header('Location: /');

?>
