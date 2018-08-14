<?php 
    $auto= [
        "Marca" => "Ford",
        "Color"=> "Negro"
    ];
    $json = json_encode($auto);
    json_decode($json, false);
    var_dump($json);
