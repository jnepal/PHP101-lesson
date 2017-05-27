<?php
include_once('connect.php');
echo $_GET['id'];
$sql="DELETE FROM records where id=".$_GET['id'];
mysql_query($sql);
header("Location:fecting_data_second_lesson.php");

?>