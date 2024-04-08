<?php

include_once ("ressources/lib/utils.php");

function Article($arg){

    $title = isset($arg->title) ? $arg->title : 'title';
    $overline = isset($arg->overline) ? $arg->overline : '';
    $href = isset($arg->href) ? $arg->href : 'href';
    $description = isset($arg->description) ? $arg->description : 'description';
    $thumbnail = isset($arg->thumbnail) ? $arg->thumbnail : 'thumbnail';
    $video = isset($arg->video) ? (string)$arg->video : (string)false;

    return "
    <div class='swiper-slide' data-video='{$video}'>
        <a href='{$href}' target='_blank'>
            <div class='img img-fit'>
                <img src='{$thumbnail}' alt=''>
            </div>
            <p class='type-title'>{$overline}</p>
            <h3 class='title'>{$title}</h3>
            <p>{$description}</p>
        </a>
    </div>
    ";
}



function Swiper($arg){
    
    $title = isset($arg->title) ? $arg->title : 'title';
    $articles = isset($arg->articles) ? $arg->articles : [];
    $articles = map($articles, 'Article');

    return "
    <div class='container'>
                <h2 class='title'>{$title}</h2>
            </div>
            <div class='swiper swiper-news has-margin-left '>
                <div class='swiper-wrapper'>
                    {$articles}
                </div>
            </div>
            <div class='swiper-btn-block'>
                <div class='swiper-btn pre-btn'></div>
                <div class='swiper-btn next-btn'></div>
            </div>
    ";
}