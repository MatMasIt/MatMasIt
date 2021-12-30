<?php
$a=file("README.md");
$final ="";
foreach($a as $line){
   $q=explode("<!--ageB->",$line);
   $final.=$q[0];
   if(count($q)==2){
     $dateOfBirth = "19-11-2002";
     $today = date("Y-m-d");
     $diff = date_diff(date_create($dateOfBirth), date_create($today));
     $final.= '<!--ageB->'.$diff->format('%y')."|\n";
   }
}
file_put_contents("README.md",$final);
