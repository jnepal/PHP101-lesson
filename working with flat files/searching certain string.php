<?php
$str=file_get_contents("news.txt");
$key=strpos($str,"Corruption");
echo $key;



?>