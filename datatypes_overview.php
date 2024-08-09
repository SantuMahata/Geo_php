<?php

# Data types and type Casting:


# 1.   Boolean data types :  True/False;

$completed = true;

# 2. Integer data types: 1,2,6,-6,-8(no decimal value);

$score = 75;

# 3. Float data types: 1.2, 2.0 , -5.1, -2.004;

$price = 99.50;

# 4. string data dypes : "Hello", "Mr. Bose";

$greeting = 'Hello Mr. Bose';

echo $completed .'</br>';
echo $score .'</br>';
echo $price .'</br>';
echo $greeting .'</br>';

echo gettype($completed).'</br>';
echo gettype($score).'</br>';
echo gettype($price).'</br>';
echo gettype($greeting).'</br>';


var_dump($completed);
echo '<br>';
var_dump($score);
echo '<br>';
var_dump($price);
echo '</br>';
var_dump($greeting);
echo '</br>';

#5. array data types: 

$companies=[1,2.2,-4,'a','B'];

print_r($companies);














?>