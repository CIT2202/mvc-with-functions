<!DOCTYPE HTML>
<html>
<head>
<title>Display the details for a film</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
</head>
<body>
<?php
//simple validation to see if we found a film
if($film){
	echo "<h1>{$film['title']}</h1>";
	echo "<p>Year:{$film['year']}</p>";
	echo "<p>Duration:{$film['duration']}</p>";
}
else
{
	echo "<p>Can't find the film</p>";
}
?>
</body>
</html>
