<?php

$fullRoute = isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : "/";
$fullRoute = explode("/", $fullRoute);
$route = $fullRoute[0];

$actions = [];

if(isset($fullRoute[1])) {
    $actions = $fullRoute;
    unset($actions[0]);

    $actions = array_values($actions);
}

$page = new page("pages/404");

if($route == "/" || $route == "") {$page->name("pages/home");}
if($route == "test") {$page->name("pages/test");}
if($route == "patarimai") {$page->name("pages/patarimai");}

if($route == "pradeti") {$page->name("pages/pildymas/pradeti");}