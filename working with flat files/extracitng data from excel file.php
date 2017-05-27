<?php
$str=file_get_contents("excel.csv");
$explode_str=explode("\n",$str);
echo "<PRE>";
echo $str;
$explode_str=array_filter($explode_str);//filters null value
print_r($explode_str);
foreach($explode_str as $k=>$v)
{
	if ($k>0)
	{
		$inner_str=explode(",",$v);
		print_r($inner_str);
	}
	$sql="INSERT INTO TABLE(A,B,C)
	VALUES($inner_str[0],$inner_str[1],$inner_str[3])";
	echo $sql;
}


?>