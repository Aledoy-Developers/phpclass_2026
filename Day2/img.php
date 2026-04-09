<?php

$img = array();

$img[] = 'img3.png';
$img[] = 'img4.png';
$img[] = 'img5.png';

shuffle($img);

echo '<img src="images/'.$img[0].'">';


?>