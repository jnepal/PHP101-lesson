<?php
$a_arr=array('a'=>"apple",
 			 'b'=>"ball");
//$n=count($a_arr);/* Doesnot work in case of associative array*/
foreach ($a_arr as $p =>$d)/*for each statement p refers to key or index and d refers to value*/
{
	echo $p;
	echo "_";
	echo $d;
	echo "</br>";
}

?>