# Illustrators Collection App

This app allows you to view a collection of my favourite illustrators. 

## Description

Illustrators data is stored in a MySQL database, and displays an illustrator's name, an example image of their work, links to their Instagram handle and website, and their location if known.

## Getting Started

### Dependencies

-   PHP version 7.0.0+,
-   MySQL version 5.7 +
-   PHPUnit version 6.5+

### Installing

Clone this repo:

`git@github.com:grace-p-03/collection.git`

Install the sql file `grace-collection_2022-02-10.sql` into a database named `grace-collection`

Make sure the DB connection details for your MySQL server are updated in `functions.php`. For example:

`$db = new PDO('mysql:host=db; dbname=grace-collection', 'root', 'password');`

The application will now be available in your favourite IDE for PHP :) 

## Author

Grace Palacz - https://grace-p-03.github.io/


