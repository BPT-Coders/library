<?php
$idBook = $_POST["idBook"];


$mysqli = new mysqli('localhost', 'library', '0000', 'library');
$query = "set names utf8";
$mysqli->query($query);

$query = "select name from tags where id in (select idTag from relationsFT where idFile = $idBook)";
$results = $mysqli->query($query);
while($row = $results->fetch_assoc()){
	echo '<span>'.$row["name"].'</span> | ';
}



?>