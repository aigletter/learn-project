<?php

$str = 'Hello world!!!';

//$position = strpos($str, 'Hello');

// true
$result1 = 0 == false;

// false
$result2 = 0 != false;

if (strpos($str, 'Hello') != false) {
    echo 'Найдено' . PHP_EOL;
}

/*$position = strpos($str, 'blablabla');

var_dump($position);*/

$float = 1.0;
$int = 1;

// false
$result = $float === $int;