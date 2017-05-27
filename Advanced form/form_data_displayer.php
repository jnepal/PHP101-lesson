<?php
mysql_connect('localhost','root','');
mysql_select_db('personal');
$sql="SELECT * FROM records";
$rec=mysql_query($sql);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="471" height="141" border="0">
  <tr bgcolor="#999999>
    <td height="45">ID</td>
    <td>Name</td>
    <td width="120">Email</td>
    <td width="72">Gender</td>
    <td width="51"><p>Age</p></td>
    <td width="47">&nbsp;</td>
  </tr>
  
  <?php while($records=mysql_fetch_array($rec)){?>
  <tr bgcolor="<?php if(($records['ID'])%2==0){?>#CCCCCC"<?php } ?>" >
    <td><?php echo $records['ID']; ?></td>
    <td><?php echo $records['Name']; ?></td>
    <td><?php echo $records['Email']; ?></td>
    <td><?php echo $records['Gender']; ?></td>
    <td><?php echo $records['Age']; ?></td>
    <td></td>
  </tr>
  <?php } ?>
</table>
</body>
</html>