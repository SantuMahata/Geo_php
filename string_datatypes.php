<?php



$FirstName='Will';
$LastName='Smith';

$Name = $FirstName . ' ' . $LastName;


echo $Name . '<br/>';
echo $Name[0] . '<br/>';
echo $Name[1] . '<br/>';
echo $Name[2] . '<br/>';
echo $Name[3] . '<br/>';
echo $Name[4] . '<br/>';
echo $Name[5] . '<br/>';
echo $Name[6] . '<br/>';
echo $Name[-1] . '<br/>';

$Name[1] ='I';
echo $Name. '<br/>';

//Heredoc:
$x=1;
$y=2;


$text = <<< TEXT
YOU $x
ARE $y
GOOD
TEXT;

echo nl2br($text);

echo '<br/>';


// Nowdoc:

$text = <<< 'TEXT'
YOU $x
ARE $y
GOOD
TEXT;

echo nl2br($text);







?>