
<!-- RS5.0 Core JS Files -->
<script type="text/javascript" src="/pages-mat/assets-mat/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/pages-mat/assets-mat/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="/pages-mat/assets-mat/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="/pages-mat/assets-mat/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="/pages-mat/assets-mat/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="/pages-mat/assets-mat/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="/pages-mat/assets-mat/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="/pages-mat/assets-mat/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="/pages-mat/assets-mat/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="/pages-mat/assets-mat/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

<script>
    $(function () {
        $(".preloader").delay(3333).fadeOut();
    });



<!-- RS5.0 Init  -->

    jQuery(document).ready(function () {
        jQuery(".materialize-parallax").revolution({
            sliderType: "standard",
            sliderLayout: "fullscreen",
            delay: 9000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                }
            },
            fullScreenOffsetContainer: ".tt-nav",
            responsiveLevels: [1240, 1024, 778, 480],
            parallax: {
                type: "mouse",
                origo: "slidercenter",
                speed: 2000,
                levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                disable_onmobile: "on"
            }

        });
    });

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



