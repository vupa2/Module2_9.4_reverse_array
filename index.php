<?php
require_once 'Stack.php';

$stack = new Stack();

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$amount = count($array);

for ($i = 0; $i < $amount; $i++) {
    $stack->push(array_pop($array));
}

for ($i = 0; $i < $amount; $i++) {
    array_unshift($array, $stack->pop());
}

echo "<pre>";
var_dump($array);
