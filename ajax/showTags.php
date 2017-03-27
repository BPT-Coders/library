<?php
$mysqli = new mysqli('localhost', 'library', '0000', 'library');
$query = "set names utf8";
$mysqli->query($query);

$query = 'select * from tags';

$results = $mysqli->query($query);
while($row = $results->fetch_assoc()){
	echo '<span onClick="showBooksOnTagId('.$row["id"].')" >'.$row["name"].'</span> | ';
}



?>