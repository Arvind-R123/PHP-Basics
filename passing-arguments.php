<h3>PASSING-ARGUMENTS</h3>

<?php

function add($a,$b){
    $c = $a+$b;
    return $c;
}
echo "5+5= " .add(5,5) . '<br>';

echo "25+25= " .add(25,25);


?>

<br><br>

<?php

function name($car, $color){
    return ("$car $color");
}
echo name("BMW","Red");

?>