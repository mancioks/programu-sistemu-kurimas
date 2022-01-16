<?php
session_start();

$db = new database();

$sessionValid = false;
$sessions = $db->get("SELECT * FROM sessions");
$currentSession = getSessionId();

foreach ($sessions as $session) {
    if($session["session"] == $currentSession) {
        $sessionValid = true;
    }
}

if(!$sessionValid) {
    $db->insert("sessions", ['session' => $currentSession]);
}