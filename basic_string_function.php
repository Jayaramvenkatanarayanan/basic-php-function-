<?php
// Basic String function

$name="jayaram is php programmer doing mca ";

$n2=strlen($name);
echo " Is this String length $n2 </br> ";
echo " Is this String empty empty($name) </br> ";
echo " Is this String revers". strrev($name) . "</br>" ;
echo " Is this String upper and lower" . strtoupper($name) . strtolower($name) ."</br>";
echo " Is this String upper and lower" . ucwords($name) ."</br>"  . ucfirst($name) ."</br>";
echo " Is this String revers ". trim($name) . "</br>" ;
echo " Is this String revers ". strstr($name,"php") . "</br>" ;
echo " Is this String revers ". str_replace("mca","MCA",$name) . "</br>" ;
echo " Is this String revers ". strpos($name,"mca") . "</br>" ;
echo " Is this String revers ". strchr($name,"i") . "</br>" ;
 ?>
