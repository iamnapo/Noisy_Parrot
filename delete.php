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
$number = $_POST['numberdelete'];
$name = $_POST['namedelete'];
// Prevent SQL Injection
$number = mysql_real_escape_string($number);
$name = mysql_real_escape_string($name);
mysql_select_db("Noisy_Parrot",$link);
if(empty($name) ){

    $name= 'Anonymous';
}
$query = "SELECT COUNT(*) FROM Listener WHERE name = '" . $name . "' AND phone_number = '" . $number . "'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$count = $row[0];
if($count == 1){
    $query = "DELETE FROM Listener WHERE Listener.phone_number = '" . $number . "'";
    $result = mysql_query($query);
}
header('Location: /');

?>
