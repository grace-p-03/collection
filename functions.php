<?php

/**
 * Fetches data from a database
 *
 * @return PDO which is a link to the database
 */
function fetchDatabase(): PDO {
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return new PDO('mysql:host=db; dbname=grace-collection', 'root', 'password');
}


/**
 * Retrieves all data from database of illustrators
 *
 * @param $db database to be queried
 *
 * @return mixed the result of the query
 */
function getAllIllustrators(PDO $db): array {
    $query = $db->prepare("SELECT `name`, `image`, `instagram`, `location`, `website` FROM `illustrators`;");
    $query->execute();
    return $query->fetchAll();
}


/**
 * Diplays the illustrators data as readable HTML on the front end
 *
 * @param array $illustrators collection of illustrators
 *
 * @param string $illustrator individual illustrators
 *
 * @return string the illustrators data as readable HTML on the front end
 */
function displayIllustrators (array $illustrators): string {
    if (!count($illustrators)){
        return '<div>Error! No items found in the database</div>';
    }
    $result = '';
    foreach ($illustrators as $illustrator){
        $result .= '<main><section><h2>' . $illustrator['name'] . '</h2>';
        $result .= '<div><img src="' . $illustrator['image'] . '"' . 'alt="Example image of illustrator\'s work"/>' . '</div>';
        $result .= '<h3>' . $illustrator['instagram'] . '</h3>';
        $result .= '<p>' . $illustrator['website'] . '</p>';
        $result .= '<p>' . $illustrator['location'] . '</p></section></main>';
    }
    return $result;
}

