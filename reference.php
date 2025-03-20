<h3>REFERENCE-FUNCTION</h3>

<?php

$number = 2;

function mul(&$num)
{
    $num *= 5;
}
$multiplication = mul($number);
echo $number;

?>

<br><br>
<?php

$number = 10;

function add(&$num)
{
    $num += 5;
}
$addition = add($number);
echo $number;

?>