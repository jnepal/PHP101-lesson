<?php 
$array=array('a','b','c','d');
$arr=implode(',',$array);//converts array to string
print_r($arr);
$str="a,b',c,d";
$b=explode(',',$str);//converting sting to array
print_r($b);



?>