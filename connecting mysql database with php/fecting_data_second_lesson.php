<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	
	mysql_connect('localhost','root','');
	mysql_select_db ('test');
	$sql="select * from records";
	$res=mysql_query ($sql) or die(mysql_error());
	?>
<table width="200" border="1">
  <tr>
    <td>Name</td>
    <td>ID</td>
    <td>AGE</td>
  </tr>
  
  <?php while ($arr=mysql_fetch_array($res)) {  ?>
  <tr>
  
  
    <td>
	<?php echo $arr['NAME'];
	?></td>
    <td><?php echo $arr['ID'];
	?></td>
    <td><?php echo $arr['AGE'];
	?></td>
  <td><a href="edit.php?id=<?php echo $arr['ID'] ?>">Edit</a></td>
  <td><a href="delete.php?id=<?php echo $arr['ID']?>" onclick="javascript:return confirm('Are you sure')">Delete</a></td>
  </tr>
  <?php }?>
</table>
</body>
</html>