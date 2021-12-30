<?php
$a=file("README.md");
foreach($a as $line){
echo $a;
   $q=explode("<!--ageB->",$line);
   echo $q[0];
   if(count($q)==2){
     $dateOfBirth = "19-11-2002";
     $today = date("Y-m-d");
     $diff = date_diff(date_create($dateOfBirth), date_create($today));
     echo '<!--ageB->'.$diff->format('%y')."|\n";
   }
}
