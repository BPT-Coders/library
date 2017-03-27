<?php
$tag = $_GET['tag'];
echo $tag;
echo '<br>';

$mysqli = new mysqli('localhost', 'library', '0000', 'library');
$query = "set names utf8";
$mysqli->query($query);

$query = "select * from tags where alt like '%".$tag."%'";

$results = $mysqli->query($query);
while($row = $results->fetch_assoc()){
	echo $row["name"];
}
?>