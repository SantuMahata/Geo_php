<?php




// integer 0, -0 = false;
// float 0.0, -0.0 = false;
// '' = false;
// [] = false;
// null = false;
$iscomplete = true;

if ($iscomplete){
    echo "Success".'</br>';
    
}else{
    echo "Failure";
    echo '</br>'; 
}


echo $iscomplete;
echo '</br>';
var_dump($iscomplete);
?>