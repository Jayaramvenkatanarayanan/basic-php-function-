<html><body>
<?php
// Array basic
$num=array(1,2,3,44);
echo $num[3]."</br>";
echo print_r($num)."</br>";
$mixed=array("jai","sa",array(1,99,100)) // Create array inside array ;?>
<?php echo $mixed[2][2]."</br>"; // Array inside view?>
<?php $mixed[1] = "cat"; // Add array  ?>
		<?php $mixed[3] = "mouse"; // Add array  ?>
		<?php $mixed[] = "horse" // Add array last  ;
    echo print_r($mixed)."</br>";  // get full view using debug ?>

<?php  $array=["gg",77,779]; // php 5 create array?>
<pre>
<?php echo print_r($array)."</br>"; // debug?></pre>

</body></html>
