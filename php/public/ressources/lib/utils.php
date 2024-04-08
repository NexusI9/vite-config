<?php


function map($content, $component){
    return implode('', array_map(fn($obj) => $component((object) $obj), $content));
}

function read($file){
    return  json_decode(file_get_contents($file, true));
}
