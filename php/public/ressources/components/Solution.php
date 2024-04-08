<?php
include_once ("Button.php");
include_once ("ressources/lib/utils.php");


function Slide($arg)
{

    $title = isset($arg->title) ? $arg->title : 'title here';
    $description = isset($arg->description) ? $arg->description : 'description here';
    $picture = isset($arg->picture) ? $arg->picture : 'description here';

    return "
    <div class='solution-slide'>
        <img class='solution-picture' src='/image/booth/{$picture}.webp' alt='AUO Touch Taiwan booth'/>
        <div class='solution-text flex f-col gap-m'>
            <h3><b>{$title}</b></h3>
            <p>{$description}</p>
        </div>
    </div>";
}


function Solution($arg)
{

    $title = isset($arg->title) ? $arg->title : 'title here';
    $color = isset($arg->color) ? $arg->color : 'ice';
    $slides = isset($arg->slides) ? $arg->slides : array();

    $id_name = 'solution-block-' . str_replace(" ", "-", strtolower($title));
    $buttons = count($slides) > 1 ? array_map(fn($slide) => array ('title' => $slide->title, 'color' => $color), $slides) : array();

    $buttons = map($buttons, 'Button');

    $slides = map($slides, 'Slide');

    return "
    <div id='{$id_name}' class='solution-block flex f-col f-center gap-xl' data-color={$color}>
        <h2 class='text-center'>{$title}</h2>
        <div class='solution-buttons flex f-row gap-l f-wrap f-center'>
            {$buttons}
        </div>
        <div class='solution-slider'>
            {$slides}
        </div>
    </div> 
    ";
}