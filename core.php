<?php

class page{
    public $name;

    public function __construct($page)
    {
        $this->name = $page;
    }

    public function name($page) {
        $this->name = $page;
    }
}