<?php

$a = 10;
$b = 2;

$arr = [
    'USA',
    'Ukraine'
];

foreach ($arr as $item) {
    if ($item === 'Ukraine') {
        continue;
    }
    echo $item . PHP_EOL;
}

echo PHP_EOL;

$user = [
    'name' => 'John',
    'age' => 34
];

foreach ($user as $key => $value) {
    echo $key . ': ' . $value . PHP_EOL;
}

/*for ($i = 0; $i < count($arr); $i++) {

}*/

/*do {
    $element = array_shift($arr);
    echo $element . PHP_EOL;
} while (count($arr));*/

/*for ($i = 0; $i < $a; $i++) {
    echo $i . PHP_EOL;
}*/

/*$counter = 0;
do {
    echo $counter . PHP_EOL;
    $counter++;
} while ($counter < $a);*/

/*
while ($counter < $a) {
    echo $counter . PHP_EOL;
    $counter++;
    if ($counter === 2) {
        continue;
    }
    if ($counter === 5) {
        break;
    }
}*/

echo 'Exit' . PHP_EOL;

/*switch ($a) {
    case 0:
        echo 'Case 0' . PHP_EOL;
        break;
    case 1:
        echo 'Case 1' . PHP_EOL;
        break;
    case 3:
        echo 'Case 3' . PHP_EOL;
        break;
    default:
        echo 'Default' . PHP_EOL;
}*/

// boolean
// true
// false
/*if ($a) {
    echo 'Work' . PHP_EOL;
} elseif ($a < $b) {
    echo 'else if ' . PHP_EOL;
} else {
    echo 'Not work' . PHP_EOL;
}*/