<?php

include 'function.php';
$db = include 'database/start.php';

$users = $db->getAll('nevatrip');


include 'test.view.php';
