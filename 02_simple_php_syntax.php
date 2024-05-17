<?php

// Task 1: Variables

$name = 'Krystel L. Magpayo' ;
$age = 21 ;
$address = '12 kasiyahan St. Brgy Holy Spirit Q.C.' ;
$hobbies = 'Travel, Reading, Listening to music' ;
$pet_peeve = 'petty po ba si peeve choz, Nittygritty Petty Rules po kc but im con fine' ;

echo $name, '<br>';
echo $age, '<br>';
echo $address, '<br>';
echo $hobbies, '<br>';
echo $pet_peeve, '<br> <br>';


//Task 2: Single-line comment

//$hobbies = 'Travel, Reading, Listening to music' ;
//$pet_peeve = 'petty po ba si peeve choz, Nittygritty Petty Rules po kc but im con fine' ;


//Task 3: Constants;

define('NAME','Krystel L. Magpayo');
define('AGE', 21);
define('ADDRESS','12 kasiyahan St. Brgy Holy Spirit Q.C.');
define('HOBBIES','Travel, Reading, Listening to music');
define('PET_PEEVE','petty po ba si peeve choz, Nittygritty Petty Rules po kc but im con fine');

echo NAME, '<br>';
echo AGE, '<br>';
echo ADDRESS, '<br>';
echo HOBBIES, '<br>';
echo PET_PEEVE, '<br>';

//Task 4: var_dump

echo '<pre>';
var_dump(NAME, AGE, ADDRESS, HOBBIES, PET_PEEVE) ;
echo '<pre>';

//Task 5: Multi-line comment

/* Why do you have to play with my mind ~ ~*/

