<?php

echo "Lets count simple math, like Arithmetic mean. Send me first number" . PHP_EOL;
$get_first_num = fgets(STDIN);
// Remove leading and trailing whitespace
$get_first_num = trim($get_first_num);
echo "Ok. Your first number is = $get_first_num" . PHP_EOL;


echo "Now, send me your second number." . PHP_EOL;
$get_second_num = fgets(STDIN);
// Remove leading and trailing whitespace
$get_second_num = trim($get_second_num);

echo "Good. Your second number is = $get_second_num" . PHP_EOL;
$arithmetic_mean = ($get_first_num + $get_second_num) / 2;


echo "Arithmetic mean for numbers $get_first_num and $get_second_num is = $arithmetic_mean";