<?php


function Forum($arg)
{

    $portrait = isset($arg->portrait) ? $arg->portrait : 'portrait';
    $name = isset($arg->name) ? $arg->name : 'name';
    $position = isset($arg->position) ? $arg->position : 'position';
    $company = isset($arg->company) ? $arg->company : 'company';
    $date = isset($arg->date) ? $arg->date : 'date';
    $day = isset($arg->day) ? $arg->day : 'day';
    $time = isset($arg->time) ? $arg->time : 'time';
    $forum = isset($arg->forum) ? $arg->forum : 'forum';
    $topic = isset($arg->topic) ? $arg->topic : 'topic';
    $room = isset($arg->room) ? $arg->room : 'room';

    return "
    <div class='forum-card flex f-col gap-m f-center-h f-between f-wrap aos-init aos-animat' data-aos='fade-up'>

        <div class='flex f-col gap-m full-width'>
            <div class='forum-card-intro flex f-col gap-s f-center-h'>
                <img class='forum-card-portrait' src='/image/forums/{$portrait}.webp' alt='{$name} potrait'/>
                <h4><b>{$name}</b></h4>
                <p class='font-14'><small>{$position},<br></small><small>{$company}</small></p>
            </div>

            <div class='forum-card-time flex f-row f-between f-wrap gap-m'>
                <p>
                    <b>
                        <span class='h4'>{$date}</span>
                        <span class='h6'>{$day}</span>
                    </b>
                </p>

                <p>
                <b>
                    <span class='h4'>{$time}</span>
                </b>
            </p>
            </div>

            <div class='forum-card-detail'>
                <p class='font-16'>{$forum}</p>
                <h5><b>{$topic}</b></h5>
            </div>
        </div>


        <div class='flex f-row gap-s f-center full-width'>
            <img src='/image/icons/location.svg' alt='location icon'/>
            <p class='font-16'>{$room}</p>
        </div>

    </div>
    ";


}