<?php

function fetchDatabase(){
    return new PDO('mysql:host=db; dbname=grace-collection', 'root', 'password');
}

function queryDatabase($db){
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare("SELECT `name`, `image`, `instagram`, `location`, `website` FROM `illustrators`;");
    $query->execute();

    return $query->fetchAll();

}