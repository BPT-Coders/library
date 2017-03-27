<! Doctype html>
<html>
<head>
	<title>Библиотека</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bookInfo.js"></script>
</head>
<body onLoad="showTagsForBook()">
<?php
$idBook = $_GET["idBook"];

$mysqli = new mysqli('localhost', 'library', '0000', 'library');
$query = "set names utf8";
$mysqli->query($query);

$query = "select * from files where id = $idBook";
$results = $mysqli->query($query);
while($row = $results->fetch_assoc()){
	echo '<h1>'.$row["name"].'</h1>';
	echo '<h1>'.$row["path"].'</h1>';
}
?>
<section id="tagsForBook">

</section>
<div>
	<input type="text" id="idBook" value="<?php echo $idBook; ?>" hidden>
	<select id="tagList" onFocus="getTagList()"></select>
	<input type="button" value="Добавить" onClick="addRelationFT()">
</div>
</body>
</html>