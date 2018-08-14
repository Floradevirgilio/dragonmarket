<?php

function crearJson($array)
{

    $filename = "datos/$array.json";


    if (!file_exists($filename)) {

        $template = [];
        $template[$array] = [];


        $json = json_encode($template);


        file_put_contents($filename, $json);
    }
}


 ?>
