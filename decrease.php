<?php


echo "<pre>";

$mesMember = array(
    'Khaled Vai',
    'Enaan',
    'Rahim',
    'Samian',
    'Mustafiz',
    'Saifur',
    'Mashud'
);

print_r($mesMember);

array_pop($mesMember);

print_r($mesMember);

print_r(array_pad($mesMember,11,"blue"));




array_shift($mesMember);

print_r($mesMember);

array_unshift($mesMember,"Vai");

print_r($mesMember);

shuffle($mesMember);

print_r($mesMember);



$mesMember2 = array(
    'Big'=>'Khaled Vai',
    'small'=>'Enaan',
    'manager'=>'Rahim',
    'jobholder'=>'Samian',
    'support'=>'Mustafiz',
    'sweden'=>'Saifur',
    'Developer'=>'Mashud'
);




print_r(array_values($mesMember2));


$mesMember3 = array(
    'Khaled Vai',
    'Khaled Vai',
    'Khaled Vai',
    'Enaan',
    'Rahim',
    'Rahim',
    'Samian',
    'Samian',
    'Mustafiz',
    'Saifur',
    'Saifur',
    'Mashud'
);


print_r(array_count_values($mesMember3));

print_r(array_count_values($mesMember2));

asort($mesMember2);

foreach ($mesMember2 as $piece=>$piece_val){
    echo "$piece_val is $piece"."<br/>";
};

echo"<br/>";
echo"<br/>";
echo"<br/>";

arsort($mesMember2);

foreach ($mesMember2 as $r=>$r_val){
    echo "$r_val is $r"."<br/>";
};


echo"<br/>";
echo"<br/>";
echo"<br/>";

$randomise = array_rand($mesMember,2);

echo $mesMember[$randomise[0]]."<br/>".$mesMember[$randomise[1]];



?>