<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$country=array(Nepal,Afghanistan,Honkong,Ireland,U.A.E,Bangladesh);
?>
<table width="200" height="300" border="1">
    <tr>
    <td>S.N</td>
    <td>Country</td>
    </tr>
    <?php 
	foreach($country as $k=>$v)
	{
	?>
    <tr <?php if($k%2==0) {?> bgcolor="#999999" <?php } ?>>
    <td><?php echo $k+1; ?></td>
    <td><?php echo $v ?></td>
    </tr>
    <?php }	?>
</table>
</body>
</html>