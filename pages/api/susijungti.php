<?php
$db = new database();

$list = $db->get("SELECT * FROM sessions WHERE status = 2 AND active_to > '". time() ."' AND session <> '".$currentSession."'");

echo json_encode($list);

?>