<?php

/**
 * Fetches a database
 *
 * @return PDO which is a link to the database
 */
function fetchDatabase(): PDO {
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return new PDO('mysql:host=db; dbname=grace-collection', 'root', 'password');
}


/**
 * Retrieves all data from illustrators database
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
        return '<div>No items found in the database</div>';
    }
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

