<?php
/**
 * Created by PhpStorm.
 * User: mashud
 * Date: 7/24/17
 * Time: 5:43 PM
 */

//array_walk() Practice



$walkingArray = array(
    "Bangla"=>"85%",
    "English"=>"80%",
    "Physics"=>"70%",
    "Chemestry"=>"85%",
    "Biology"=>"75%",
    "Mathmetics"=>"95%"
);


function marks($value, $key){
    echo "I got $value marks in $key."."<br/>";
};

array_walk($walkingArray,"marks")


?>