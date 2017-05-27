<?php
mysql_connect('localhost','root','');
mysql_select_db('test');
$sql="select * from records";
$res=mysql_query ($sql) or die(mysql_error());//die(mysql_error()) to show error
/*var_dump ($res);*/ //var_dump to show datatypes like print_r show the contents of the array
$arr=mysql_fetch_array($res);//to fetch the dataq from database
print_r ($arr);





?>