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
	<title>Title</title>
	<link rel="shortcut icon" type="image/jpg" href="FAVICON FILE NAME HERE"/>
	<link href= "normalize.css" type="text/css" rel="stylesheet"/>
	<meta name="viewport" content="width=device-width">
	<link href="style.css" rel="stylesheet" type="text/css" />
  </head>
    <body>

	</body>

</html>