<!DOCTYPE html>
<html lang="en">
    <head>
	    <title>Illustrators Collection</title>
	    <link rel="shortcut icon" type="image/jpg" href="favicon.ico"/>
	    <link href= "normalize.css" type="text/css" rel="stylesheet"/>
	    <meta name="viewport" content="width=device-width">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link href="styles.css" rel="stylesheet" type="text/css" />
    </head>
        <body>
            <header>
                <h1>A Collection of Illustrators</h1>
            </header>
                <main>
                    <?php
                    require_once 'functions.php';
                    $db = fetchDatabase();
                    $result = queryDatabase($db);
                    $result = displayIllustrators($result);
                    echo $result;
                    ?>
                </main>
	    </body>
</html>