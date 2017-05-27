<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php error_reporting( E_ALL ^E_NOTICE)//Removes warning ?> 
<?php
$country=array('Nepal','Afghanistan','Honkong');

?>
<table width="200" border="1">
  <tr>
    <td width="89">ID</td>
    <td width="95">Name</td>
  </tr>
  <?php 
			foreach($country as $k=>$v)//$k can be neglected but to obtain the same result see below
			{?> 						
            
<tr <?php if ($k%2==0){?> bgcolor="#666666"<?php }?> </tr>
    <td width="89"><?php echo $k+1 //instead of $k ++$k should be wriiten ?></td>
    <td width="95"><?php echo $v ?></td>
  </tr>
  <?php } ?>  
</table>
</body>
</html>