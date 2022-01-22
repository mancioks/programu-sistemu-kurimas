<?php

function getSessionId() {
    return session_id();
}
function debug($data) {
    echo "<pre>";
    var_dump($data);
    die();
}

function redirect($page) {
    header('location: '.$page);
}