<?php

function Button($arg)
{

    $title = isset($arg->title) ? $arg->title : 'title here';
    $href = isset($arg->href) ? $arg->href : '';
    $color = isset($arg->color) ? $arg->color : 'default';

    $target = isset($href[0]) && $href[0] == '#' ?  "" : "target=\'_blank\'";

    return "
    <a class='btn-grow' href='{$href}' {$target} data-color='{$color}'>
        <span class='btn-title'>{$title}</span>
    </a>
    ";

}