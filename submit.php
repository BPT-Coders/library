<?php
//Путь до папки с изображениями, где хранятся загруженные изображения
$dir = "./pdf/"; 
$_FILES["file"]["type"] = strtolower($_FILES["file"]["type"]);

if ($_FILES["file"]["type"] == "image/png"
|| $_FILES["file"]["type"] == "image/jpg"
|| $_FILES["file"]["type"] == "image/gif"
|| $_FILES["file"]["type"] == "image/jpeg"
|| $_FILES["file"]["type"] == "image/pjpeg"
|| $_FILES["file"]["type"] == "application/pdf"
   )
{
  // Новое имя изображения
  $filename = md5(date("YmdHis")).".pdf";
  $file = $dir.$filename;

  // Копирование файла 
  move_uploaded_file($_FILES["file"]["tmp_name"], $file);

  // Ответ сервера: путь до загруженного файла
  $array = array(
    "filelink" => "pdf/".$filename
  ); 
  echo stripslashes(json_encode($array)); 
}
?>