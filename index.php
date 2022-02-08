<?php

require_once 'functions.php';

$db = fetchDatabase();
$result = queryDatabase($db);

$result = displayIllustrators($result);

echo $result;