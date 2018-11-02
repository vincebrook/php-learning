<?php

require 'functions.php';

require 'Task.php';

$pdo = connectoDB();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';
