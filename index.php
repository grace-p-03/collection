<?php

require_once 'functions.php';

$db = fetchDatabase();
$result = queryDatabase($db);

echo '<pre>';
var_dump($result);
echo '</pre>';