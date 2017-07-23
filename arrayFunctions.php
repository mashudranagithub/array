<?php
/**
 * Created by PhpStorm.
 * User: mashud
 * Date: 7/24/17
 * Time: 3:21 AM
 */



//    array_chunk(); practice

$first_array=array(
    'a',
    'b',
    'c',
    'd',
    'e',
    'f',
    'g',
    'h',
    'i',
    'j',
    'k',
    'l',
    'm',
    'n',
    'o',
    'p',
    'q',
    'r',
    's',
    't',
    'u',
    'v',
    'w',
    'x',
    'y',
    'z'
    );

echo "<pre>";

print_r($first_array);

print_r(array_chunk($first_array, 2));

print_r(array_chunk($first_array, 2, true));


$second_array=array(
    '0',
    '1',
    '2',
    '3',
    '4',
    '5',
    '6',
    '7',
    '8',
    '9'
);

print_r($second_array);

print_r(array_chunk($second_array, 3));

print_r(array_chunk($second_array, 3, true));




//    array_slice(); practice


$slicekorbo=array('sjdakjf','dsjifhewj', 'huvhru', 'vnurh', 'rvhrribv');

print_r($slicecomplete = array_slice($slicekorbo, 2));


?>