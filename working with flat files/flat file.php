<?php
//reading another text file from php
$fp=fopen("text.txt","r");
$content=fread($fp,filesize("text.txt"));
echo $content;
//creating new text file from php
$fp=fopen("text1.txt","w");
$content="helo";
echo $content;
?>