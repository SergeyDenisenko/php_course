<?php

define(BR, '<br/>');

// exercise 1

function comparisonNumbers($a, $b, $range = false)
{
    if ($range) {
        if ($a > b) {
            $min = $b;
            $max = $a;
        } else {
            $min = $a;
            $max = $b;
        }
        $a = mt_rand($min, $max);
        $b = mt_rand($min, $max);
    }

    if ($a > 0 && $b > 0) {
        return (string)("$a - $b = ") . ($a - $b);
    } elseif ($a < 0 && $b < 0) {
        return (string)("$a x $b = ") . ($a * $b);
    } else {
        return (string)("$a + $b = ") . ($a + $b);
    }
}
echo 'exercise 1: ' . comparisonNumbers(-100, 100, true) . BR;

// exercise 2

$a = mt_rand(0, 15);

switch ($a) {
    case 0:
        echo 'exercise 2: ' . ($a++) . BR;
    case 1:
        echo 'exercise 2: ' . ($a++) . BR;
    case 2:
        echo 'exercise 2: ' . ($a++) . BR;
    case 3:
        echo 'exercise 2: ' . ($a++) . BR;
    case 4:
        echo 'exercise 2: ' . ($a++) . BR;
    case 5:
        echo 'exercise 2: ' . ($a++) . BR;
    case 6:
        echo 'exercise 2: ' . ($a++) . BR;
    case 7:
        echo 'exercise 2: ' . ($a++) . BR;
    case 8:
        echo 'exercise 2: ' . ($a++) . BR;
    case 9:
        echo 'exercise 2: ' . ($a++) . BR;
    case 10:
        echo 'exercise 2: ' . ($a++) . BR;
    case 11:
        echo 'exercise 2: ' . ($a++) . BR;
    case 12:
        echo 'exercise 2: ' . ($a++) . BR;
    case 13:
        echo 'exercise 2: ' . ($a++) . BR;
    case 14:
        echo 'exercise 2: ' . ($a++) . BR;
    case 15:
        echo 'exercise 2: ' . ($a++) . BR;
        break;
}

// exercise 3

function addition($a, $b)
{
    return $a + $b;
}

function subtraction($a, $b)
{
    return $a - $b;
}

function multiplication($a, $b)
{
    return $a * $b;
}

function division($a, $b)
{
    return $a / $b;
}

// exercise 4

function mathOperation($arg1, $arg2, $operation)
{
    $arg1 = (float)str_replace(',', '.', $arg1);
    $arg2 = (float)str_replace(',', '.', $arg2);

    switch ($operation) {
        case 'addition':
            return addition($arg1, $arg2);
        case 'subtraction':
            return subtraction($arg1, $arg2);
        case 'multiplication':
            return multiplication($arg1, $arg2);
        case 'division':
            return division($arg1, $arg2);
    }
}

function mathOperation2($arg1, $arg2, $operation = '')
{
    $arg1 = (float)str_replace(',', '.', $arg1);
    $arg2 = (float)str_replace(',', '.', $arg2);

    switch ($operation) {
        case 'addition':
            $str = "$arg1 + $arg2 = ";
            $str .= addition($arg1, $arg2);
            return $str;
        case 'subtraction':
            $str = "$arg1 - $arg2 = ";
            $str .= subtraction($arg1, $arg2);
            return $str;
        case 'multiplication':
            $str = "$arg1 * $arg2 = ";
            $str .= multiplication($arg1, $arg2);
            return $str;
        case 'division':
            $str = "$arg1 / $arg2 = ";
            $str .= division($arg1, $arg2);
            return $str;
        default:
            return 'Operation not specified. Please specify an action.';
    }
}
echo 'exercise 4: ' . mathOperation2('5,1', 4.4, 'subtraction') . BR;
echo 'exercise 4: ' . mathOperation2(5, 'string', 'addition') . BR;

// exercise 5

function power($val, $pow)
{
    static $calculated = 1;
    $calculated *= $val;
    $pow--;

    if ($pow != 0) {
        power($val, $pow);
    }

    return $calculated;
}
echo 'exercise 5: ' . power(3, 9) . BR;

// exercise 6

function currentTime()
{
    $hours = date('H');
    $minutes = date('i');
    $time = $hours;

    if ($hours[1] == 1 && $hours[0] != 1) {
        $time .= ' час ';
    } elseif ($hours[1] > 1 && $hours[1] < 5 && $hours[0] != 1) {
        $time .= ' часа ';
    } else {
        $time .= ' часов ';
    }

    $time .= $minutes;

    if ($minutes[1] == 1 && $minutes[0] != 1) {
        $time .= ' минута';
    } elseif ($minutes[1] > 1 && $minutes[1] < 5 && $minutes != 1) {
        $time .= ' минуты';
    } else {
        $time .= ' минут';
    }

    return $time;
}
echo 'exercise 6: ' . currentTime() . BR;