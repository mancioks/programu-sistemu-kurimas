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

$action = [];
for($x = 0; $x < 10; $x++) {
    if(isset($actions[$x])) {
        $action[$x] = $actions[$x];
    }
    else {
        $action[$x] = '';
    }
}
$actions = $action;

$page = new page("pages/404");

if($route == "/" || $route == "") {$page->name("pages/home");}
if($route == "test") {$page->name("pages/test");}
if($route == "patarimai") {$page->name("pages/patarimai");}

if($route == "pradeti") {$page->name("pages/pildymas/pradeti");}
if($route == "vieta") {$page->name("pages/pildymas/vieta");}
if($route == "susijungimas") {$page->name("pages/pildymas/susijungimas");}
if($route == "laukiama") {$page->name("pages/pildymas/laukiama");}
if($route == "deklaravimas") {$page->name("pages/pildymas/deklaravimas");}
if($route == "schema") {$page->name("pages/pildymas/schema");}
if($route == "statusas") {$page->name("pages/pildymas/statusas");}
if($route == "duomenys") {$page->name("pages/pildymas/duomenys");}
if($route == "baigta") {$page->name("pages/pildymas/baigta");}


if($route == "api" && $actions[0] == "susijungti") {$page->name("pages/api/susijungti");}
if($route == "api" && $actions[0] == "laukia") {$page->name("pages/api/laukia");}
if($route == "api" && $actions[0] == "deklaracija") {$page->name("pages/api/deklaracija");}