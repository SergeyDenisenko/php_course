<?php

define(BR, '<br/>');

// variable variable

$a = 'hello';
$$a = 'world';
echo "$a ${$a}" . BR;

// global variable

$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;
    $b = $a + $b;
}

Sum();
echo $b . BR;

// global array

function Sum2()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Sum2();
echo $b . BR;

// static variable

function test()
{
    static $a = 0;
    echo "function test: $a <br/>";
    $a++;
}
test();
test();
test();

function test2()
{
    static $count = 0;

    $count++;
    if ($count < 10) {
        test2();
    }
}
test2();