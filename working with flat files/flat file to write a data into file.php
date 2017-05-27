<?php
$fp=fopen("test1.txt","w");//w for write and r for read w+r for both read and write
$content="text only"."\n";

fwrite($fp,$content);
fwrite($fp, "\n hello");
fwrite($fp, "\n again");



?>