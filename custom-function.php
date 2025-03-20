<h3>CUSTOM-FUNCTION</h3>

<?php

function car($name)
{
    echo "$name";
}
car("BMW")

?>

<br><br>

<?php 

function company($name, $num, $place)
{
    echo "$name $num $place";
}
company("Selten =>", "1 => ", "Devakottai" . '<br>');
company("Selten =>", "2 => ", "Karaikudi");

?> 