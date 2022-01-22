<?php
include_once "session.php";
include_once "core.php";
include_once "routes.php";

$db = new database();
$currentUser = $db->get("SELECT * FROM sessions WHERE session = '".$currentSession."'");

//if($currentUser[0]["status"] == 1 && $route != "vieta") redirect($home."vieta");
//if($currentUser[0]["status"] == 2 && $route != "susijungimas") redirect($home."susijungimas");

if($route != "api") include 'header.php';
include_once ($page->name.".php");
if($route != "api") include 'footer.php';

?>
