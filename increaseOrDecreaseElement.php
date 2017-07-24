<?php
echo "<pre>";

$example = array(
    "maa",
    "baba",
    "bon",
    "vai",
    "dada",
    "dadi",
    "nana",
    "nani"
);

array_push($example,"bonjamai","vagni","vagina");

print_r($example);



$exampleAssociative = array(
    "maa"=>"One",
    "baba"=>"two",
    "bon"=>"three",
    "vai"=>"four",
    "dada"=>"five",
    "dadi"=>"six",
    "nana"=>"seven",
    "nani"=>"eight"
);


array_push($exampleAssociative,"bonjamai","vagni","vagina");

print_r($exampleAssociative);

?>