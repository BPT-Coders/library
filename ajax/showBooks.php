<?php
$mysqli = new mysqli('localhost', 'library', '0000', 'library');
$query = "set names utf8";
$mysqli->query($query);

// Вывод книг по поисковому запросу
if (isset($_POST["searchString"])){	
	$filter = $_POST["searchString"];
	$query = "select * from files where id in ((select idFile from relationsFT where idTag in((select id from tags where name like '%".$filter."%'))))";
}

if (isset($_POST["idTag"])){	
	$filter = $_POST["idTag"];
	$query = "select * from files where id in ((select idFile from relationsFT where idTag in(".$filter.")))";
}


$results = $mysqli->query($query);
while($row = $results->fetch_assoc()){
	echo '<a href="pdf/'.$row["path"].'" target="blank">'.$row["name"].'</a> <a href="book.php?idBook='.$row["id"].'" target="blank">Редактировать</a><br>';
}



?>