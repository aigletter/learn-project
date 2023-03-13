<?php

define('DEFAULT_COUNTRY', 'Ukraine');

define('DEFAULT_COUNTRY', 'USA');

const DEFAULT_CITY = 'Kyiv';

//const default_city = 'ODESSA';

echo DEFAULT_COUNTRY;

echo DEFAULT_CITY;

const COUNTRIES = [
    'Ukraine',
    'USA',
];

//echo default_city;

$userName = 'John';

$varName = 'userName';

echo ${$varName};


$obj = new stdClass();
$obj->userName = 'Иван';

echo $obj->{$varName};


print_r($obj);
var_dump($userName);

$result = isset($helloWorld);

var_dump($result);




$n = [];
$r1 = isset($n);
$r2 = empty($n);


$county1 = 'USA';
$county2 = 'Ukraine';

$counties = [
    $county1,
    $county2
];





/*$name = 'Иван';

echo $name;

$name = 12;

echo $name;*/

/*$a = 10;
$b = 2.5;

$a = $a - $b;*/

/*unset($name);

echo $name;*/


/*$Name = 'jOHN';
$NAME = 'JOHN';


$age = 22;

$userName = 'John';
$user_name = 'John';


echo $name;

$countries = [
    'USA',
    'Ukraine'
];*/

