<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$a=$_GET['age'];
if($a<=10)
{
	echo "Child";
}
elseif($a>10 && $a<=20)
{
	echo "Teen";
}
elseif($a>20 && $a<=30)
{
	echo "Youth";
}
elseif($a>30 && $a<=40)
{
	echo "Adult";
}
elseif($a>40 && $a<50)
{
	echo "Adult";
}
elseif($a>=50)
{
	echo "Old";
}
?>
</body>
</html>