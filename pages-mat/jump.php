<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../pages-mat/sitewide-mat/globals-top.php'; ?>
        <meta name="description"
              content="Adam L Marsh; UI/UX Designer and Developer, www.adam-marsh.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
        <meta name="author" content="ui-design-engineering.com, www.myuikit.com">
        <title>www.myuikit.com - Materialize </title>
    </head>
    <body class="sidebar-collapse" id="top">
        <div class="se-pre-con"></div>
        <script>
            //paste this code under head tag or in a seperate js file.
            // Wait for window load
            $(window).load(function () {
                // Animate loader off screen
                $(".se-pre-con").fadeOut("slow");
                ;
            });
        </script>

        <div class="header-wrapper">
            <!-- Top bar -->
            <div class="top-bar visible-md visible-lg">
                <div class="container">
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
                        <div class="row mt-15">
                            <p>
                                <a class="nav-link" rel="tooltip" title="Contact" data-placement="bottom"
                                   href="mailto:am@ui-design-engineering.com">
                                    <i class="fa fa-envelope"></i>
                                    &nbsp;contact
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <header class="tt-nav">
                <div class="container">
                    <div id="materialize-menu" class="menuzord">
                        <!--logo start-->
                        <a href="../../index.php" class="logo-brand">
                            <img class="retina" src="/pages-mat/assets-mat/images/logo-white.png" alt=""/>
                        </a>
                        <!--logo end-->
                        <!--mega menu start-->
                        <ul class="menuzord-menu pull-right">
                            <li class="nav-item">
                                <a class="nav-link" href="#top">Top</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#middle">Middle</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#bottom">Bottom</a>
                            </li>
                        </ul>
                        <!--mega menu end-->
                    </div>
                </div>
            </header>
        </div>

        <div class="page-header" filter-color="red">
            <div class="page-header-image" data-parallax="true"
                 style="background-image: url('/pages-mat/assets-mat/images/bg4.jpg');"></div>
            <div class="container">
                <div class="row">
                    <div class="banner txt-white">
                        <h1>SASS-ified Materialize Kit</h1>

                        <p class="centered">
                            <a href="/pages-mat/pages-mat.zip" class="waves-effect waves-light btn purple">Download
                                This Kit</a>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="border-box-tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li role="presentation" class="active"><a href="/pages-mat/jump.php" class="waves-effect waves-dark"> <i
                                                class="fa fa-bell-o"></i>About</a></li>
                                    <li role="presentation"><a href="#tab-19" class="waves-effect waves-dark"
                                                                              role="tab"
                                                                              data-toggle="tab"> <i class="fa fa-anchor"></i>
                                            Templates</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="tab-18">
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
                                                        <li>and yes, Bootstrap</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade in" id="tab-19">
                                            <div class="row tight smoke">
                                                <div class="col-sm-4">
                                                    <h4 class="white-text">Stock Materialize Templates</h4>
                                                    <ul>
                                                        <li>
                                                            <a href="/pages-mat/tabs.php">tabs</a>
                                                        </li>
                                                        <li>
                                                            <a href="/pages-mat/blog.php">blog</a>
                                                        </li>
                                                        <li>
                                                            <a href="/pages-mat/feature-box.php">feature-box</a>
                                                        </li>
                                                        <li>
                                                            <a href="/pages-mat/typography.php">typography</a>
                                                        </li>
                                                        <li>
                                                            <a href="/pages-mat/waves.php">waves</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="white-text">...and</h4>
                                                    <ul>
                                                        <li>
                                                            <a href="/pages-mat/accordion.php">accordions</a>
                                                        </li>
                                                        <li>
                                                            <a href="/pages-mat/grid.php">grid</a>
                                                        </li>
                                                        <li>
                                                            <a href="/pages-mat/promo-box.php">promo-box</a>
                                                        </li>
                                                        <li>
                                                            <a href="/pages-mat/tables.php">tables</a>
                                                        </li>
                                                        <li>
                                                            <a href="/pages-mat/forms.php">forms</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h4 class="white-text">Sample Sites</h4>
                                                    <h5>
                                                        <a href="http://www.thefogandwave.com" target="_blank">The Fog &amp;
                                                            Wave</a>
                                                    </h5>
                                                    <h5>
                                                        <a href="http://www.milkandbourbon.com" target="_blank">Milk &amp;
                                                            Bourbon</a>
                                                    </h5>
                                                    <h5>
                                                        <a href="http://www.ui-design-engineering.com" target="_blank">UI Design
                                                            Engineering</a>
                                                    </h5>
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
        </div>
        <hr/>
        <main role="main">
            <!--button style start-->
            <section class="button-style section-padding">
                <div class="container">
                    <h2>Buttons</h2>

                    <div class="row">
                        <div class="col-md-12 mb-50">
                            <h4 class="mb-30">with amazing interactions</h4>
                            <a class="waves-effect waves-light btn">Default Button</a>
                            <a class="waves-effect waves-light btn pink">Pink Button</a>
                            <a class="waves-effect waves-light btn green">Green Button</a>
                            <a class="waves-effect waves-light btn purple">Purple Button</a>
                            <a class="waves-effect waves-light btn blue">Blue Button</a>
                            <a class="waves-effect waves-light btn yellow">Yellow Button</a>
                            <a class="waves-effect waves-light btn black">Black Button</a>
                            <a class="waves-effect waves-light btn grey lighten-1">Grey Button</a>
                            <a class="waves-effect waves-light btn red">Red Button</a>
                            <a class="waves-effect waves-light btn cyan">Cyan Button</a>
                            <a class="waves-effect waves-light btn indigo">Indigo Button</a>
                            <a class="waves-effect waves-light btn orange">Orange Button</a>
                        </div>
                        <div class="col-md-12 mb-50">
                            <h4 class="mb-30">with icons</h4>
                            <a class="waves-effect waves-light btn"><i class="material-icons left">&#xE8AE;</i> Default
                                Button</a>
                            <a class="waves-effect waves-light btn pink"><i class="material-icons left">&#xE0D9;</i>
                                Pink
                                Button</a>
                            <a class="waves-effect waves-light btn green"><i class="material-icons left">&#xE876;</i>
                                Green
                                Button</a>
                            <a class="waves-effect waves-light btn purple"><i class="material-icons left">&#xE037;</i>
                                Purple Button</a>
                            <a class="waves-effect waves-light btn blue"><i class="material-icons left">&#xE0B8;</i>
                                Blue
                                Button</a>
                            <a class="waves-effect waves-light btn yellow"><i class="material-icons left">&#xE040;</i>
                                Yellow Button</a>
                            <a class="waves-effect waves-light btn black"><i class="material-icons left">&#xE044;</i>
                                Black
                                Button</a>
                            <a class="waves-effect waves-light btn grey lighten-1"><i class="material-icons left">
                                    &#xE8DE;</i> Grey Button</a>
                            <a class="waves-effect waves-light btn red"><i class="material-icons left">&#xE02B;</i> Red
                                Button</a>
                            <a class="waves-effect waves-light btn cyan"><i class="material-icons left">&#xE8B6;</i>
                                Cyan
                                Button</a>
                            <a class="waves-effect waves-light btn indigo"><i class="material-icons left">&#xE029;</i>
                                Indigo Button</a>
                            <a class="waves-effect waves-light btn orange"><i class="material-icons left">&#xE899;</i>
                                Orange Button</a>
                        </div>
                        <div class="col-md-12 mb-80">
                            <h4 class="mb-30">Flat Buttons</h4>
                            <a class="waves-effect waves-red btn-flat red-text">Button</a>
                            <a class="waves-effect waves-green btn-flat green-text">Button</a>
                            <a class="waves-effect waves-purple btn-flat purple-text">Button</a>
                            <a class="waves-effect waves-orange btn-flat orange-text">Button</a>
                            <a class="waves-effect waves-teal btn-flat teal-text">Button</a>
                        </div>
                        <div class="col-md-12 mb-50">
                            <h4>Circle Buttons</h4>
                            <br>
                            <button class="waves-effect waves-circle waves-light btn-floating btn-large">
                                <i class="material-icons">&#xE8A7;</i>
                            </button>
                            <button class="waves-effect waves-circle waves-light btn-floating btn-large pink">
                                <i class="material-icons">&#xE03F;</i>
                            </button>
                            <button class="waves-effect waves-circle waves-light btn-floating btn-large green">
                                <i class="material-icons">&#xE859;</i>
                            </button>
                            <button class="waves-effect waves-circle waves-light btn-floating btn-large blue">
                                <i class="material-icons">&#xE0BE;</i>
                            </button>
                            <button class="waves-effect waves-circle waves-light btn-floating btn-large purple">
                                <i class="material-icons">&#xE049;</i>
                            </button>
                            <button
                                class="waves-effect waves-circle waves-light btn-floating btn-large  grey lighten-2">
                                <i class="material-icons">&#xE8A2;</i>
                            </button>
                            <button class="waves-effect waves-circle waves-light btn-floating btn-large black">
                                <i class="material-icons">&#xE55A;</i>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- button style end -->
            <hr/>
            <section class="section-padding">
                <div class="container">
                    <h2>Accordions</h2>

                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mb-30">Accordion Style One</h4>

                            <div class="panel-group flat-accordion brand-accordion z-depth-1" id="flat-one">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#flat-one" href="#collapse-flat-one">
                                                Matrix Mission
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="collapse-flat-one" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores
                                            placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt
                                            commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed
                                            veritatis?
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#flat-one"
                                               href="#collapse-flat-two">
                                                Super Creative
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="collapse-flat-two" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores
                                            placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt
                                            commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed
                                            veritatis?
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#flat-one"
                                               href="#collapse-flat-three">
                                                Awesome Customer Servicers
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="collapse-flat-three" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#flat-one"
                                               href="#collapse-flat-four">
                                                Hard Working Team
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="collapse-flat-four" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <h4 class="mb-30">Accordion Style Two</h4>

                            <div class="panel-group feature-accordion pink-accordion icon plus-icon" id="accordion-two">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion-two"
                                               href="#collapse-v2-one">
                                                Matrix Mission
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="collapse-v2-one" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores
                                            placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt
                                            commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed
                                            veritatis?
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion-two"
                                               href="#collapse-v2-two">
                                                Super Creative
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="collapse-v2-two" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores
                                            placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt
                                            commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed
                                            veritatis?
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion-two"
                                               href="#collapse-v2-three">
                                                Awesome Customer Servicers
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="collapse-v2-three" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion-two"
                                               href="#collapse-v2-four">
                                                Hard Working Team
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="collapse-v2-four" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor
                                            brunch.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                </div>
            </section>
            <hr/>
            <section class="section-padding ">
                <div class="container">
                    <div class="text-center mb-50">
                        <h2>Progress Bars</h2>
                        <p>Dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="progress-section">
                                <span class="progress-title">Web Design</span>

                                <div class="progress">
                                    <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar"
                                         aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <span>90%</span>
                                    </div>
                                </div>
                                <!-- /.progress -->
                            </div>
                            <!-- progress-section end -->
                            <div class="progress-section">
                                <span class="progress-title">Mobile Interface</span>

                                <div class="progress">
                                    <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar"
                                         aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                        <span>86%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- progress-section end -->
                            <div class="progress-section">
                                <span class="progress-title">Mobile Interface</span>

                                <div class="progress">
                                    <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar"
                                         aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                        <span>86%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- progress-section end -->
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-sm-6">
                            <div class="progress-section">
                                <span class="progress-title">Web Design</span>

                                <div class="progress">
                                    <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar"
                                         aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <span>90%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- progress-section end -->
                            <div class="progress-section">
                                <span class="progress-title">Mobile Interface</span>

                                <div class="progress">
                                    <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar"
                                         aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                        <span>86%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- progress-section end -->
                            <div class="progress-section">
                                <span class="progress-title">Mobile Interface</span>

                                <div class="progress">
                                    <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar"
                                         aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                        <span>86%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- progress-section end -->
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                    <div class="text-center mb-50">
                        <p>Dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="progress-section">
                                <span class="progress-title">Web Design</span>

                                <div class="progress">
                                    <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out"
                                         role="progressbar"
                                         aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <span>90%</span>
                                    </div>
                                </div>
                                <!-- /.progress -->
                            </div>
                            <!-- progress-section end -->
                            <div class="progress-section">
                                <span class="progress-title">Mobile Interface</span>

                                <div class="progress">
                                    <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out"
                                         role="progressbar"
                                         aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                        <span>86%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- progress-section end -->
                            <div class="progress-section">
                                <span class="progress-title">Mobile Interface</span>

                                <div class="progress">
                                    <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out"
                                         role="progressbar"
                                         aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                        <span>86%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- progress-section end -->
                        </div>
                        <!-- /.col-md-6 -->
                        <div class="col-sm-6">
                            <div class="progress-section">
                                <span class="progress-title">Web Design</span>

                                <div class="progress">
                                    <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out"
                                         role="progressbar"
                                         aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                        <span>90%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- progress-section end -->
                            <div class="progress-section">
                                <span class="progress-title">Mobile Interface</span>

                                <div class="progress">
                                    <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out"
                                         role="progressbar"
                                         aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                        <span>86%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- progress-section end -->
                            <div class="progress-section">
                                <span class="progress-title">Mobile Interface</span>

                                <div class="progress">
                                    <div class="progress-bar brand-bg progress-dot six-sec-ease-in-out"
                                         role="progressbar"
                                         aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                        <span>86%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- progress-section end -->
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <hr/>
            <section class="section-padding">
                <div class="container">
                    <h2>Alerts</h2>

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <!--info-->
                            <div class="alert info-border" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <i class="fa fa-check-circle-o"></i> Info Message: Your message comes here
                            </div>
                            <!--success-->
                            <div class="alert success-border" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <i class="fa fa-thumbs-o-up"></i> Success Message: Your message comes here
                            </div>
                            <!--warning-->
                            <div class="alert warning-border" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <i class="fa fa-warning"></i> Warning Message: Your message comes here
                            </div>
                            <!--danger-->
                            <div class="alert danger-border" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <i class="fa fa-times-circle"></i> Error Message: Your message comes here
                            </div>
                        </div>
                        <!-- /.col-md-8 -->
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <!--info-->
                            <div class="alert info-border" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <i class="fa fa-check-circle-o"></i> Info Message: Your message comes here
                            </div>
                            <!--success-->
                            <div class="alert success-border" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <i class="fa fa-thumbs-o-up"></i> Success Message: Your message comes here
                            </div>
                            <!--warning-->
                            <div class="alert warning-border" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <i class="fa fa-warning"></i> Warning Message: Your message comes here
                            </div>
                            <!--danger-->
                            <div class="alert danger-border" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <i class="fa fa-times-circle"></i> Error Message: Your message comes here
                            </div>
                        </div>
                        <!-- /.col-md-8 -->
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <!--info-->
                            <div class="alert info-icon icon" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <i class="fa fa-check-circle-o"></i> Info Message: Your message comes here
                            </div>
                            <!--success-->
                            <div class="alert success-icon icon" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <i class="fa fa-lg fa-thumbs-o-up"></i> Success Message: Your message comes here
                            </div>
                            <!--warning-->
                            <div class="alert warning-icon icon" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <i class="fa fa-lg fa-warning"></i> Warning Message: Your message comes here
                            </div>
                            <!--danger-->
                            <div class="alert danger-icon icon" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <i class="fa fa-lg fa-times-circle"></i> Error Message: Your message comes here
                            </div>
                        </div>
                        <!-- /.col-md-8 -->
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!--info-->
                            <div class="alert alert-box info-box" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <div class="icon-wrap">
                                    <i class="fa fa-check-circle-o"></i>
                                </div>
                                <!-- /.icon-wrap -->
                                <div class="info-wrap">
                                    <strong>Info Message: Your message comes here</strong>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</span>
                                </div>
                                <!-- /.info-wrap -->
                            </div>
                            <!-- /.info-->
                            <!--success-->
                            <div class="alert alert-box success-box" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <div class="icon-wrap">
                                    <i class="fa fa-lg fa-thumbs-o-up"></i>
                                </div>
                                <!-- /.icon-wrap -->
                                <div class="info-wrap">
                                    <strong>Success Message: Your message comes here</strong>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</span>
                                </div>
                                <!-- /.info-wrap -->
                            </div>
                            <!-- /.success-->
                            <!--warning-->
                            <div class="alert alert-box warning-box" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <div class="icon-wrap">
                                    <i class="fa fa-lg fa-warning"></i>
                                </div>
                                <!-- /.icon-wrap -->
                                <div class="info-wrap">
                                    <strong>Warning Message: Your message comes here</strong>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</span>
                                </div>
                                <!-- /.info-wrap -->
                            </div>
                            <!-- /.warning-->
                            <!--danger-->
                            <div class="alert alert-box danger-box" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <div class="icon-wrap">
                                    <i class="fa fa-lg fa-times-circle"></i>
                                </div>
                                <!-- /.icon-wrap -->
                                <div class="info-wrap">
                                    <strong>Error Message: Your message comes here</strong>
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</span>
                                </div>
                                <!-- /.info-wrap -->
                            </div>
                            <!-- /.danger-->
                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                </div>
            </section>
            <hr/>

            <section id="middle" class="section-padding">
                <div class="container">
                    <h2>Fun Facts</h2>

                    <div id="count1" class="padding-top-50">
                        <div class="container-fluid">
                            <div class="row text-center">
                                <div class="col-sm-3 counter-wrap light-blue">
                                    <strong class="white-text"><span class="timer">545</span>+</strong>
                                    <span class="count-description white-text">Client Work With Us</span>
                                </div>
                                <!-- /.col-sm-3 -->
                                <div class="col-sm-3 counter-wrap deep-purple">
                                    <strong class="white-text"><span class="timer">535</span>+</strong>
                                    <span class="count-description white-text">Happy Clients</span>
                                </div>
                                <!-- /.col-sm-3 -->
                                <div class="col-sm-3 counter-wrap light-blue">
                                    <strong class="white-text"><span class="timer">1544</span>+</strong>
                                    <span class="count-description white-text">Cups Of Coffee</span>
                                </div>
                                <!-- /.col-sm-3 -->
                                <div class="col-sm-3 counter-wrap deep-purple">
                                    <strong class="white-text"><span class="timer">111</span>+</strong>
                                    <span class="count-description white-text">Awards Won</span>
                                </div>
                                <!-- /.col-sm-3 -->
                            </div>
                        </div>
                        <!-- /.container -->
                    </div>
                    <div id="count2" class="section-padding gray-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <ul class="count-plus-box">
                                        <li>
                                            <i class="material-icons brand-color">&#xE90F;</i>
                                            <span class="timer">320</span>
                                            <span class="count-description">Ideas</span>
                                        </li>
                                        <li>
                                            <i class="material-icons brand-color">&#xE863;</i>
                                            <span class="timer">220</span>
                                            <span class="count-description">Experiments</span>
                                        </li>
                                        <li>
                                            <i class="material-icons brand-color">&#xE8F8;</i>
                                            <span class="timer">145</span>
                                            <span class="count-description">Project Run</span>
                                        </li>
                                        <li>
                                            <i class="material-icons brand-color">&#xE87E;</i>
                                            <span class="timer">140</span>
                                            <span class="count-description">Success</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.container -->
                    </div>
                    <div id="count3" class="facts-two">
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-sm-3 counter-wrap">
                                    <i class="material-icons brand-color">&#xE90F;</i>
                                    <span class="timer">545</span>
                                    <span class="count-description">Project run</span>
                                </div>
                                <!-- /.col-sm-3 -->
                                <div class="col-sm-3 counter-wrap">
                                    <i class="material-icons brand-color">&#xE863;</i>
                                    <span class="timer">535</span>
                                    <span class="count-description">Ideas</span>
                                </div>
                                <!-- /.col-sm-3 -->
                                <div class="col-sm-3 counter-wrap">
                                    <i class="material-icons brand-color">&#xE8F8;</i>
                                    <span class="timer">1544</span>
                                    <span class="count-description">Experiments</span>
                                </div>
                                <!-- /.col-sm-3 -->
                                <div class="col-sm-3 counter-wrap">
                                    <i class="material-icons brand-color">&#xE87E;</i>
                                    <span class="timer">111</span>
                                    <span class="count-description">success</span>
                                </div>
                                <!-- /.col-sm-3 -->
                            </div>
                        </div>
                        <!-- /.container -->
                    </div>
                </div>
            </section>
            <hr/>
            <section class="section-padding">
                <div class="container">
                    <h2>Typography</h2>
                    <section class="ptb-50">
                        <div class="">
                            <h2>Heading Style</h2>
                            <hr class="mb-40">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1>H1 Heading</h1>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, quis, tempora!
                                        Suscipit ex reprehenderit eius nulla adipisci ipsum in eaque perferendis
                                        laboriosam
                                        ad accusantium, architecto aliquid, voluptates culpa minus, ab!</p>
                                </div>
                                <div class="col-md-6">
                                    <h2>H2 Heading</h2>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi vel culpa magnam
                                        ea,
                                        aliquam dolores dolor architecto, facere nesciunt. Temporibus reiciendis culpa
                                        quidem nemo ex, deleniti, quod eveniet nihil voluptatibus.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>H3 Heading</h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem consequuntur
                                        recusandae fugiat, qui dicta autem. Quam magni, nobis culpa, iusto inventore
                                        fuga
                                        tempora dolores eaque voluptates nesciunt debitis expedita adipisci.</p>
                                </div>
                                <div class="col-md-6">
                                    <h4>H4 Heading</h4>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis ullam eaque
                                        eligendi at accusantium natus debitis tempora quibusdam! Voluptatibus et illo ex
                                        adipisci, voluptate nihil dolor numquam. Modi iste, eum.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>H5 Heading</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ad
                                        perspiciatis
                                        provident dolores voluptatem, rem nostrum porro, delectus neque adipisci
                                        deserunt
                                        consectetur natus, enim quibusdam dicta placeat eum. Cumque, nesciunt.</p>
                                </div>
                                <div class="col-md-6">
                                    <h6>H6 Heading</h6>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consectetur
                                        consequatur, ut, eius distinctio omnis. Necessitatibus vel eaque officia?
                                        Consequatur laboriosam voluptates ut quaerat ad mollitia error veritatis neque
                                        porro.</p>
                                </div>
                            </div>
                            <br>

                            <p><strong>This is Only Bold Text</strong> eget diam posuere sollicitudin eu tincidunt
                                nulla.
                                <b><i>This is Bold italic Text</i></b> magna, in scelerisque urna placerat vel. egestas
                                quis
                                facilisis metus.Phasellus <b><a href="#"><u>This is Link Text</u></a></b> diam posuere
                                llicitudin eu tincidunt nulla rabitur eleifen tempor inted magna in scelerisqu urna
                                placerat
                                vel. Phasellus eget sem id justo consequat egestas quis facilisis metus.Phasellus
                                vehicula
                                justo eget diam posuere sollicitudin eu tincidunt nulla ma gna elerisque urna placerat
                                vel.
                                Phsellus eget sem id justo consequ egestas quis facilisis metus.</p>
                            <br>
                            <br>

                            <h2>Blockquote</h2>
                            <hr class="mb-40">
                            <blockquote>
                                <p>Continually underwhelm visionary models with cross-unit synergy. Uniquely leverage
                                    other's premium convergence before progressive data. Proactively monetize
                                    performance
                                    based expertise through intuitive alignments. Monotonectally promote worldwide
                                    portals
                                    through ubiquitous relationships.</p>
                                <footer>Ralph Waldo Emerson</footer>
                            </blockquote>
                            <br>

                            <h2>List Style</h2>
                            <hr class="mb-40">
                            <div class="row">
                                <div class="col-sm-3">
                                    <ol>
                                        <li>Ordered List Style</li>
                                        <li>Ordered List Style</li>
                                        <li>Ordered List Style</li>
                                        <li>Ordered List Style</li>
                                        <li>Ordered List Style</li>
                                    </ol>
                                </div>
                                <div class="col-sm-3">
                                    <ul class="unorder-list">
                                        <li>Unordered List Style</li>
                                        <li>Unordered List Style</li>
                                        <li>Unordered List Style</li>
                                        <li>Unordered List Style</li>
                                        <li>Unordered List Style</li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <ul class="list-unstyled">
                                        <li>Default list-unstyled</li>
                                        <li>Default list-unstyled</li>
                                        <li>Default list-unstyled</li>
                                        <li>Default list-unstyled</li>
                                        <li>Default list-unstyled</li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <ul>
                                        <li class="">Default List One</li>
                                        <li class="text-info">Default List Two</li>
                                        <li class="text-success">Default List Three</li>
                                        <li class="text-warning">Default List Four</li>
                                        <li class="text-danger">Default List Five</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mb-80"></div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h3>Check Circle List</h3>
                                    <ul class="check-circle-list">
                                        <li><i class="fa fa-check-circle mr-10"></i> Check circle list</li>
                                        <li><i class="fa fa-check-circle mr-10"></i> Check circle list</li>
                                        <li><i class="fa fa-check-circle mr-10"></i> Check circle list</li>
                                        <li><i class="fa fa-check-circle mr-10"></i> Check circle list</li>
                                        <li><i class="fa fa-check-circle mr-10"></i> Check circle list</li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <h3>Check Circle List</h3>
                                    <ul class="check-circle-list">
                                        <li><i class="fa fa-check-square mr-10"></i> Check square list</li>
                                        <li><i class="fa fa-check-square mr-10"></i> Check square list</li>
                                        <li><i class="fa fa-check-square mr-10"></i> Check square list</li>
                                        <li><i class="fa fa-check-square mr-10"></i> Check square list</li>
                                        <li><i class="fa fa-check-square mr-10"></i> Check square list</li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <h3>Check List Style</h3>
                                    <ul class="check-circle-list">
                                        <li><i class="fa fa-check mr-10"></i> Check list style</li>
                                        <li><i class="fa fa-check mr-10"></i> Check list style</li>
                                        <li><i class="fa fa-check mr-10"></i> Check list style</li>
                                        <li><i class="fa fa-check mr-10"></i> Check list style</li>
                                        <li><i class="fa fa-check mr-10"></i> Check list style</li>
                                    </ul>
                                </div>
                                <div class="col-sm-3">
                                    <h3>Check Mark Style</h3>
                                    <ul class="check-circle-list">
                                        <li><i class="fa fa-check-square-o mr-10"></i> Check mark style</li>
                                        <li><i class="fa fa-check-square-o mr-10"></i> Check mark style</li>
                                        <li><i class="fa fa-check-square-o mr-10"></i> Check mark style</li>
                                        <li><i class="fa fa-check-square-o mr-10"></i> Check mark style</li>
                                        <li><i class="fa fa-check-square-o mr-10"></i> Check mark style</li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <hr class="mb-40">
                            <h3>Full Column</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptatem deleniti,
                                iusto
                                porro quasi aut est incidunt eum. Aliquid earum, culpa dolores aspernatur tempore velit
                                beatae porro totam. Et, saepe. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Ut
                                eos assumenda, mollitia tenetur atque recusandae dignissimos optio cum molestiae
                                possimus
                                adipisci minima, aliquam perferendis eius et repellat soluta magni, delectus!</p>
                            <hr class="mb-40">
                            <div class="row ">
                                <div class="col-sm-6">
                                    <h3>One Half</h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptatem
                                        deleniti, iusto porro quasi aut est incidunt eum. Aliquid earum, culpa dolores
                                        aspernatur tempore velit beatae porro totam. Et, saepe. Lorem ipsum dolor sit
                                        amet,
                                        consectetur adipisicing elit. Ut eos assumenda, mollitia tenetur atque
                                        recusandae
                                        dignissimos optio cum molestiae possimus adipisci minima.</p>
                                </div>
                                <div class="col-sm-6">
                                    <h3>One Half</h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptatem
                                        deleniti, iusto porro quasi aut est incidunt eum. Aliquid earum, culpa dolores
                                        aspernatur tempore velit beatae porro totam. Et, saepe. Lorem ipsum dolor sit
                                        amet,
                                        consectetur adipisicing elit. Ut eos assumenda, mollitia tenetur atque
                                        recusandae
                                        dignissimos optio cum molestiae possimus adipisci minima.</p>
                                </div>
                            </div>
                            <!-- /.row -->
                            <hr class="mb-40">
                            <div class="row ">
                                <div class="col-sm-4">
                                    <h3>One Third</h3>

                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Ducimus volup tatem
                                        deleniti, iusto porro quasi aut est inci dunt eum. Aliq uid earum, culpa dolores
                                        asper natur tempore velit bea tae porro totam. Lorem ipsum dolor sit amet,
                                        consec
                                        tetur adipis icing elit. Ut eos assumenda, mollitia tenetur.</p>
                                </div>
                                <div class="col-sm-4">
                                    <h3>One Third</h3>

                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Ducimus volup tatem
                                        deleniti, iusto porro quasi aut est inci dunt eum. Aliq uid earum, culpa dolores
                                        asper natur tempore velit bea tae porro totam. Lorem ipsum dolor sit amet,
                                        consec
                                        tetur adipis icing elit. Ut eos assumenda, mollitia tenetur.</p>
                                </div>
                                <div class="col-sm-4">
                                    <h3>One Third</h3>

                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Ducimus volup tatem
                                        deleniti, iusto porro quasi aut est inci dunt eum. Aliq uid earum, culpa dolores
                                        asper natur tempore velit bea tae porro totam. Lorem ipsum dolor sit amet,
                                        consec
                                        tetur adipis icing elit. Ut eos assumenda, mollitia tenetur.</p>
                                </div>
                            </div>
                            <!-- /.row -->
                            <hr class="mb-40">
                            <div class="row ">
                                <div class="col-sm-3">
                                    <h3>One Fourth</h3>

                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Ducimus volup tatem
                                        deleniti, iusto porro quasi aut elit est inci dunt eum. Aliq uid earum, culpa
                                        dolores asper natur tempore.</p>
                                </div>
                                <div class="col-sm-3">
                                    <h3>One Fourth</h3>

                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Ducimus volup tatem
                                        deleniti, iusto porro quasi aut elit est inci dunt eum. Aliq uid earum, culpa
                                        dolores asper natur tempore.</p>
                                </div>
                                <div class="col-sm-3">
                                    <h3>One Fourth</h3>

                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Ducimus volup tatem
                                        deleniti, iusto porro quasi aut elit est inci dunt eum. Aliq uid earum, culpa
                                        dolores asper natur tempore.</p>
                                </div>
                                <div class="col-sm-3">
                                    <h3>One Fourth</h3>

                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipisicing elit. Ducimus volup tatem
                                        deleniti, iusto porro quasi aut elit est inci dunt eum. Aliq uid earum, culpa
                                        dolores asper natur tempore.</p>
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </section>
                </div>
            </section>
            <hr/>
        </main>
        <div style="color:#cccccc">
            <?php
            $count_my_page = ("countlog-mat.txt");
            $hits = file($count_my_page);
            $hits[0]++;
            $fp = fopen($count_my_page, "w");
            fputs($fp, "$hits[0]");
            fclose($fp);
            echo $hits[0];
            ?>
        </div>
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
        <? include "../pages-mat/sitewide-mat/footer.php"; ?>
        <? include "../pages-mat/sitewide-mat/globals-bottom.php"; ?>
        <!-- jQuery -->
        <script src="/pages-mat/assets-mat/js/bootstrap-tabcollapse.min.js"></script>
        <script src="/pages-mat/assets-mat/js/jquery.easing.min.js"></script>
        <script src="/pages-mat/assets-mat/js/jquery.sticky.min.js"></script>
        <script src="/pages-mat/assets-mat/js/smoothscroll.min.js"></script>
        <script src="/pages-mat/assets-mat/js/smooth-menu.js"></script>
        <script src="/pages-mat/assets-mat/js/jquery.stellar.min.js"></script>
        <script src="/pages-mat/assets-mat/js/imagesloaded.js"></script>
        <script src="/pages-mat/assets-mat/js/jquery.inview.min.js"></script>
        <script src="/pages-mat/assets-mat/js/jquery.shuffle.min.js"></script>
        <script src="/pages-mat/assets-mat/js/equalheight.js"></script>
        <script src="/pages-mat/assets-mat/owl.carousel/owl.carousel.min.js"></script>
        <script src="/pages-mat/assets-mat/flexSlider/jquery.flexslider-min.js"></script>
        <script src="/pages-mat/assets-mat/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="/pages-mat/assets-mat/js/animated-headline.js"></script>
        <script src="/pages-mat/assets-mat/js/menuzord.js"></script>
        <script src="/pages-mat/assets-mat/js/scripts.js"></script>
        <script>
            $('#count1').on('inview', function (event, visible, visiblePartX, visiblePartY) {
                if (visible) {
                    $(this).find('.timer').each(function () {
                        var $this = $(this);
                        $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function () {
                                $this.text(Math.ceil(this.Counter));
                            }
                        });
                    });
                    $(this).off('inview');
                }
            });

            $('#count2').on('inview', function (event, visible, visiblePartX, visiblePartY) {
                if (visible) {
                    $(this).find('.timer').each(function () {
                        var $this = $(this);
                        $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function () {
                                $this.text(Math.ceil(this.Counter));
                            }
                        });
                    });
                    $(this).off('inview');
                }
            });


            $('#count3').on('inview', function (event, visible, visiblePartX, visiblePartY) {
                if (visible) {
                    $(this).find('.timer').each(function () {
                        var $this = $(this);
                        $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function () {
                                $this.text(Math.ceil(this.Counter));
                            }
                        });
                    });
                    $(this).off('inview');
                }
            });
        </script>

    </body>
</html>
