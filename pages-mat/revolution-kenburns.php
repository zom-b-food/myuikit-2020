<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="materialize is a material design based mutipurpose responsive template">
        <meta name="keywords" content="material design, card style, material template, portfolio, corporate, business, creative, agency">
        <meta name="author" content="Adam L Marsh - www.myuikit.com, www.adam-marsh.com, www.ui-design-engineering.com">

        <!--  favicon -->
        <link rel="shortcut icon" href="../pages-mat/assets-mat/images/ico/favicon.png">
        <!--  apple-touch-icon -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../pages-mat/assets-mat/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../pages-mat/assets-mat/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../pages-mat/assets-mat/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../pages-mat/assets-mat/images/ico/apple-touch-icon-57-precomposed.png">
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'>
        <link href="../pages-mat/assets-mat/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../pages-mat/assets-mat/fonts/iconfont/material-icons.css" rel="stylesheet">
        <link href="../pages-mat/assets-mat/materialize/css/materialize.min.css" rel="stylesheet">
        <link href="../pages-mat/assets-mat/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../pages-mat/assets-mat/owl.carousel/assets-mat/owl.carousel.css" rel="stylesheet">
        <link href="../pages-mat/assets-mat/owl.carousel/assets-mat/owl.theme.default.min.css" rel="stylesheet">
        <link href="../pages-mat/assets-mat/flexSlider/flexslider.css" rel="stylesheet">

        <!-- Style CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../pages-mat/assets-mat/compiled/_myuikit.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="../pages-mat/assets-mat/css/custom.css" type="text/css" rel="stylesheet" media="screen,projection" />


        <!-- Global JS -->
        <script src="../pages-mat/assets-mat/js/jquery-3.4.1.min.js"></script>
        <script src="../pages-mat/assets-mat/compiled/_myuikit.min.js"></script>

        <script src="../pages-mat/assets-mat/bootstrap/js/bootstrap.min.js"></script>
        <script src="../pages-mat/assets-mat/materialize.min.js"></script>
        <script src="../pages-mat/assets-mat/js/scripts.js"></script>




        <title>Kenburns Slider</title>
        <!-- RS5.0 Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="../pages-mat/assets-mat/revolution/css/settings.css">
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="../pages-mat/assets-mat/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="../pages-mat/assets-mat/revolution/css/navigation.css">
    </head>
    <body class="sidebar-collapse">

        <div class="se-pre-con"></div>
        <script>
            //paste this code under head tag or in a seperate js file.
            // Wait for window load
            $(window).load(function () {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");
                ;
            });

            $(window).scroll(function (e) {
                if ($(this).scrollTop() > 90) { // choose the value you want.
                    $('#dropdownnav:hidden').slideDown();
                } else {
                    $('#dropdownnav:visible').slideUp();
                }
            });
        </script>
        <header>
            <!-- Top bar start-->
            <div class="top-bar visible-md visible-lg">
                <div class="container">
                    <div class="row">
                        <!-- Social Icon -->
                        <div class="col-md-6">
                            <!-- Social Icon -->
                            <ul class="list-inline social-top tt-animate btt">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-right">
                            <ul class="topbar-cta no-margin">
                                <li class="mr-20">
                                    <a><i class="material-icons mr-10">&#xE0B9;</i>info@materialize.com</a>
                                </li>
                                <li>
                                    <a><i class="material-icons mr-10">&#xE0CD;</i> +01 123 456 78</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- Top bar end-->
            <nav role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" class="navbar-brand" href="../index.php" rel="tooltip"
                       title="Created by Adam @ www.ui-design-engineering.com" data-placement="bottom">
                        <i class="fa fa-briefcase"></i>&nbsp;
                        myuitkit.com
                        <small>(sassified)</small>
                    </a>
                    <ul class="navbar-nav right hide-on-med-and-down" id="anchor-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="#top">Top</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#middle">Middle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#bottom">Bottom</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.linkedin.com/in/sassmaster/" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/kungfurufus" target="_blank">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:am@ui-design-engineering.com">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li>
                    </ul>
                    <ul id="side-nav" class="navbar-nav side-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#top">Top</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#middle">Middle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#bottom">Bottom</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.linkedin.com/in/sassmaster/" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/kungfurufus" target="_blank">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:am@ui-design-engineering.com">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li>
                    </ul>
                    <a href="#" data-activates="side-nav" class="button-collapse"><i class="material-icons">menu</i></a>
                </div>
            </nav>
            <div id="dropdownnav">
                <nav role="navigation">
                    <div class="nav-wrapper container">
                        <a id="logo-container" class="navbar-brand" href="../index.php" rel="tooltip"
                           title="Created by Adam @ www.ui-design-engineering.com" data-placement="bottom">
                            <i class="fa fa-briefcase"></i>&nbsp;
                            myuitkit.com
                            <small>(sassified)</small>
                        </a>
                        <ul class="navbar-nav right hide-on-med-and-down" id="anchor-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="#top">Top</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#middle">Middle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#bottom">Bottom</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.linkedin.com/in/sassmaster/" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/kungfurufus" target="_blank">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="mailto:am@ui-design-engineering.com">
                                    <i class="fa fa-envelope"></i>
                                </a>
                            </li>
                        </ul>
                        <ul id="side-nav" class="navbar-nav side-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#top">Top</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#middle">Middle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#bottom">Bottom</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.linkedin.com/in/sassmaster/" target="_blank">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/kungfurufus" target="_blank">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="mailto:am@ui-design-engineering.com">
                                    <i class="fa fa-envelope"></i>
                                </a>
                            </li>
                        </ul>
                        <a href="#" data-activates="side-nav" class="button-collapse"><i class="material-icons">menu</i></a>
                    </div>
                </nav>
            </div>
            <section class="padding-bottom-100">
                <div class="container">
                    <div class="row">
                        <div class="banner txt-white">
                            <h1>SASS-ified Materialize Kit</h1>

                            <p class="centered">
                                <a href="../pages-mat/materialize-sass-kit.zip" class="waves-effect waves-light btn purple">Download
                                    This Kit</a>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="rutger">
                                    <div class="row tight smoke">
                                        <div>
                                            <h4 class="white-text">Stock Materialize Templates</h4>
                                            <ul>
                                                <li>
                                                    <a href="../pages-mat/tabs.php">tabs</a>
                                                </li>
                                                <li>
                                                    <a href="../pages-mat/blog.php">blog</a>
                                                </li>
                                                <li>
                                                    <a href="../pages-mat/feature-box.php">feature-box</a>
                                                </li>
                                                <li>
                                                    <a href="../pages-mat/forms.php">forms</a>
                                                </li>
                                                <li>
                                                    <a href="../pages-mat/gallery.php">gallery</a>
                                                </li>
                                                <li>
                                                    <a href="../pages-mat/grid.php">grid</a>
                                                </li>
                                                <li>
                                                    <a href="../pages-mat/promo-box.php">promo-box</a>
                                                </li>
                                                <li>
                                                    <a href="../pages-mat/tables.php">tables</a>
                                                </li>
                                                <li>
                                                    <a href="../pages-mat/revolution-kenburns.php">slider 1</a>
                                                </li>
                                                <li>
                                                    <a href="../pages-mat/more-sliders.php">more sliders</a>
                                                </li>
                                                <li>
                                                    <a href="../pages-mat/template.php">template</a>
                                                </li>
                                                <li>
                                                    <a href="../pages-mat/team.php">team</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-box-tab rufus">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs nav-justified" role="tablist">
                                        <li role="presentation"><a href="#tab-18" class="waves-effect waves-dark"
                                                                   role="tab" data-toggle="tab"> <i
                                                    class="fa fa-bell-o"></i> About</a></li>
                                        <li role="presentation" class="active"><a href="#tab-19" class="waves-effect waves-dark" role="tab"
                                                                                  data-toggle="tab"> <i class="fa fa-anchor"></i> Templates</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in" id="tab-18">
                                                <div class="row tight smoke">
                                                    <div class="col-sm-6">
                                                        <p>This SASS-ified Materialize Kit download is a php website that
                                                            uses server-side includes for common components like header,
                                                            navigation, and footer. You can reskin the app by merely changing
                                                            the scss variables. The kit uses Grunt to compile and concatenate js
                                                            and css files. Feel free to examine the grunt file and make changes
                                                            as you see fit.</p>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p>Materialize is heavy. I doubt you'll need customized plugins at all.
                                                            Out-of-the-box components include:</p>
                                                        <ul>
                                                            <li>Revolution Slider</li>
                                                            <li>Owl Carousel</li>
                                                            <li>Magnific Popup</li>
                                                            <li>and yes, Bootstrap</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade in active" id="tab-19">
                                                <div class="row tight smoke">
                                                    <div class="col-sm-4">
                                                        <h4 class="white-text">Stock Materialize Templates</h4>
                                                        <ul>
                                                            <li>
                                                                <a href="../pages-mat/tabs.php">tabs</a>
                                                            </li>
                                                            <li>
                                                                <a href="../pages-mat/blog.php">blog</a>
                                                            </li>
                                                            <li>
                                                                <a href="../pages-mat/feature-box.php">feature-box</a>
                                                            </li>
                                                            <li>
                                                                <a href="../pages-mat/forms.php">forms</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <h4 class="white-text">...More</h4>
                                                        <ul>
                                                            <li>
                                                                <a href="../pages-mat/gallery.php">gallery</a>
                                                            </li>
                                                            <li>
                                                                <a href="../pages-mat/grid.php">grid</a>
                                                            </li>
                                                            <li>
                                                                <a href="../pages-mat/promo-box.php">promo-box</a>
                                                            </li>
                                                            <li>
                                                                <a href="../pages-mat/tables.php">tables</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <h4 class="white-text">...More</h4>
                                                        <ul>
                                                            <li>
                                                                <a href="../pages-mat/revolution-kenburns.php">slider 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="../pages-mat/more-sliders.php">more sliders</a>
                                                            </li>
                                                            <li>
                                                                <a href="../pages-mat/template.php">template</a>
                                                            </li>
                                                            <li>
                                                                <a href="../pages-mat/team.php">team</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.border-bottom-tab -->
                            </div>
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
        </header>


        <!--page title start-->
        <section class="page-title ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Ken Burns</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Shortcodes</a></li>
                            <li class="active">Ken Burns</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!--page title end-->
        <!-- start revolution slider 5.0 -->
        <section class="rev_slider_wrapper">
            <div class="rev_slider materialize-slider">
                <ul>
                    <!-- slide 1 start -->
                    <li data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut" data-masterspeed="2000"
                        data-thumb="/assets-mat/images/banner/banner-18.jpg" data-rotate="0" data-saveperformance="off"
                        data-title="Deep Forest" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="/assets-mat/images/banner/banner-18.jpg" alt="" data-bgposition="center center"
                             data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100"
                             data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500"
                             data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div class="tp-overlay"></div>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-fontsize="['70','70','70','45']"
                             data-lineheight="['70','70','70','50']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="1000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 5; white-space: nowrap;padding:10px 20px 10px 20px;">LIKE IT?
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption rev-subheading white-text tp-resizeme rs-parallaxlevel-0"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['62','62','62','61']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1500"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 6; white-space: nowrap;">PURCHASE MATERIALIZE TODAY
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption NotGeneric-Icon  tp-resizeme rs-parallaxlevel-0"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-style_hover="cursor:default;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="2000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 7; white-space: nowrap;padding:10px 10px 10px 10px;"><i
                                class="fa fa-thumbs-o-up"></i>
                        </div>
                    </li>
                    <!-- slide 1 end -->
                    <!-- slide 2 start -->
                    <li data-transition="zoomin" data-slotamount="7" data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut" data-masterspeed="2000"
                        data-thumb="/assets-mat/images/banner/banner-19.jpg" data-rotate="0" data-saveperformance="off"
                        data-title="Blue Sea" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="/assets-mat/images/banner/banner-19.jpg" alt="" data-bgposition="center center"
                             data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100"
                             data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 -500"
                             data-offsetend="0 500" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <div class="tp-overlay"></div>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-fontsize="['70','70','70','45']"
                             data-lineheight="['70','70','70','50']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="1000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 5; white-space: nowrap;padding:10px 20px 10px 20px;">LOVE IT?
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption rev-subheading white-text tp-resizeme rs-parallaxlevel-0"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['62','62','62','61']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1500"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 6; white-space: nowrap;">PURCHASE MATERIALIZE TODAY
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption NotGeneric-Icon  tp-resizeme rs-parallaxlevel-0"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-style_hover="cursor:default;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="2000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"
                             style="z-index: 7; white-space: nowrap;padding:10px 10px 10px 10px;"><i
                                class="fa fa-heart-o"></i>
                        </div>
                    </li>
                    <!-- slide 2 end -->
                </ul>
            </div>
            <!-- end revolution slider -->
        </section>
        <!-- end of slider wrapper -->
        <div class="links-sites">
            <a href="http://www.adam-marsh.com">Adam L Marsh www.adam-marsh.com</a>
            <a href="http://www.adam-marsh.com">Adam L Marsh http://www.adam-marsh.com</a>
            <a href="http://www.ui-design-engineering.com">Adam L Marsh www.ui-design-engineering.com</a>
            <a href="http://www.ui-design-engineering.com">Adam L Marsh http://www.ui-design-engineering.com</a>
            <a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles
                www.irisandpith.com</a>
            <a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles
                http://www.irisandpith.com</a>
            <a href="http://www.myuikit.com">Adam L Marsh www.myuikit.com</a>
            <a href="http://www.myuikit.com">Adam L Marsh http://www.myuikit.com</a>
            <a href="http://www.irisandpith.com">Webster Latimer - Author, Walking Through Brambles</a>
        </div>
        <? include "/sitewide-mat/footer.php"; ?>
        <? include "../pages-mat/sitewide-mat/globals-bottom.php"; ?>

        <!-- RS5.0 Core JS Files -->
        <script src="../pages-mat/assets-mat/js/menuzord.js"></script>
        <script src="../pages-mat/assets-mat/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="../pages-mat/assets-mat/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- RS5.0 Init  -->
        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery(".materialize-slider").revolution({
                    sliderType: "standard",
                    sliderLayout: "fullscreen",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        arrows: {
                            style: "erinyen",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            hide_onleave: true,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div>    <div class="tp-arr-img-over"></div> <span class="tp-arr-titleholder">{{title}}</span> </div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            }
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [700, 600, 500, 500],
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                    }

                });
            });
        </script>
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
        <script type="text/javascript"
                src="../pages-mat/assets-mat/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script type="text/javascript"
                src="../pages-mat/assets-mat/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript"
                src="../pages-mat/assets-mat/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript"
                src="../pages-mat/assets-mat/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript"
                src="../pages-mat/assets-mat/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript"
                src="../pages-mat/assets-mat/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript"
                src="../pages-mat/assets-mat/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript"
                src="../pages-mat/assets-mat/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    </body>
</html>