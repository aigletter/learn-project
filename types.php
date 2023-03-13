<?php

$obj = new stdClass();
print_r($obj);


echo gettype($obj) . PHP_EOL;

$county1 = 'USA';
$county2 = 'Ukraine';

$counties = [
    'USA',
    'Ukraine'
];

$ages = [
    22,
    33,
];

$user = [
    'John',
    23,
    true
];

echo gettype($user) . PHP_EOL;
echo gettype($county1) . PHP_EOL;

$user = [
    'name' => 'John',
    'age' => 23,
    'is_married' => true
];
$user['test'] = 'Boo';

$var = 10;




/*$user = [
    0 => 'John',
    1 => 23,
    2 => true
];*/

/*print_r($user);

$user[] = 'Boo';

print_r($user);

$user[6] = 'Foo';
$user[] = 'Something';

print_r($user);

echo count($user);*/

// Hello 'world'
/*$str = 'Hello \'world\'';
$str = "Hello \"world\"";*/


/*echo PHP_INT_MIN;
echo PHP_EOL;
echo PHP_INT_MAX;*/

/*$f = 5.2;

var_dump($f);*/

/*$userName = 'John';

$str1 = 'Hello \n ' . $userName;
$str2 = "Hello \n $userName";


$str3 = <<<HERE
    Форматированная строка с возможностью подставлять переменные.
	Например: имя пользователя $userName
HERE;



echo $str1;
echo $str2;

echo PHP_EOL;
echo PHP_EOL;

echo $str3;*/