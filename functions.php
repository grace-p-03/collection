<?php

/**
 * Fetches a database
 *
 * @return PDO which is a link to the database
 */
function fetchDatabase(){
    return new PDO('mysql:host=db; dbname=grace-collection', 'root', 'password');
}


/**
 * Retrieves all data from illustrators database
 *
 * @param $db database to be queried
 *
 * @return mixed the result of the query
 */
function queryDatabase($db){
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare("SELECT `name`, `image`, `instagram`, `location`, `website` FROM `illustrators`;");
    $query->execute();
    return $query->fetchAll();
}

function loopsthroughArray (array $illustrators): string {
    $result = '';
    foreach ($illustrators as $illustrator){
        $result .= '<div>' . $illustrator['name'] . '</div>';
        $result .= '<div><img src="' . $illustrator['image'] . '"' . 'alt="Example image of illustrator\'s work"/>' . '</div>';
        $result .= '<div>' . $illustrator['instagram'] . '</div>';
        $result .= '<div>' . $illustrator['location'] . '</div>';
        $result .= '<div>' . $illustrator['website'] . '</div>';
    }
    return $result;
}

