<?php
error_reporting(-1);

define("TABLE", "<table>\n");
define("_TABLE", "</table><br/>\n\n");
define("TR", "\t<tr>\n");
define("_TR", "\t</tr>\n");
define("TD", "\t\t<td>");
define("_TD", "</td>\n");

$html = TABLE;

// Цикл for
for($i = 1; $i <= 10; $i++) {
    $html .= TR;
    for($c = 1; $c <= 10; $c++){
        $html .= TD . "$i x $c = " . $i * $c . _TD;
    }
    $html .= _TR;
}
$html .= _TABLE;

// Цикл while
$html .= TABLE;
$i = 11;
$c = 1;

while($i <= 20) {
    $html .= TR;
    while($c <= 10){
        $html .= TD . "$i x $c = " . $i * $c . _TD;
        $c++;
    }
    $html .= _TR;
    $i++;
    $c = 1;
}
$html .= _TABLE;

// Цикл do while
$i = 21;
$c = 1;
$html .= TABLE;

do {
    $html .= TR;
    do {
        $html .= TD . "$i x $c = " . $i * $c . _TD;
        $c++;
    } while ($c <= 10);
    $html .= _TR;
    $i++;
    $c = 1;
} while ($i <= 30);
$html .= _TABLE;

echo $html;