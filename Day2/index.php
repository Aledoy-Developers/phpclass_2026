<?php

// for($i=0; $i<5; $i++)
//     {
//         echo $i." Kayces is learning PHP! <br>";
//     }


//     echo '<hr>';


//   $i = 0;

//     do {
//              echo $i." Kayces is learning PHP! <br>";
//     $i++;
//     } while ($i < 5);





$websites = array('3eenergyltd.com', 'africaenergysolutionsltd.com', 'agbator.com', 'aledoyacademy.com', 'alphagalleon.org', 'alphathelma.com', 'ampoafrica.com', 'apatamemorialschool.com', 'arhcshealth.com', 'atlhubandprojects.com', 'autosheckoilandgas.com', 'bpsolutionsafrica.com', 'cartelfurnitures.com'
, 'chekworks.com.ng');


$num_array = count($websites);

echo '<h2>Simple Loop Array</h2>';

for($i=0; $i<$num_array; $i++)
    {
        $y = $i+1;
        echo $y.' '.$websites[$i];
        echo '<br>';
    }

echo '<hr>';

$websites[] = 'kingsley.com.ng';

echo '<h2>Reverse Array</h2>';

rsort($websites);

for($i=0; $i<$num_array; $i++)
    {
        $y = $i+1;
        echo $y.' '.$websites[$i];
        echo '<br>';
    }

echo '<hr>';

echo '<h2>Shuffle Array</h2>';

shuffle($websites);

for($i=0; $i<$num_array; $i++)
    {
        $y = $i+1;
        echo $y.' '.$websites[$i];
        echo '<br>';
    }

echo '<hr>';

?>