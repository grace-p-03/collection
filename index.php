<?php

require_once 'functions.php';

$db = fetchDatabase();
$result = queryDatabase($db);

$result = displayIllustrators($result);

echo $result;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
	<title>Illustrators Collection</title>
	<link rel="shortcut icon" type="image/jpg" href="FAVICON FILE NAME HERE"/>
	<link href= "normalize.css" type="text/css" rel="stylesheet"/>
	<meta name="viewport" content="width=device-width">
	<link href="styles.css" rel="stylesheet" type="text/css" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  </head>
    <body>
    <header>
        <h1>A Collection of Illustrators</h1>
    </header>
	</body>

</html>