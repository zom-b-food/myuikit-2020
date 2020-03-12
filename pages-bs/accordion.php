<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../pages-bs/sitewide-bs/globals-top.php'; ?>
    <meta name="description" content="Adam L Marsh; UI/UX Designer and Developer, www.adam-marsh.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
    <meta name="author" content="ui-design-engineering.com, www.myuikit.com">

</head>

<body>
<header>
    <h1>BeefUp <span>A jQuery Accordion Plugin</span></h1>
    <a href="https://github.com/Schascha/BeefUp" title="View on GitHub" class="button">GitHub</a>
</header>

<main>

    <article class="beefup example1">
        <h3 class="beefup__head">
            Item 1
        </h3>

        <div class="beefup__body">
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
            </p>
        </div>
    </article>

    <article class="beefup example1">
        <h3 class="beefup__head">
            Item 2
        </h3>

        <div class="beefup__body">
            <article class="beefup example1">
                <h4 class="beefup__head">
                    Nested Item
                </h4>

                <div class="beefup__body">
                    <p>
                        Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                        arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                    </p>
                </div>
            </article>
        </div>
    </article>

<pre>
$('.example1').beefup();
</pre>

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
<script src="../assets-bs/js/jquery.min.js"></script>
<script src="../assets-bs/js/components/jquery.beefup.min.js"></script>
<script>
    $(function() {

        // Default
        $('.example1').beefup();


    });
</script>
</body>
</html>
