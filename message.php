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

if(isset($_POST['submit'])) {
    // Get Data
    $show = $_POST['show'];
    $name = $_POST['name'];
    $phonenumber = $_POST['number'];
    $message = $_POST['message'];
    // Prevent SQL Injection
    $show = mysql_real_escape_string($show);
    $name = mysql_real_escape_string($name);
    $phonenumber = mysql_real_escape_string($phonenumber);
    $message = mysql_real_escape_string($message);
    mysql_select_db("Noisy_Parrot",$link);
    if(empty($name) ){

        $name= 'Anonymous';
    }

    $query = "INSERT INTO Listener(phone_number, name) VALUES ('" . $phonenumber . "','" . $name . "')";
    mysql_query($query);
    $query = "INSERT INTO Listener(phone_number, name) VALUES ('" . $phonenumber . "','" . $show . "')";
    mysql_query($query);
    $query = "INSERT INTO Listener_RadioShow(phone_number, name, context) VALUES ('" . $phonenumber . "','" . $show . "','" . $message . "')";
    mysql_query($query);

}
header('Location: /');
?>
