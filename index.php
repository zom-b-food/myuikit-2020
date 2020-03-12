<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="robots" content="index, follow" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="author Adam Marsh: Walking Through Brambles" GW Latimer available at
        thefogandwave.com and milkandbourbon.com; UI Developer at adam-marsh.com />
    <meta name="author" content="Adam Marsh - www.myuikit.com">
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='apple-mobile-web-app-status-bar-style' content='black'>
    <meta name='format-detection' content='telephone=no'>
    <title>myuikit.com | Responsive Sassified HTML5 Template</title>
    <link rel="dns-prefetch" href="http://www.myuikit.com/">
    <?php include 'sitewide/globals-top.php'; ?>
    <style type="text/css">
    p.hits {
        color: #4e5258;
        text-align: center;
    }

    p.hits a {
        color: #4e5258;
    }

    .copy-text {
        text-align: center;
    }
    </style>
</head>

<body data-spy="scroll" data-target=".scrollspy" data-offset="50">
    <!-- Preloader -->
    <div id="preloader">
        <div class="outer">
            <div class="Adam-folding-cube">
                <div class="Adam-cube1 Adam-cube"></div>
                <div class="Adam-cube2 Adam-cube"></div>
                <div class="Adam-cube4 Adam-cube"></div>
                <div class="Adam-cube3 Adam-cube"></div>
            </div>
        </div>
    </div>
    <!-- desktop header -->
    <header class="desktop-header d-flex align-items-start flex-column">
        <!-- logo text -->
        <h2 class="site-title ml-4 mb-3 mt-4">
            my<span class="color">UI</span>kit
        </h2>
        <div class="nav-wrapper">
            <ul class="vertical-menu scrollspy">
                <li><a href="#home">Pick Your Kit</a></li>
                <li><a href="#about">Design Engineering</a></li>
                <li><a href="#sandbox">UI/UX Sandbox</a></li>
                <li><a href="#widgets">DOM/AJAX Widgets</a></li>
                <li><a href="#intermission">Intermission</a></li>
                <li><a href="#book-plug">Buy My Book</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <!-- site footer -->
        <div class="footer">
            <!-- social icons -->
            <ul class="social-icons list-inline">
                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul>
            <!-- copyright text -->
            <span class="copyright">© 2019 Adam L Marsh (UI Design Engineering).</span>
        </div>
    </header>
    <!-- mobile header -->
    <header class="mobile-header">
        <div class="container">
            <!-- menu icon -->
            <div class="menu-icon d-inline-flex mr-4">
                <button>
                    <span></span>
                </button>
            </div>
        </div>
    </header>
    <!-- main layout -->
    <main class="content">
        <!-- section home -->
        <section id="home" class="home">
            <?php include 'inc/intro.php'; ?>
        </section>
        <!-- section About -->
        <section id="about" class="about pt-100 pb-100">
            <?php include 'inc/about.php'; ?>
        </section>
        <section id="sandbox" class="align-items-center">
            <?php include 'inc/sandbox.php'; ?>
        </section>
        <!-- section widgets -->
        <section id="widgets" class="align-items-center">
            <?php include 'inc/widgets.php'; ?>
        </section>
        <!-- section intermission -->
        <section id="intermission">
            <?php include 'inc/skills.php'; ?>
        </section>
        <!-- section book -->
        <section id="book-plug" class="align-items-center">
            <h2 class="section-title font-black text-uppercase">Buy My Book</h2>
            <?php include 'inc/book/book.php'; ?>
        </section>
        <!-- section contact -->
        <section id="contact">
            <?php include 'inc/reachout.php'; ?>
            <section>
                <div style="text-align:center;margin:0 auto;padding:30px 0;">
                    <p>
                        Since much of my work is pro-bono, please consider helping me offset production/hosting
                        costs by donating whatever pocket change you can spare.<br />
                        <a href="http://www.irisandpith.com/" target="_blank"
                            style="color:#A4EEF1;">www.irisandpith.com</a>
                    </p>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="8QGL8TPLQ874S" />
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif"
                            border="0" name="submit" title="PayPal - The safer, easier way to pay online!"
                            alt="Donate with PayPal button" />
                        <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1"
                            height="1" />
                    </form>
                    <p>
                        Thank You!
                    </p>
                </div>
            </section>
            <section>
                <div class="copy-text">
                    &nbsp;Copyright &copy; 2020 &nbsp;UI Design Engineering&nbsp; | &nbsp; All Rights
                    Reserved:<br />
                    www.ui-design-engineering.com
                    <p id="hits" class="text-center">
                        <span>
                            sesid=uikit.v2:&nbsp; <?php
/* counter */
/* opens countlog.txt to read the number of hits */
$data = fopen("counter.txt", "r");
$count = fgets($data,1000);
fclose($data);
$count = $count + 1;
echo "$count";
echo "\n";
/* opens countlog.txt to change new hit number */
$data = fopen("counter.txt", "w");
fwrite($data, $count);
fclose($data);
?> &nbsp;.030320
                        </span>
                    </p>
                </div>

            </section>
            <div class="container">
                <div id="disqus_thread"></div>
            </div>
            <script>
            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            /*
            			var disqus_config = function () {
            			this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            			this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            		};
            		*/
            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document,
                    s = d.createElement('script');
                s.src = 'https://myuikit.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                    powered by Disqus.</a></noscript>
    </main>
    <div class="footer">
        <!-- social icons -->
        <ul class="social-icons list-inline">
            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
        </ul>
        <!-- copyright text -->
        <span class="copyright">© 2019 UI Design Engineering.</span>
        <div class="links-sites">
            <h1>Adam L Marsh - http://www.adam-marsh.com</h1>
            <h1>Adam L Marsh - http://www.ui-design-engineering.com</h1>
            <h1>GW Latimer - Author, Walking Through Brambles</h1>
            <h1>G. Webster Latimer - Author, Walking Through Brambles</h1>
            <h1>Adam L Marsh - http://www.milkandbourbon.com</h1>
            <h1>Adam L Marsh - http://www.myuikit.com</h1>
            <h1>G.W. Latimer - http://www.thefogandwave.com</h1>
        </div>
    </div>
    <!-- Go to top button -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- SCRIPTS -->
    <?php include 'sitewide/globals-bottom.php'; ?>
    <script>
    (function($) {
        new WOW().init();
    })(jQuery);
    $(document).ready(function() {
        $('.scrollspy').scrollSpy();
    });
    $(document).ready(function($) {
        $('#watershed').sliderPro({
            width: 960,
            height: 200,
            arrows: true,
            buttons: false,
            waitForLayers: true,
            autoplay: true,
            autoScaleLayers: false,
        });
    });
    jQuery(document).ready(function() {
        jQuery(".materialize-slider").revolution({
            sliderType: "standard",
            sliderLayout: "fullwidth",
            delay: 9000,
            responsiveLevels: [1240, 1024, 768, 480],
            gridwidth: [1140, 1024, 768, 480],
            gridheight: [800, 800, 900, 900],
            disableProgressBar: "on",
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
            }
        });
    });
    </script>
    <script id="dsq-count-scr" src="//myuikit.disqus.com/count.js" async></script>
</body>

</html>