<?php


function getContests()
{

	$link = mysql_connect("webpagesdb.it.auth.gr:3306", "Administrator", "Administrator");
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

	$select = mysql_select_db("Noisy_Parrot", $link);
	if (!$select) {
		echo "Error: " . mysql_error();
	}
	$contestdate = date("Y-m-d");
	$contestdate = mysql_real_escape_string($contestdate);
	utf8_encode($contestdate);
	mysql_select_db("Noisy_Parrot", $link);
	$query = "SELECT *  FROM Contest WHERE ending_date >= '" . $contestdate . "'";
	$result = mysql_query($query);
	while ($list = mysql_fetch_array($result)) {
		echo '<option value="' . $list['name'] . '">' . $list['name'] . '</option>';
	}
}
