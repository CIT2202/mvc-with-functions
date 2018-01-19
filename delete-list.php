<?php
try{
       $conn = new PDO('mysql:host=localhost;dbname=u0123456', 'u0123456', '01jan96');
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

//select all the films
$query = "SELECT * FROM films";
$resultset = $conn->query($query);
$films = $resultset->fetchAll();
$conn=NULL;

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Delete films</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<ul>
	<li><a href="create.php">Create</a></li>
	<li><a href="edit-list.php">Update</a></li>
	<li><a href="delete-list.php">Delete</a></li>
	<li><a href="search.php">Search</a></li>
</ul>
<?php
foreach ($films as $film) {
    echo "<p>";
    echo $film["title"];
    //outputs a hyperlink for each film e.g. <a href="details.php?id=4">delete</a>
    //each hyperlink has a query string (look back at practical 1) that specifies which film has been clicked on
	echo " (<a href='delete.php?id=" . $film["id"] . "'>delete</a>)";
    echo "</p>";
}

?>
</body>
</html>