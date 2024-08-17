<?php

$programmingLanguages = array('php', 'python', 'java');

echo '<pre>';

print_r($programmingLanguages);



echo '<br/>';

echo $programmingLanguages[0];
echo '<br/>';

echo $programmingLanguages[1];

echo '<br/>';

echo $programmingLanguages[2];


echo '<br/>';

var_dump($programmingLanguages);

echo '<br/>';
echo count($programmingLanguages);

echo '<br/>';

$programmingLanguages[] = "C++";


echo '<pre>';

print_r($programmingLanguages);


array_push($programmingLanguages, 'JAVASCRIPT','SQL','GO');


echo '<pre>';

print_r($programmingLanguages);

echo '<pre>';


$programmingLanguage = [
    'php'=>'8.1.4',
    'python'=>'3.9'
];


echo '<pre>';

print_r($programmingLanguage);


echo '<pre>';

echo $programmingLanguage['php'];

echo '<br/>';



$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
    
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2]."<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2]."<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2]."<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2]."<br>";





 echo '<br/>';

 $colors = ['yellow','green','blue','red'] ;

 for($i = 0; $i<=3; $i++){
    echo $colors[$i]."<br>";
 }


echo "<ul>";

 $colors = ['yellow','green','blue','red'] ;

 for($i = 0; $i<=3; $i++){
    echo "<li> $colors[$i] </li>";
 }
 echo "</ul>";



 echo "<ol>";

 $colors = ['yellow','green','blue','red'] ;


//for loop


 for($i = 0; $i<=3; $i++){
    echo "<li> $colors[$i] </li>";
 }
 echo "</ol>";

//foreach loop
 foreach($colors as $col){
   echo $col ."<br>";
 }





 //Associative Array

 $age = [
    "Bill" => 25,
    "Steve" => 28,
    "Elon" => 22,
 ];

 echo $age['Bill'] . '<br>';
 echo $age['Steve'] . '<br>';
 echo $age['Elon'] . '<br>';


 //foreach loop:

   foreach($age as $key => $ag){
      echo $key . "=" .$ag ."<br>";
    }


// Multidimentional array :


$cars = array (
   array("Volvo",22,18),
   array("BMW",15,13),
   array("Saab",5,2),
   array("Land Rover",17,15)
 );

 print_r($cars);

 echo $cars[0][0]."  ";
 echo $cars[0][1]."  ";
 echo $cars[0][2]."  ";

 echo "<br>";

 echo $cars[1][0]."  ";
 echo $cars[1][1]."  ";
 echo $cars[1][2]."  ";

 echo "<br>";

 echo $cars[2][0]."  ";
 echo $cars[2][1]."  ";
 echo $cars[2][2]."  ";


 echo "<br>";

 echo $cars[3][0]."  ";
 echo $cars[3][1]."  ";
 echo $cars[3][2]."  ";

 echo "<br>";
 echo "<br>";
 echo "<br>";

 // for loop in multidimentional array:

   for($row = 0; $row<=3; $row++){
      for($col = 0; $col<=2; $col++){

         echo $cars[$row][$col]."  ";

      }
      echo "<br>";

   };


   echo "<br>";
   echo "<br>";
   echo "<br>";


   // Foreach loop in multidimentional array:
echo "<table border = 2px>";
   foreach($cars as $c1){
      echo"</tr>";
      foreach($c1 as $c2){
         echo "<td> $c2 </td>";
      
      }

      echo"</tr>";

   }

echo "</table>";


// Multidimentional associative array:


$Marks = [
   "Krishna" => [
      "Physics" => 89,
      "Chemistry" => 90,
      "Math" => 98
   ],
   "Salman" => [
      "Physics" => 79,
      "Chemistry" => 97,
      "Math" => 94
   ],
   "Mohan" => [
      "Physics" => 98,
      "Chemistry" => 92,
      "Math" => 98
   ]
   ];
echo "<table  border = 2px>";
   foreach ($Marks as $key => $v1){
      echo "<tr>
         <td>$key</td>";
         foreach ($v1 as $v2){
            echo "<td> $v2 </td>";
         }
         echo "</tr>";

   }
   echo "</table>";



   // Array count & sizeof:


   $fruits = ["Mango","Banana","Apple","Orange"];

   echo count($fruits) ."<br>";
   echo sizeof($fruits)."<br>";





?>
