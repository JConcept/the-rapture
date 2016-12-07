<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

        <title><?php echo $title; ?></title>

        <link href="<?php asset('css/bootstrap.min.css');?>" rel="stylesheet">
        <link href="<?php asset('css/bxslider.css');?>" rel="stylesheet">
        <link href="<?php asset('css/style.css');?>" rel="stylesheet">
        <link href="<?php asset('css/mobile.css');?>" rel="stylesheet" media="(max-width:1200px)">
    </head>
    <body>

        <a class="mobile_menu black" data-open="nav14" id="mobile_menu"></a>

        <nav class="nav14" id="nav">
            <a class="mobile_menu_close black"></a>
            <div class="container">
                <a href="#" class="nav5_logo">The <i>Rapture</i> Startup</a>

                <div class="right">
                    <a class="header14_icon notification">Notifications</a>
                    <a class="header14_icon messages">Messages</a>
                    <a class="header14_user"><img src="<?php asset('i/header14_user.jpg');?>" alt="" /><?php echo $user->firstname . ' ' . $user->lastname; ?></a>
                </div>

                <div class="mobile_socials black">
                    <a href="#" target="_blank" class="fb"></a>
                    <a href="#" target="_blank" class="gp"></a>
                    <a href="#" target="_blank" class="tw"></a>
                    <a href="#" target="_blank" class="pi"></a>
                    <a href="#" target="_blank" class="in"></a>
                </div>
            </div>
        </nav>

        <header class="header5 header14" id="header14">
            <div class="video">
                <video>
                    <source src="<?php asset('video/video1.mp4');?>" type="video/mp4">
                </video>
                <a href="#" class="header5_pause"></a>
            </div>

            <div class="container">
                <div class="header5_pretitle">Find the <i>Best</i> Deals and make</div>
                <h1>The <i>Ultimate</i> Travel</h1>
                <a href="#" class="header5_play" data-container-id="header14"><img src="<?php asset('i/header14_play.png');?>" alt="" /></a>
                <div class="header14_text">Book travels in 100+ countries and experience a place like you live there.</div>
                <form action="" method="POST" class="header14_form">
                    <input type="text" name="place" class="place" placeholder="Istanbul" />
                    <span class="mobile_row">
                        <span id="header14_dates">
                            <input type="text" name="date_start" class="date_start" value="29.07" onfocus="focusForm('header14_dates',true);" onblur="focusForm('header14_dates',false);" />
                            <input type="text" name="date_end" class="date_end" value="05.08" onfocus="focusForm('header14_dates',true);" onblur="focusForm('header14_dates',false);" />
                        </span>
                        <div class="select guests" id="header14_select">
                            <select name="guests" onfocus="focusForm('header14_select',true);" onblur="focusForm('header14_select',false);">
                                <option>1 Guest</option>
                                <option>2 Guests</option>
                                <option>3 Guests</option>
                                <option>4+ Guests</option>
                            </select>
                        </div>
                    </span>
                    <button class="sec3_5_btn">Search</button>
                </form>
                <div class="clr"></div>
            </div>
        </header>



        <section class="sec1_14">
            <div class="container">
                <h2>Explore <i>the</i> World</h2>
                <div class="sec1_14_text">See where people are traveling, all around the world.</div>

                <div class="sec1_14_row">
                    <a class="sec1_14_block big" style="background-image:url(<?php asset('i/sec1_14_img1.jpg');?>);">
                        <div class="header11_pretitle green">$599</div>
                        <div class="title">Brussels</div>
                        <div class="subtitle">Belgium</div>
                    </a>

                    <a class="sec1_14_block medium" style="background-image:url(<?php asset('i/sec1_14_img2.jpg');?>);">
                        <div class="header11_pretitle black">$49</div>
                        <img src="<?php asset('i/sec1_14_author1.jpg');?>" alt="" />
                        <div class="title">Hosted <i>by</i> Eva</div>
                        <div class="subtitle">New York</div>
                    </a>
                </div>

                <div class="sec1_14_row">
                    <a class="sec1_14_block small nobg">
                        <div class="pretitle">Best Choise</div>
                        <div class="title">Get Some <br />Fun <i>In</i> <br />Europe</div>
                        <div class="sec3_5_btn">View Deals</div>
                    </a>

                    <a class="sec1_14_block medium" style="background-image:url(<?php asset('i/sec1_14_img4.jpg');?>);">
                        <div class="header11_pretitle black">$129</div>
                        <img src="<?php asset('i/sec1_14_author2.jpg');?>" alt="" />
                        <div class="title">Hosted <i>by</i> Andrew</div>
                        <div class="subtitle">San Francisco</div>
                    </a>

                    <a class="sec1_14_block small" style="background-image:url(<?php asset('i/sec1_14_img5.jpg');?>);">
                        <div class="header11_pretitle green">$499</div>
                        <div class="title">Rome</div>
                        <div class="subtitle">Italy</div>
                    </a>
                </div>

                <div class="sec1_14_row">
                    <a class="sec1_14_block medium" style="background-image:url(<?php asset('i/sec1_14_img6.jpg');?>);">
                        <div class="header11_pretitle black">$39</div>
                        <img src="<?php asset('i/sec1_14_author3.jpg');?>" alt="" />
                        <div class="title">Hosted <i>by</i> Devin <i>&</i> Jessica</div>
                        <div class="subtitle">London</div>
                    </a>

                    <a class="sec1_14_block big" style="background-image:url(<?php asset('i/sec1_14_img7.jpg');?>);">
                        <div class="header11_pretitle green">$299</div>
                        <div class="title">Chicago</div>
                        <div class="subtitle"> USA</div>
                    </a>
                </div>

                <div class="clr"></div>

                <a class="sec3_5_btn red sec1_14_btn">View All Travels</a>

            </div>
        </section>

        <section class="sec2_14">
            <div class="container">
                <div class="left">
                    <h2>Hosting opens up a world of opportunity</h2>
                    <div class="sec2_14_text">Earn money sharing your extra space with travelers.</div>
                </div>
                <a href="#" class="sec4_5_btn">See How You Can Earn</a>
                <div class="clr"></div>
            </div>
        </section>

        <section class="sec3_14">
            <div class="container">
                <img src="<?php asset('i/bg_sec3_14.jpg');?>" alt="" class="bg_sec3_14" />
                <div class="inner">
                    <img src="<?php asset('i/sec3_14_img.png');?>" alt="" class="icon" />
                    <div class="pretitle">Book your first flight.</div>
                    <h2 class="left">We’ll monitor flight prices and send you the <i>best</i> options when the time <span>is right, straight to your phone.</span></h2>
                    <a href="#" class="sec3_5_btn black big"><img src="<?php asset('i/icon_apple.png');?>" alt="" />Download <i>from</i> app Store</a>
                    <div class="sec3_14_text">Join right now! It is absolutly free. </div>
                </div>
            </div>
        </section>

        <section class="header5 sec4_14" id="sec4_14">
            <div class="video">
                <video>
                    <source src="<?php asset('video/video1.mp4');?>" type="video/mp4">
                </video>
                <a href="#" class="header5_pause"></a>
            </div>

            <div class="container">
                <div class="header5_pretitle">The Rapture Startup</div>
                <h1>Your <i>Home</i>, Everywhere</h1>
                <div class="sec4_14_text">On Rapture, every vacation rental feels like home. Find everything from luxury villas to family friendly apartments.</div>
                <a href="#" class="header5_play" data-container-id="sec4_14"><img src="<?php asset('i/header14_play.png');?>" alt="" /></a>
                <div class="clr"></div>
                <a href="#" class="sec3_5_btn">Start Exploring</a>
            </div>
        </section>

        <section class="sec5_14">
            <div class="container">
                <img src="<?php asset('i/sec5_14_icon.png');?>" alt="" class="sec5_14_icon" />
                <h2>Today's Most <i>Popular</i> Places</h2>
                <div class="sec1_13_text">In your destination, Rapture transforms from your travel agent to your local concierge. We make vetted recommendations for your dining and activities.</div>
                <div class="flex">

                <!-- Commencer ma boucle -->
                <?php
                    foreach ($places as $place): // pour chaque éléments qui se trouve dans mon tableau places, je le stocke dans la variable place (ou ce qu'on veut)
                ?>

                    <div class="sec5_14_block">
                        <a><img src="<?php asset('i/sec5_14_img1.jpg'); //ici mettre : $place->pictures?>" alt="" /></a>
                        <a class="title"><i><?php echo $place->title; ?></i></a>
                        <div class="subtitle"><?php echo $place->city; ?></div>
                        <div class="text"><?php echo $place->description; ?></div>
                        <div class="bottom">
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <a class="sec3_4_link">Book</a>
                        </div>
                        <div class="clr"></div>
                    </div>

                <?php
                    endforeach;
                ?>
                <!-- Terminer ma boucle -->

                </div>
                <a href="#" class="sec4_5_btn blue">View All Places</a>
            </div>
        </section>

        <section class="sec6_14">
            <div class="container">
                <div class="block">
                    <h2 class="white">Where can we take <i>you</i> today?</h2>
                    <form action="" method="post" class="header3_input_holder" id="sec6_14_form">
                        <input type="text" name="place" placeholder="Saint-Petersburg, Russia" onfocus="focusForm('sec6_14_form',true);" onblur="focusForm('sec6_14_form',false);"/>
                        <button>Try Rapture</button>
                    </form>
                    <div class="sec1_13_text">Your first month is free. For a limited time, The <i>Rapture</i> Startup memberships start at $19/month or $199/year after your trial.</div>
                </div>
            </div>
        </section>

        <section class="sec7_14">
            <div class="container">
                <h2>We Love <i>Our</i> People</h2>
                <div class="flex">
                    <a class="sec3_4_text">
                        <img src="<?php asset('i/sec7_14_img1.jpg');?>" alt="" />
                        <div class="title"><i>Our Team</i></div>
                        <div class="sec3_4_link">Learn More About Work With Us</div>
                    </a>
                    <a class="sec3_4_text">
                        <img src="<?php asset('i/sec7_14_img2.jpg');?>" alt="" />
                        <div class="title"><i>Our Community</i></div>
                        <div class="sec3_4_link">Join Right Now</div>
                    </a>
                    <a class="sec3_4_text">
                        <img src="<?php asset('i/sec7_14_img3.jpg');?>" alt="" />
                        <div class="title"><i>Clients Testimonials</i></div>
                        <div class="sec3_4_link">Read Mike’s Story</div>
                    </a>

                </div>
            </div>
        </section>

        <footer class="footer14">
            <div class="container">
                <div class="col col270">
                    <div class="select">
                        <select>
                            <option>English</option>
                            <option>Russian</option>
                        </select>
                    </div>
                    <div class="select">
                        <select>
                            <option>USD</option>
                            <option>EUR</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="title">Company</div>
                    <a>About</a>
                    <a>Careers</a>
                    <a>Press</a>
                    <a>Blog</a>
                </div>
                <div class="col">
                    <div class="title"></div>
                    <a>Help</a>
                    <a>Policies</a>
                    <a>Disaster Response</a>
                    <a>Terms & Privacy</a>
                </div>
                <div class="col">
                    <div class="title">Discover</div>
                    <a>Trust & Safety</a>
                    <a>Travel Credit</a>
                    <a>Gift Cards</a>
                    <a>Rapture Picks</a>
                </div>
                <div class="col last">
                    <div class="title"></div>
                    <a>Mobile</a>
                    <a>Rapture Action</a>
                    <a>Business Travel</a>
                    <a>Site Map</a>
                </div>
                <div class="clr"></div>

            </div>
            <div class="footer14_bottom">
                <div class="container">
                    <div class="text">Join Us On</div>
                    <a href="#" target="_blank" class="fb"></a>
                    <a href="#" target="_blank" class="gp"></a>
                    <a href="#" target="_blank" class="tw"></a>
                    <a href="#" target="_blank" class="pi"></a>
                    <a href="#" target="_blank" class="in"></a>
                    <a href="#" target="_blank" class="tb"></a>
                </div>
            </div>
        </footer>

        <script src="<?php asset('js/jquery.min.js');?>"></script>
        <script src="<?php asset('js/bootstrap.min.js');?>"></script>
        <script src="<?php asset('js/bxslider.js');?>"></script>
        <script src="<?php asset('js/script.js');?>"></script>
    </body>
</html>
