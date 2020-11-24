<?php

$info = array('coffee', 'brown', 'caffeine');
echo "'coffee', 'brown', 'caffeine' <br/>";

// Составить список всех переменных
list($drink, $color, $power) = $info;
echo "drink: $drink <br/>";
echo "color: $color <br/>";
echo "power: $power <br/>";
echo "$drink is $color and $power makes it special. <br/>";

// Составить список только некоторых из них
list($drink, , $power) = $info;
echo "drink: $drink <br/>";
echo "power: $power <br/>";
echo "$drink has $power. <br/>";

// Или только третья
list( , , $power) = $info;
echo "power: $power <br/>";
echo "I need $power! <br/>";

$info = array('coffee', 'brown', 'caffeine');
list($a[], $a[], $a[]) = $info;
var_dump($a);