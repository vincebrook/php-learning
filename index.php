<?php

require 'functions.php';

class Task {
    protected $description;

    protected $completed = false;

    public function __contsruct($description)
    {
        $this->description = $description;
    }
}

$task = new Task('Go to the store');

dd($task);