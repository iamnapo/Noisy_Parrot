<?php


function getShows() {

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

    // get the info from the db
    $sql = "SELECT * FROM RadioShow ORDER BY RadioShow.name ASC";
    $result = mysql_query($sql);

    // while there are rows to be fetched...
    while ($list = mysql_fetch_array($result)) {
        // echo data
        echo '<option value="'. $list['name'].'">'. $list['name'].'</option>';
    } // end while
}