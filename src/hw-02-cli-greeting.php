<?php

$hello_string = 'Hello World!';
$my_name = 'Alex';
$my_age = 31;
$my_city = 'Poltava';

echo $hello_string . PHP_EOL;

echo "Hi, there. What is your name?" . PHP_EOL;

$get_user_name = fgets(STDIN);
echo "Nice to meet you $get_user_name. How old are you?" . PHP_EOL;


$get_user_age = fgets(STDIN);
echo "Ok. You are $get_user_age. Where do you live?" . PHP_EOL;