<?php
    $a = [
        "a"=> 1, 
        "b"=> 2, 
        "c"=> 'Yo <3 JSON'
    ];

 echo '<pre>';
 print_r($a);
 echo '</pre>';

 $a = json_encode($a);

 echo '<pre>';
 print_r($a);
 echo '</pre>';

 $b = json_decode($a, true);

 echo '<pre>';
 print_r($b);
 echo '</pre>';


 echo $b["c"]." | ".$b["a"]." | ".$b["b"];
