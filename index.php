<?php

require_once 'functions.php';

$db = fetchDatabase();
$result = queryDatabase($db);

$result = loopsthroughArray($result);

echo $result;