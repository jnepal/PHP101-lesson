<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$arr=array(
			array('name'=>'Ram',
				  'age'=>25),
		    array('name'=>'Sita',
			      'age'=>'24')
		  );

echo '<PRE>';
print_r ($arr);
	
?>
<ul>
	<li><a href="detail.php" > Ram</a></li>
</ul>
<?php
foreach($arr as $v)
{
	//print_r ($v);
	
}?>
<ul>
	<li><a href="detail.php" > Ram</a></li>
</ul>
<?php


?>


</body>
</html>