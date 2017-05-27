<?php
//echo "<PRE>";
//print_r($_POST);
mysql_connect('localhost','root','');
mysql_select_db('personal');

	if(name!='')
	{
		if(email!='')
		{
			if(gender!='')
			{
				if(password!='')
				{
					$name=$_POST['name'];
					$age=$_POST['age'];
					$email=$_POST['email'];
					$gender=$_POST['gender'];
					$password=$_POST['password'];
					$sql="INSERT INTO RECORDS(Name,Email,Gender,Password,Age)
					VALUES('".$name."','".$email."','".$gender."','".$password."','".$age."')";
					mysql_query($sql)or die(mysql_error());
					header("Location:form_data_displayer.php");
				}
			}
		}
	}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">
function validate()
{
	var name=document.form1.name.value;
	var age=document.form1.age.value;
	var password=document.form1.password.value;
	var confirmpassword=document.form1.confirmpassword.value;
	var email=document.form1.email.value;
	if(name=='')
	{
		document.getElementById('name').innerHTML="*This field is compulsory";
		document.form1.name.focus();
		return false;
	}
	if(email=='')
	{
		document.getElementById('email').innerHTML="*This field is compulsory";
		document.form1.email.focus();
		return false;
	}
	if(password=='')
	{
		document.getElementById('password').innerHTML="*This field is compulsory";
		document.form1.password.focus();
		return false;
	}
	if(confirmpassword=='')
	{
		document.getElementById('confirmpassword').innerHTML="*This field is compulsory";
		document.form1.confirmpassword.focus();
		return false;
	}
	if(confirmpassword!=password)
	{
		document.getElementById('confirmpassword').innerHTML="Passwords don't match";
		document.form1.confirmpassword.focus();
		return false;
	}
}

</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="491" height="156" border="0">
    <tr>
      <td width="158">Name</td>
      <td width="150"><input type="text" name="name" id="textfield" /></td>
      <td width="161"><span id="name"></span></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><input type="number" name="age" id="textfield2" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Email Address</td>
      <td><input type="text" name="email" id="textfield3" /></td>
      <td><span  id="email"></span></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="password" id="textfield4" /></td>
      <td><span id="password"></span></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><input type="password" name="confirmpassword" id="textfield5" /></td>
      <td><span id="confirmpassword"></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input onclick="javascript: return validate() "type="submit" name="button" id="button" value="Submit" /></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>