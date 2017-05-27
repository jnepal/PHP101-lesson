<?php echo "<PRE>";
 print_r($_POST);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="0">
    <tr>
      <td width="91">Name</td>
      <td width="93"><input type="text" name="name" /></td>
    </tr>
    <tr>
      <td>Age</td>
      <td><p>
        <input type="text" name="age" />
      </p></td>
    </tr>
    <tr>
      <td>Hobby 1</td>
      <td><input type="text" name="hobby[]" id="textfield" /></td>
    </tr>
    <tr>
      <td>Hobby 2</td>
      <td><input type="text" name="hobby[]" id="textfield2" /></td>
    </tr>
    <tr>
      <td>Hobby 3</td>
      <td><input type="text" name="hobby[]" id="textfield3" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>