<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define('BR', '<br/>');

$name = "GeekBrains user";
echo "Hello, $name".PHP_EOL.BR;

define('MY_CONST', 100);
echo MY_CONST.BR;

$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;

echo "<br/>Десятеричная система $int10 = 42<br/>";
echo "Двоичная система 0b101010 = $int2<br/>";
echo "Восьмеричная система 052 = $int8<br/>";
echo "Шестнадцатеричная система 0x2A = $int16<br/>";

$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 |  $precise3".BR;

$a = 1;
echo '$a'.BR;
echo "$a".BR;

$a = 10;
$b = (boolean)$a;
var_dump($b);
echo $b.BR;

$a = 'Hello,';
$b = ' world';
$c = $a . $b . BR;
echo $c;

$a = 4;
$b = 5;
echo $a + $b . BR; // сложение
echo $a * $b . BR; // умножение
echo $a - $b . BR; // вычитание
echo $a / $b . BR; // деление
echo $a % $b . BR; // остаток от деления
echo $a ** $b . BR; // возведение в степень

$a = 4;
$b = 5;
$a += $b;
echo '$a = ' . $a . BR;

$a = 0;
echo $a++ . BR; // постинкремент
echo ++$a . BR; // преинкремент
echo $a-- . BR; //постдекремент
echo --$a . BR; //преддекремент

$a = 4;
$b = 5;
var_dump($a == $b); //сравнение по значению
var_dump($a === $b); // сравнение по значению и типу
var_dump($a > $b); // больше
var_dump($a < $b); // меньше
var_dump($a <> $b); // не равно
var_dump($a != $b); // не равно
var_dump($a !== $b); // не равно без приведения типов
var_dump($a <= $b); // меньше или равно
var_dump($a >= $b); // больше или равно

// Практическое задание

$a = 5;
$b = '05';
var_dump($a == $b); // true; Т.К. происходит сравнение по значению без сравнения типов приведя строку к типу integer
var_dump((int)'012345'); // приводится к типу integer (так как число является целым).
var_dump((float)123.0 === (int)123.0); // false; т.к. происходит сравнение типов, при преобразование double в integer число округлятся до 0
var_dump((int)0 === (int)'hello, world'); // true; т.к. происходит сравнение по типу с явным приведением к типу integer, так как строка не содержит число, она равнаX 0

$a = 1;
$b = 2;
echo $a . BR;
echo $b . BR;
$b += $a;
$a = $b - $a;
$b -= $a;
echo $a . BR;
echo $b . BR;

$h1 = 'Lesson 1';
$title = 'Lesson 1';
$year = getdate();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
</head>
<body>
<h1><?=$h1?></h1>
<p><?=$year['year']?></p>
</body>
</html>