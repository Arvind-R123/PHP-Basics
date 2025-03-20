<h3>Greater than (>)</h3>

<?php

$a = 7;
$b = 2;

if($a>$b)
{
    echo "$a is Greater than $b"; // ! correct
}
else{
    "Wrong";
}

?>

<br><br>
<h3>Less than (>)</h4>

<?php

$a = 7;
$b = 2;

if($a<$b)
{
    echo "$a is Less than $b";
}
else{
    echo "$b is Less than $a";  // ! Correct
}
?>

<br><br>
<h3>Greater than or equl to (>=)</h3>

<?php

$a = 12;
$b = 10;

if($a>=$b)
{
    echo "$a Greater than or equl to $b"; // ! Correct
}
else{
    echo "$b Greater than or equl to $a";
}

?>

<br><br>
<h3>Less than or equal to (<=)</h3>

<?php

$a = 12;
$b = 10;

if($a<=$b)
{
    echo "$a Less than or equal to $b";
}
else {
    echo "$b Less than or equal to $a"; // ! Correct
}
?>

<br><br>
<h3>Equalitity (==)</h3>

<?php

$a = 10;
$b = 10;

if($a==$b)
{
    echo "$a is Equal to $b";  // ! Correct
}
else{
    echo "$a is Not Equal to $b";
}

?>

<br><br>
<h3>Not Equal (!=)</h3>

<?php

$a = 10;
$b = 20;

if($a!=$b)
{
    echo "$a is Not equal to $b"; // ! correct
}
else{
    echo "$a is equal to $b";
}

?>