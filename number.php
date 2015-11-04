<?php
// Basic num1
$val=4;
echo "Absolute value : ". abs(44 -296.7) ."</br>";
echo "n power : ". pow(2,4) ."</br>";
echo "n power : ". sqrt(100) ."</br>";
echo "n power : ". fmod(20,7) ."</br>";
echo "n power : ". rand() ."</br>";
echo "n power : ". rand(3,80) ."</br>";
echo " </br> += : ". $val += 4 ."</br>";
echo " </br>- = : ". $val-=4 ."</br>";
echo " </br> *= : ". $val*=4 ."</br>";
echo " </br> /= : ". $val/=4 ."</br>";
echo " </br> ++ : ". $val++ ."</br>"; echo $val;
echo " </br> -- : ". $val-- ."</br>"; echo $val."</br>";
echo 1+"2 house";
// Float point
$val2=3.67;
$val3=7;
echo "<br>".$val3;
echo "<br>"."Round float : ". round($val2,3)."</br>";
echo "<br>"."Round float : ". ceil($val2)."</br>";
echo "<br>"."Round float : ". floor($val2)."</br>";
//is check function
echo "Is{$val2} integer? : ". is_integer($val2)."<br>";
echo "Is{$val2} Float? : ". is_float($val2)."<br>";
echo "Is{$val3} numeric? : ".is_numeric($val3)."<br>";
 ?>
