<?php
include_once('connect.php');//to connect with the database and records
echo "<PRE>";
//print_r($_SERVER);
$id=$_GET['id'];
$query="Select * from records where id=".$id;
		$res=mysql_query($query) or die(mysql_error());
		$row=mysql_fetch_array($res);
		print_r($row);
		
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$name=$_POST['name'];
		$age=$_POST['age'];
		
	
	if($name!='')
	{
		//print_r($_POST);
		
		
		$sql="UPDATE RECORDS
		SET NAME='".$name."',AGE='".$age."' WHERE ID=".$id;
		//echo $sql;
		mysql_query($sql);
		
		//echo "Record Inserted Succesfully";
		header("Location:fecting_data_second_lesson.php");
	}
	else
	{
		echo "Name is compulsory";
	}
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">
  <table width="307" border="0">
    <tr>
      <td width="171"> Name</td>
      <td width="120"><input type="text" name="name"  value="<?php echo $row['NAME'];?>"id="textfield" /></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input type="number" name="age" id="textfield3" value="<?php echo $row['AGE'];?>" /></td>
    </tr>
    <tr>
    <td><?php //id?></td>
    <td><input type="hidden" name='id' value="<?php echo $row['ID'];?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="update" id="button" value="Update" /></td>
    </tr>
  </table>
</form>

</body>
</html>