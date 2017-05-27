<?php
$date1="1946-02-05";
$date2=date("y-m-d");
$strdate1=strtotime($date1);//convert date to time
$strdate2=strtotime($date2);
//echo $strdate1;
echo "</br>";
//echo $strdate2;
echo"</br>";
$diff=$strdate2-$strdate1;
echo $diff/(60*60*24*365);


?>