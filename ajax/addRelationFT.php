<?php
$mysqli = new mysqli('localhost', 'library', '0000', 'library');
$query = "set names utf8";
$mysqli->query($query);

$idBook = $_POST['idBook'];
$idTag = $_POST['idTag'];

$query = "insert into relationsFT (idFile, idTag) values ($idBook, $idTag)";

$mysqli->query($query);
?>