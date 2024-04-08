<?php

//Utilities imports
include_once ("./ressources/lib/utils.php");

//Component imports
include_once ("./ressources/components/Button.php");
include_once ("./ressources/components/Solution.php");
include_once ("./ressources/components/Forum.php");
include_once ("./ressources/components/Swiper.php");

//Map JSON content to PHP components imported above
$INTRO_CATEGORIES_BUTTONS = read('./ressources/content/en/introduction.json');
$SOLUTIONS = read('./ressources/content/en/solutions.json');
$FORUMS = read('./ressources/content/en/forums.json');
$VIDEOS = read('./ressources/content/en/videos.json');
$NEWS = read('./ressources/content/en/news.json');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Touch Taiwan 2024</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=0" />
    <meta name="description" content="DRIVING THE FUTURE OF SMART MOBILITY">
    <meta property="og:title" content="Touch Taiwan 2024" />
    <meta property="og:description" content="DRIVING THE FUTURE OF SMART MOBILITY" />
    <meta property="og:image" content="https://www.auo.com./image/auo-CES-ogimage.jpg" />
    <link href="./css/aos.css" rel="stylesheet" type="text/css" />
    <link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="./css/swiper-8.0.6.min.css" rel="stylesheet" type="text/css" />
    <link href="./css/index.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="./favicon.ico">
</head>

<body>
    <!-- header選單 -->
    <header id="header-block" class="header-block">
        <div class="inner-header">

            <div class="logo-block">
                <div class="flex f-row gap-xl f-center">
                    <a class="navbar-brand brand" href="">
                        <img src="./image/logos/auo-logo.svg" alt="AUO" title="AUO">
                    </a>
                    <a class="brand-ces navbar-brand hidden-m" href="https://www.ces.tech/" rel="noreferrer noopener"
                        target="_blank">
                        <img src="./image/logos/touchtaiwan-logo.webp" alt="touch taiwan logo" title="touch taiwan logo"
                            width="150">
                    </a>
                </div>
                <nav class="flex f-row gap-l f-center">
                    <a href="#Introduction-block"><b>Introduction</b></a>
                    <a href="#forums"><b>Forums</b></a>
                    <a href="#Press-Release-block"><b>Press</b></a>
                    <a href="#Videos-block"><b>Videos</b></a>
                    <a href="#on-site-events"><b>Events</b></a>
                </nav>
                <?php echo Button((object) ['title' => 'Take the survey', 'color' => 'ice', 'href' => '']) ?>
            </div>
            <div class="link-block hidden-tb flex f-row f-center gap-xl">
                <div class="flex f-row gap-xs">
                    <a href="https://www.facebook.com/AUOCorporation/" target="_blank">
                        <img class="icon" src="./image/icons/facebook.svg" alt="AUO" title="AUO">
                    </a>
                    <a href="https://www.linkedin.com/company/auo" target="_blank">
                        <img class="icon" src="./image/icons/linkedin.svg" alt="Linkedin" title="Linkedin">
                    </a>
                </div>
                <div class="flex f-row gap-xs">
                    <a href="" target="_blank" class="button-icon" data-active="false">
                        中
                    </a>
                    <a href="" target="_blank" class="button-icon" data-active="true">
                        英
                    </a>
                </div>
            </div>


            <div class="burger-menu-button hidden-pc flex f-center f-col gap-s" data-open="false">
                <span class="burger-menu-button-open"></span>
                <span class="burger-menu-button-open"></span>
                <span class="burger-menu-button-open"></span>

                <span class="burger-menu-button-close"></span>
                <span class="burger-menu-button-close"></span>
            </div>

            <div class="burger-menu-panel hidden-pc flex f-col gap-2xl full-height f-between">

                <div class="flex f-row gap-m">
                    <a href="" target="_blank" class="button-icon" data-active="false">
                        中
                    </a>
                    <a href="" target="_blank" class="button-icon" data-active="true">
                        英
                    </a>
                </div>

                <div class="flex f-col gap-2xl">
                    <a class="h1" href="#Introduction-block"><b>Introduction</b></a>
                    <a class="h1" href="#forums"><b>Forums</b></a>
                    <a class="h1" href="#Press-Release-block"><b>Press</b></a>
                    <a class="h1" href="#Videos-block"><b>Videos</b></a>
                    <a class="h1" href="#on-site-events"><b>Events</b></a>
                </div>

                <div class="flex f-row gap-m">
                    <a href="https://www.facebook.com/AUOCorporation/" target="_blank">
                        <img class="icon" src="./image/icons/facebook.svg" alt="AUO" title="AUO">
                    </a>
                    <a href="https://www.linkedin.com/company/auo" target="_blank">
                        <img class="icon" src="./image/icons/linkedin.svg" alt="Linkedin" title="Linkedin">
                    </a>
                </div>
            </div>
        </div>
    </header>



    <!-- 影片 -->
    <div class="video-block img-fit" id="kv-video">
        <video class="video hidden-tb" poster="./image/auo-eventpage-kv.jpg" autoplay="autoplay" loop muted playsinline
            tabindex="0" preload="metadata">
            <source src="./video/auo-kv.mp4" type="video/mp4">
        </video>
        <video class="video hidden-pc" poster="./image/auo-eventpage-kv-m.jpg" autoplay="autoplay" loop muted
            playsinline tabindex="0" preload="metadata">
            <source src="./video/auo-kv-mb.mp4" type="video/mp4">
        </video>
    </div>
    <div class="Introduction-block" id="Introduction-block">
        <div class="anchor-bullet-wrapper is-hidden-tb" id="anchorBullet">
            <ul class="no-ul anchor-bullet-sticky">
                <li class="is-active"><a href="#Introduction-block" class="stretched-link auo-blue bold">AUO at CES
                        2024</a></li>
                <li class=""><a href="#SMART-COCKPIT-block" class="stretched-link auo-blue bold">Smart Cockpit</a>
                </li>
                <li class=""><a href="#MOBILITY-SERVICE-block" class="stretched-link auo-blue bold">Mobility
                        Service</a>
                </li>
                <li class=""><a href="#Going-Green-Solutions-block" class="stretched-link auo-blue bold">Going Green
                        Solutions</a></li>
                <li class=""><a href="#Press-Release-block" class="stretched-link auo-blue bold">Press Release</a>
                </li>
                <li class=""><a href="#Videos-block" class="stretched-link auo-blue bold">Videos</a></li>
            </ul>
        </div>
        <div class="anchor-btn hidden-pc" id="anchorBtn"></div>
        <div class="cone"></div>
        <div class="content" data-aos="fade-up">
            <div class="outline-border"></div>
            <div class="content-text flex f-col gap-m">
                <h1><b>Touch Taiwan 2024</b></h1>
                <p>With the theme of “Driving the Visionary Future” at Touch Taiwan 2023, AUO collaborates with
                    ecosystem partners and utilizes its group resources to showcase a range of cutting-edge
                    technologies
                    and applications, including the smart cockpit, Micro LED and AUO ALED display technologies, and
                    smart solutions for the entertainment, enterprise, and medical. In addition, AUO will exhibit
                    its
                    successful cases toward a circular economy in the Green Technology and New Energy exhibition
                    area.
                </p>
            </div>
            <div class="introduction-categories flex f-row gap-s f-wrap f-center gap-l">
                <?php echo map($INTRO_CATEGORIES_BUTTONS, 'Button'); ?>
            </div>
        </div>
    </div>
    <section id="video-gallery-wrapper">
        <div class="video-block flex f-col f-center gap-xl" id="SMART-COCKPIT-block">
            <video class="video" poster="./image/auo-smart-cockpit.jpg" autoplay="autoplay" loop muted playsinline
                tabindex="0" preload="metadata">
                <source src="./video/auo-smart-cockpit.mp4" type="video/mp4">
            </video>

            <?php echo Button((object) ['title' => 'See more videos', 'color' => 'ice', 'href' => '#Videos-block']) ?>
        </div>

        <div class="product-block">

            <img class="artifact float" src="./image/artifacts/gallery/u.webp" data-type="u" />
            <img class="artifact float" src="./image/artifacts/gallery/sphere.webp" data-type="sphere" />

            <div class="product-img-board hidden-tb" data-aos="fade-up">
                <div class="product-img-pc" id="product-img-1-pc" data-id="product-content-1-pc">
                    <div class="product-btn"></div>
                </div>

                <div class="product-content-pc product-content-1-pc" id="product-content-1-pc">
                    <div class="product-btn"></div>
                </div>

                <div class="product-img-pc" id="product-img-2-pc" data-id="product-content-2-pc">
                    <div class="product-btn"></div>
                </div>

                <div class="product-content-pc product-content-2-pc" id="product-content-2-pc">
                    <div class="product-btn"></div>
                </div>

                <div class="product-img-pc" id="product-img-3-pc" data-id="product-content-3-pc">
                    <div class="product-btn"></div>
                </div>

                <div class="product-content-pc product-content-3-pc" id="product-content-3-pc">
                    <div class="product-btn"></div>
                </div>

                <div class="product-img-pc" id="product-img-4-pc" data-id="product-content-4-pc">
                    <div class="product-btn"></div>
                </div>

                <div class="product-content-pc product-content-4-pc" id="product-content-4-pc">
                    <div class="product-btn"></div>
                </div>

                <div class="product-img-pc" id="product-img-5-pc" data-id="product-content-5-pc">
                    <div class="product-btn"></div>
                </div>

                <div class="product-content-pc product-content-5-pc" id="product-content-5-pc">
                    <div class="product-btn"></div>
                </div>

                <div class="product-img-pc" id="product-img-6-pc" data-id="product-content-6-pc">
                    <div class="product-btn"></div>
                </div>

                <div class="product-content-pc product-content-6-pc" id="product-content-6-pc">
                    <div class="product-btn"></div>
                </div>

                <div class="product-img-pc" id="product-img-7-pc" data-id="product-content-7-pc">
                    <div class="product-btn"></div>
                </div>

                <div class="product-content-pc product-content-7-pc" id="product-content-7-pc">
                    <div class="product-btn"></div>
                </div>

                <div class="product-img-pc" id="product-img-8-pc" data-id="product-content-8-pc">
                    <div class="product-btn"></div>
                </div>

                <div class="product-content-pc product-content-8-pc" id="product-content-8-pc">
                    <div class="product-btn"></div>
                </div>
            </div>
    </section>

    <ul class="product-card-list hidden-pc" data-aos="fade-up">
        <li class="card-list click-item">
            <div class="product-img-mb card-item">
                <img src="./image/auo-product-1-mb.jpg">
            </div>
        </li>
        <li class="card-list click-item">
            <div class="product-img-mb card-item">
                <img src="./image/auo-product-2-mb.jpg">
            </div>
        </li>
        <li class="card-list click-item">
            <div class="product-img-mb card-item">
                <img src="./image/auo-product-3-mb.jpg">
            </div>
        </li>
        <li class="card-list click-item">
            <div class="product-img-mb card-item">
                <img src="./image/auo-product-4-mb.jpg">
            </div>
        </li>
        <li class="card-list click-item">
            <div class="product-img-mb card-item">
                <img src="./image/auo-product-5-mb.jpg">
            </div>
        </li>
        <li class="card-list click-item">
            <div class="product-img-mb card-item">
                <img src="./image/auo-product-6-mb.jpg">
            </div>
        </li>
        <li class="card-list click-item">
            <div class="product-img-mb card-item">
                <img src="./image/auo-product-7-mb.jpg">
            </div>
        </li>
        <li class="card-list click-item">
            <div class="product-img-mb card-item">
                <img src="./image/auo-product-8-mb.jpg">
            </div>

        </li>
    </ul>
    </div>


    <div class="MOBILITY-SERVICE-block flex f-col" id="MOBILITY-SERVICE-block">
        <?php echo map($SOLUTIONS, 'Solution'); ?>


        <div class="Going-Green-Solutions-block" id="Going-Green-Solutions-block">
            <div class="Going-Green-Solutions-container">
                <img class="artifact float" src="./image/artifacts/solutions/u.webp" data-type="u" />
                <div class="introduce-block">
                    <div class="left-block flex f-col gap-m">
                        <div class="green-title">Going Green Solutions</div>

                        <div>
                            <h2>Envisioning a Sustainable Future with AUO</h2>
                            <p>
                                In a world where sustainability is paramount, AUO stands at the forefront, leading the
                                way
                                in display technology and environmental responsibility. We strive to create a
                                sustainable
                                and better future for all and help our clients and partners accelerate toward their
                                sustainability goals. AUO takes a comprehensive approach, incorporating sustainability
                                at
                                every product lifecycle stage. Together, we can make a difference and amplify the impact
                                to
                                achieve our shared ambitions.
                            </p>
                        </div>

                        <h3><b>AUO Corporation</b></h3>
                        <p>With strong R&D capabilities, AUO provides high-quality display panels using recycled
                            materials
                            and low energy consumption. Additionally, AUO offers flexible PV modules and sustainable
                            manufacturing practices.</p>

                        <h3><b>AUO Corporation</b></h3>
                        <p>With strong R&D capabilities, AUO provides high-quality display panels using recycled
                            materials
                            and low energy consumption. Additionally, AUO offers flexible PV modules and sustainable
                            manufacturing practices.</p>

                        <h3><b>AUO Corporation</b></h3>
                        <p>With strong R&D capabilities, AUO provides high-quality display panels using recycled
                            materials
                            and low energy consumption. Additionally, AUO offers flexible PV modules and sustainable
                            manufacturing practices.</p>

                        <a class="btn-grow" target="_blank" href="https://youtu.be/B01jVZjTHhI" data-color="ice">
                            <span class="btn-title video-btn">
                                Watch the teaser
                            </span>
                        </a>
                    </div>
                    <div class="right-block">
                        <img src="/image/esg-visual.webp" alt="esg visual" />
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="forum-block bkg-bright-grad flex f-col gap-3xl" id="forums">
        <img class="artifact float" src="./image/artifacts/forums/u.webp" data-type="u" />
        <h2 class="h1"><b>Forums</b></h2>
        <div class="forum-speaker-row flex f-row f-wrap f-center-w">
            <?php echo map($FORUMS, 'Forum'); ?>
        </div>
    </section>



    <div class="Press-Release-block" id="Press-Release-block">
        <img class="artifact hidden-tb " src="./image/artifacts/news/square.webp" data-type="square" />
        <?php echo Swiper($NEWS) ?>
    </div>

    <section class="bkg-bright-grad flex f-col">
        <div class="Videos-block" id="Videos-block">
            <img class="artifact float" src="./image/artifacts/videos/circle.webp" data-type="circle" />
            <?php echo Swiper($VIDEOS) ?>
        </div>

        <div class="on-site-events container flex f-col f-center gap-3xl aos-init aos-animat" id="on-site-events"
            data-aos="fade-up">
            <h2 class="h1 text-center"><b>On site events</b></h2>
            <img class="artifact" src="./image/artifacts/onsite/square-1.webp" data-type="square-1" />
            <img class="artifact" src="./image/artifacts/onsite/square-2.webp" data-type="square-2" />
            <div class="on-site-events-card flex f-col gap-xl f-center">
                <div class="flex f-col gap-xl f-center">
                    <h3 class="h2"><b>Booth Tour</b></h3>
                    <div class="flex f-row gap-m">
                        <h4 class="h2"><b class="flex f-col f-center gap-m">4.22<span class="h5">Wednesday</span></b>
                        </h4>
                        <h4 class="h2">-</h4>
                        <h4 class="h2"><b class="flex f-col f-center gap-m">4.28<span class="h5">Friday</span></b></h4>
                    </div>

                </div>

                <div class="flex f-col gap-m full-width">
                    <div class="flex f-row f-between full-width gap-m f-wrap">
                        <p class='h5'><b>Morning</b></p>
                        <p class='h4'><b>11:00 – 12:00</b></p>
                    </div>
                    <hr>
                    <div class="flex f-row f-between full-width gap-m f-wrap">
                        <p class='h5'><b>Afternoon</b></p>
                        <p class='h4'><b>14:00 – 15:00</b></p>
                    </div>
                </div>

                <p><small>AUO reserves the right to change the contents of the event.</small></p>
            </div>
        </div>
    </section>

    <section class="feed-block">

        <div class="container flex f-row gap-xl f-wrap f-center aos-init aos-animat" data-aos="fade-up">
            <header class="flex f-col gap-m">
                <h2 class="display"><b>Follow our latest news</b></h2>
                <h4><b>Join our online community and don’t miss out our exclusive news and offers.</b></h4>
            </header>

            <div class="feed-block-iframe flex f-center">

                <img class="artifact float" src="./image/artifacts/social/u.webp" data-type="u" />
                <img class="artifact float" src="./image/artifacts/social/sphere.webp" data-type="sphere" />

                <span class="swindle"></span>
                <span class="swindle"></span>
                <span class="swindle"></span>

                <iframe name="f43df8dcc90978955" width="400px" height="600px"
                    data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0"
                    allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media"
                    src="https://www.facebook.com/v16.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df748862e02b424401%26domain%3Dwww.auo2023touchtw.com.tw%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fwww.auo2023touchtw.com.tw%252Ff98c5b05d6df36f45%26relation%3Dparent.parent&amp;container_width=1170&amp;height=600&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FAUOCorporation&amp;locale=zh_TW&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=400"
                    style="border: none; visibility: visible; width: 400px; height: 600px;" class=""></iframe>
            </div>

        </div>

    </section>


    <section class="map-block">

        <div class="container flex f-row gap-xl f-wrap f-center">

            <img class="artifact float" src="./image/artifacts/map/circle.webp" data-type="circle" />
            <img class="artifact" src="./image/artifacts/map/square.webp" data-type="square" />

            <div class="map-block-left flex f-center">

                <span class="swindle"></span>
                <span class="swindle"></span>

                <div class="map-block-text flex f-col gap-l f-center">
                    <h2><b>2024.4.24 - 4.26</b></h2>

                    <div>
                        <h3 class="h4">Venue Taipei Nangang Exhibition Center, Hall1,4F <br> M1119</h3>
                        <p class="font-14"><small>(No1, Jingmao 2nd Rd., Nangang District, Taipei City, Taiwan)</small>
                        </p>
                    </div>

                    <div>
                        <h4>AUO booth: M1119</h4>
                        <h5>ESG booth: 102649</h5>
                    </div>

                    <?php echo Button((object) ['title' => 'Register Now', 'color' => 'ice', 'href' => '']) ?>


                    <p class="font-14"><small>Visitors under 18 years old are not admitted. <br>
                            The ‘Admission QR Code’ is only valid for the registered user.</small></p>
                </div>
            </div>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.3612228131665!2d121.61468536543053!3d25.055743193572553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442ab57f02092dd%3A0x87862fa2121f7e46!2z5Y-w5YyX5Y2X5riv5bGV6Ka96aSoMemkqA!5e0!3m2!1szh-TW!2stw!4v1681050699724!5m2!1szh-TW!2stw"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

    </section>

    <footer>
        <div class="footer-block flex-block">
            <div class="logo-block">
                <a class="brand" href="">
                    <img src="./image/logos/auo-logo.svg" alt="AUO" title="AUO">
                </a>
                <div class="copy-right font-14">
                    © 2024 AUO Corporation, All Rights Reserved.
                </div>
            </div>
            <div class="flex f-row gap-l">
                <a href="https://www.facebook.com/AUOCorporation/" target="_blank">
                    <img class="icon" src="./image/icons/facebook.svg" alt="AUO" title="AUO">
                </a>
                <a href="https://www.linkedin.com/company/auo" target="_blank">
                    <img class="icon" src="./image/icons/linkedin.svg" alt="Linkedin" title="Linkedin">
                </a>
            </div>
        </div>
    </footer>

    <script src="./js/index.js" type="module"></script>
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/aos.js"></script>
    <script src="./js/ak_aos_init.js"></script>
    <script src="./js/swiper-8.0.6.min.js"></script>
    <script src="./js/ak_swiper_init.js"></script>
    <script src="./js/ak_init.js"></script>

    <script async id="__bs_script__" src="http://localhost:3000/browser-sync/browser-sync-client.js?v=3.0.2"></script>
</body>

</html>