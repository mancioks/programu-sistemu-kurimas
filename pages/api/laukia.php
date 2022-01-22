<?php
$db = new database();

//$currentUser

$list = $db->get("SELECT * FROM sessions WHERE id = '".$currentUser[0]['kartu_su']."'");

$match = "false";

if($list[0]["kartu_su"] == $currentUser[0]['ID']) {
    $match = "true";
}

echo $match;

?>