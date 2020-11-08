# MVC with Functions
This practical looks at moving from an application built using flat PHP files to an MVC structure that uses functions to structure code. You need a good grasp of basic function concepts - arguments, parameters, returning values etc. before attempting this.
* We will use the solution from week 5, CRUD functionality using the films database.
* If you don't have this work, you can download it from https://github.com/CIT2202/films-single-table-crud/tree/solutions.
* You should have the films database. If you don't, you can download it from https://github.com/CIT2202/sql-joins/blob/master/films-db.sql. Import this table using phpmyadmin and check it has worked.
* Change the connection settings in *browseable-list.php* so that it works with your database.
* View the page in a web browser to make sure this works.
* Now try and re-structure this PHP page so that it uses an MVC structure.

If you have a look in the models folder, there is a file, *film-model.php*. This contains a number of functions for working with a film database table e.g. *getFilmsById*, *saveFilm*, *deleteFilms* etc. If you look in the views folder, there is a file *list-view.php*. This file contains code for outputting a list of films.

* Change *browseable-list.php* so that it includes *film-model.php* and calls the *getAllFilms* function.
* Change *browseable-list.php* so that it loads *list-view.php* to display the list of films.

 The code in *browseable-list.php* will then look like the following:

```php
include "models/film-model.php";
$films=getAllFilms();
$title="List all films";
include "views/list-view.php";
```

* Take a moment to really understand how the code in these files has been organised.
  - *browseable-list.php* is your controller.
  - *film-model.php* is the model.
  - *list-view.php* is the view.

* Try and do the same for the other pages in the site.
  * Start with *details.php*.
  * Call the functions in the *film-model.php* file to retrieve data from the database.
  * Move the HTML and code for outputting data into a view file, save this in the *views* folder and include this file.
  * Repeat the above steps for the *create* functionality.
