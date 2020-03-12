<!doctype html>
<html lang="en">
    <head>
        <?php include '../pages-mat/sitewide-mat/globals-top.php'; ?>
        <meta name="description"
              content="Adam L Marsh; UI/UX Designer and Developer, www.adam-marsh.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
        <meta name="author" content="ui-design-engineering.com, www.myuikit.com">
        <title>Gallery Template for Materialize</title>
        <style type="text/css">
        </style>
    </head>
    <body class="sidebar-collapse">
        <?php include '../pages-mat/sitewide-mat/header.php'; ?>

        <section class="section-padding ">
            <div class="container">
                <div class="text-center mb-80">
                    <h2 class="section-title text-uppercase">Flex Slider</h2>

                    <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum
                        luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam
                        nulla ac nisi rhoncus.</p>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="gallery-thumb">
                            <ul class="slides">
                                <li data-thumb="/pages-mat/assets-mat/images/gallery/author-1.jpg">
                                    <img src="/pages-mat/assets-mat/images/gallery/author-1.jpg" alt="image">
                                </li>
                                <li data-thumb="/pages-mat/assets-mat/images/gallery/author-2.jpg">
                                    <img src="/pages-mat/assets-mat/images/gallery/author-2.jpg" alt="image">
                                </li>
                                <li data-thumb="/pages-mat/assets-mat/images/gallery/author-3.jpg">
                                    <img src="/pages-mat/assets-mat/images/gallery/author-3.jpg" alt="image">
                                </li>
                                <li data-thumb="/pages-mat/assets-mat/images/gallery/author-4.jpg">
                                    <img src="/pages-mat/assets-mat/images/gallery/author-4.jpg" alt="image">
                                </li>
                            </ul>
                        </div>
                        <!-- /.gallery-thumb -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <hr>
        <section class="section-padding">
            <div class="container">
                <div class="text-center mb-80">
                    <h2 class="section-title text-uppercase">Bootstrap Slider</h2>

                    <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum
                        luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam
                        nulla ac nisi rhoncus.</p>
                </div>
                <div id="project-slider" class="carousel slide boot-slider" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#project-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#project-slider" data-slide-to="1"></li>
                        <li data-target="#project-slider" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="img-responsive" src="/pages-mat/assets-mat/images/portfolio/single-project-1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="/pages-mat/assets-mat/images/portfolio/single-project-2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="/pages-mat/assets-mat/images/portfolio/single-project-3.jpg" alt="">
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#project-slider" role="button" data-slide="prev">
                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#project-slider" role="button" data-slide="next">
                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
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
    </body>
</html>