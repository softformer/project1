<?php 

$massiv [0] = "PHP"; 
$massiv [1] = "HTML"; 
$massiv [2] = "CSS";

unset($massiv[1]);

for ($counter = 0; $counter < count($massiv); $counter++)
{ 
   echo $massiv[$counter],"<br />";
} 


?>