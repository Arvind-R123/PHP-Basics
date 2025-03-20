<h3>TERNARY OPERATORS</h3>

<p>Syntax:</p>
<p><strong>expression1?expression2:expression3;</strong></p>


<?php

$a = 20;
$b = 10;
$value = ($a>=$b)?"It's Correct":"It's Wrong"; // ! COrrect
echo $value. '<br>';


$a = 10;
$b = 20;
$value = ($a>=$b)?"It's Correct":"It's Wrong"; // ! Wrong
echo $value;
?>
