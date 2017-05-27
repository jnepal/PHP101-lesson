<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<ul>
<?php 
	for($i=1;$i<=10;$i++)
	{
		print "<li>$i</li>";
	}
?>
</ul>
<?php
echo "</br>";
echo"Next method</br>";
for($i=1;$i<=10;$i++)
{
?>
<li><?php echo $i; ?></li>
<br />
<?php } ?>

</body>
</html>