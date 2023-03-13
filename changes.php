<?php

// строки в другие типы

/*$str = 'sdfasdf';

$int = (int) $str;
$float = (float) $str;
$bool = (bool) $str;
$arr = (array) $str;*/


// числа в другие типы

/*$int = -2342;

$float = (float) $int;
$bool = (bool) $int;
$str = (string) $int;
$arr = (array) $int;*/

// числа в другие типы
/*$bool = false;

$int = (int) $bool;
$str = (string) $bool;*/

//$a = 1;

/*$b = (string) $a;
$c = (bool) $a;
$d = (float) $a;

$e = (array) $a;
$f = (object) $a;

print_r($f);*/

/*$b = 'Number ' . $a;

echo $b . PHP_EOL;*/

/*if ($a) {
    echo 'If block' . PHP_EOL;
}*/

/*$res = '3' + 5;

echo gettype($res) . PHP_EOL;

echo $res . PHP_EOL;*/

/*$null = null;
$arr = (array) $null;

var_dump($arr);*/

/*$array = ['hello', 'world'];
$str = (string) $array;

class MyClass
{}
$object = new MyClass();
$str = (string) $object;

var_dump($str);*/

/*$recourse = fopen(__DIR__ . '/test.txt', 'r');
$str = (string) $recourse;
$int = (int) $recourse;

var_dump($recourse);*/

/*;

$func = function ($value) {
    echo $value . PHP_EOL;
};

array_walk($array, $func);*/

$array = ['USA', 'Ukraine'];

$object = new ArrayIterator($array);

foreach ($object as $item) {
    echo $item . PHP_EOL;
}

exit();