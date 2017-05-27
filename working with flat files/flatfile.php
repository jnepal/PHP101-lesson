<?php
$str=file_get_contents("text1.txt");
$str="hello";
//creates new text files
file_put_contents("text2.txt",$str);
?>