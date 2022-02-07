<?php

$db = new PDO('mysql:host=db; dbname=grace-collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `name`, `image`, `instagram`, `location`, `website` FROM `illustrators`;");
$query->execute();

$result = $query->fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';