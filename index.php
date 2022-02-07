<?php

//save the conn in a variable
$db = new PDO('mysql:host=db; dbname=grace-collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `name`, `image`, `instagram`, `location`, `website` FROM `illustrators`;");
//run the query against the db
$query->execute();

//grab the results from the query that has been run
$result = $query->fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';