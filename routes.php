<?php

$route = isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : "/";

$page = new page("pages/404");

if($route == "/") {
    $page->name("pages/home");
}