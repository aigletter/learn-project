<?php

/*
[
    0 => 'USA',
    1 => 'Ukraine'
]
result
[
    0 => 'Canada',
    1 => 'USA',
    2 => 'Ukraine',
]
*/
/*$arr = [
    'USA',
    'Ukraine'
];

$users = array(
    'name' => 'John',
    'age' => 34
);

$arr[] = 'Canada';

print_r($arr);

//$users['gender'] = 'male';

array_unshift($arr, 'Germany');

print_r($arr);

$element = array_shift($arr);

array_push($arr, 'Hungary');
$element = array_pop($arr);


echo $arr[0] . PHP_EOL;
echo $users['name'] . PHP_EOL;*/

$student = [
    'name' => 'John',
    'age' => 34,
    'courses' => [
        'PHP' => [
            'date' => '2023-03-01',
            'teacher' => 'Someone'
        ],
        'HTML' => [
            'date' => '2023-03-01',
            'teacher' => 'Someone'
        ],
        'CSS' => [
            'date' => '2023-03-01',
            'teacher' => 'Someone'
        ],
    ]
];

print_r($student);

//echo $student['courses']['PHP'] . PHP_EOL;

echo count($student) . PHP_EOL;