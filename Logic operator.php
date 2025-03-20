<h3>AND (&&)</h3>

<p>
    T   T   T <br>
    T   F   F <br>
    F   T   F <br>
    F   F   F <br>
</p>

<?php
$a = 35;
$b = 35;

if($a>=$b && $b>=$a)
{ 
    echo "TRUE"; // ! Correct
}
else{
    echo "FALSE";
} 

?>
<br><br>
<h3>OR (||)</h3>

<p>
    F   F   F <br>
    F   T   T <br>
    T   F   T <br>
    T   T   T <br>
</p>

<?php

$a = 0;
$b = 10;

if($a>=$b || $b>=$a)
{
    echo "TRUE"; // ! Correct
}
else{
    echo "FALSE"; 
}


?>

<br><br>
<h3>NOT (!)</h3>

<p>
    T   F <br>
    F   T <br>

</p>
