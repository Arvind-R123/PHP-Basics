<h3>PRE INCREMENT (++$a)</h3>

<?php 
$value = 5;
++$value;
++$value;
echo $value;
?>
<br>
<?php
$a = 5;
$b = ++$a;
echo $a .'<br>';
echo $b;
?>

<br><br>
<h3>POST INCREMENT($a++)</h3>

<?php

$value = 5;
$value++;
$value++;
echo $value .'<br>'; 

$a = 5;
$b = $a++;
echo $a . '<br>';
echo $b;

?>

<br><br>
<h3>PRE DECREMENT($--a)</h3>

<?php

$value = 5;
--$value;
--$value;
echo $value. '<br>';

$a = 5;
$b = --$a;

echo $a . '<br>';
echo $b;

?>

<br><br>
<h3>POST DECREMENT ($a--)</h3>

<?php

$value = 5;
$value--;
$value--;
echo $value. '<br>';

$a = 5;
$b = $a--;
echo $a . '<br>';
echo $b;

?>





