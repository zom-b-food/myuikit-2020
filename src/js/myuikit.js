$(window).on('load', function() {
    "use strict";

    /*=========================================================================
        Preloader
    =========================================================================*/
    $("#preloader").delay(350).fadeOut('slow');

    /*=========================================================================
     Isotope
     =========================================================================*/
    $('.portfolio-filter').on( 'click', 'li', function() {
        var filterValue = $(this).attr('data-filter');
        $container.isotope({ filter: filterValue });
    });

    // change is-checked class on buttons
    $('.portfolio-filter').each( function( i, buttonGroup ) {
        var $buttonGroup = $( buttonGroup );
        $buttonGroup.on( 'click', 'li', function() {
            $buttonGroup.find('.current').removeClass('current');
            $( this ).addClass('current');
        });
    });

    var $container = $('.portfolio-wrapper');
    $container.imagesLoaded( function() {
      $('.portfolio-wrapper').isotope({
          // options
          itemSelector: '[class*="col-"]',
          masonry: {
              // use element for option
              columnWidth: '[class*="col-"]'
          }
      });
    });

    /*=========================================================================
     Infinite Scroll
     =========================================================================*/
    var curPage = 1;
    var pagesNum = $(".portfolio-pagination").find("li a:last").text();   // Number of pages

    $container.infinitescroll({
        itemSelector: '.grid-item',
        nextSelector: '.portfolio-pagination li a',
        navSelector: '.portfolio-pagination',
        extraScrollPx: 0,
        bufferPx: 0,
        maxPage: 6,
        loading: {
            finishedMsg: "No more works",
            msgText: '',
            speed: 'slow',
            selector: '.load-more'
        }
    },
    // trigger Masonry as a callback
    function( newElements ) {

      var $newElems = $( newElements );
      $newElems.imagesLoaded(function(){
        $newElems.animate({ opacity: 1 });
        $container.isotope( 'appended', $newElems );
      });

      // Check last page
      curPage++;
      if(curPage == pagesNum) {
        $( '.load-more' ).remove();
      }

    });

    $container.infinitescroll( 'unbind' );

    $( '.load-more .btn' ).on('click', function() {
      $container.infinitescroll( 'retrieve' );
      // display loading icon
      $( '.load-more .btn i' ).css('display', 'inline-block');
      $( '.load-more .btn i' ).addClass('fa-spin');

      $(document).ajaxStop(function () {
        setTimeout(function(){
               // hide loading icon
          $( '.load-more .btn i' ).hide();
        }, 1000);
      });
      return false;
    });

    /* ======= Mobile Filter ======= */

    // bind filter on select change
    $('.portfolio-filter-mobile').on( 'change', function() {
      // get filter value from option value
      var filterValue = this.value;
      // use filterFn if matches value
      filterValue = filterFns[ filterValue ] || filterValue;
      $container.isotope({ filter: filterValue });
    });

    var filterFns = {
      // show if number is greater than 50
      numberGreaterThan50: function() {
        var number = $(this).find('.number').text();
        return parseInt( number, 10 ) > 50;
      },
      // show if name ends with -ium
      ium: function() {
        var name = $(this).find('.name').text();
        return name.match( /ium$/ );
      }
    };
});

$(document).on('ready', function() {
    "use strict";

    /*=========================================================================
                Slick Slider
    =========================================================================*/
    $('.clients-wrapper').slick({
      dots: true,
      arrows: false,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: true,
            arrows: false
          }
        },
        {
          breakpoint: 425,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false
          }
        }
      ]
    });

    $('.testimonials-wrapper').slick({
      dots: true,
      arrows: false
    });

});

$(function(){
    "use strict";

    /*=========================================================================
            Mobile Menu Toggle
    =========================================================================*/
    $('.menu-icon button').on( 'click', function() {
        $('header.desktop-header, main.content, header.mobile-header').toggleClass('open');
    });

    $('.content').on( 'click', function() {
        $('header.desktop-header, main.content, header.mobile-header').removeClass('open');
    });

    $('.vertical-menu li a').on( 'click', function() {
        $('header.desktop-header, main.content, header.mobile-header').removeClass('open');
    });

    /*=========================================================================
     One Page Scroll with jQuery
     =========================================================================*/
    $('.vertical-menu li a[href^="#"]:not([href="#"]), .mouse-wrapper').on('click', function(event) {
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top
      }, 800, 'easeInOutQuad');
      event.preventDefault();
    });

    /*=========================================================================
     Add (nav-link) class to main menu.
     =========================================================================*/
    $('.vertical-menu li a').addClass('nav-link');

    /*=========================================================================
     Bootstrap Scrollspy
     =========================================================================*/
    $("body").scrollspy({ target: ".scrollspy"});

    /*=========================================================================
     Counterup JS for facts
     =========================================================================*/
    $('.count').counterUp({
        delay: 10,
        time: 2000
    });

    /*=========================================================================
     Progress bar animation with Waypoint JS
     =========================================================================*/
    if ($('.skill-item').length > 0) {
        var waypoint = new Waypoint({
            element: document.getElementsByClassName('skill-item'),
            handler: function(direction) {

                $('.progress-bar').each(function() {
                    var bar_value = $(this).attr('aria-valuenow') + '%';
                    $(this).animate({ width: bar_value }, { easing: 'linear' });
                });

                this.destroy()
            },
            offset: '50%'
        });
    }

    /*=========================================================================
     Spacer with Data Attribute
     =========================================================================*/
    var list = document.getElementsByClassName('spacer');

    for (var i = 0; i < list.length; i++) {
        var size = list[i].getAttribute('data-height');
        list[i].style.height = "" + size + "px";
    }

    /*=========================================================================
            Main Menu
    =========================================================================*/
    $( ".submenu" ).before( '<i class="ion-md-add switch"></i>' );

    $(".vertical-menu li i.switch").on( 'click', function() {
        var $submenu = $(this).next(".submenu");
        $submenu.slideToggle(300);
        $submenu.parent().toggleClass("openmenu");
    });

    /*=========================================================================
            Scroll to Top
    =========================================================================*/
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 350) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });
    $('#return-to-top').click(function(event) {     // When arrow is clicked
      event.preventDefault();
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 400);
    });

});

/* ========================================================================= */
/*   Contact Form Validating
 /* ========================================================================= */


$('#contact-submit').click(function (e) {

    //stop the form from being submitted
    e.preventDefault();

    /* declare the variables, var error is the variable that we use on the end
     to determine if there was an error or not */
    var error = false;
    var name = $('#name').val();
    var email = $('#email').val();
    var subject = $('#subject').val();
    var message = $('#message').val();


    if (name.length == 0) {
        var error = true;
        $('#name').css("border-color", "#D8000C");
    } else {
        $('#name').css("border-color", "#666");
    }
    if (email.length == 0 || email.indexOf('@') == '-1') {
        var error = true;
        $('#email').css("border-color", "#D8000C");
    } else {
        $('#email').css("border-color", "#666");
    }
    if (subject.length == 0) {
        var error = true;
        $('#subject').css("border-color", "#D8000C");
    } else {
        $('#subject').css("border-color", "#666");
    }
    if (message.length == 0) {
        var error = true;
        $('#message').css("border-color", "#D8000C");
    } else {
        $('#message').css("border-color", "#666");
    }

    //now when the validation is done we check if the error variable is false (no errors)
    if (error == false) {
        //disable the submit button to avoid spamming
        //and change the button text to Sending...
        $('#contact-submit').attr({
            'disabled': 'false',
            'value': 'Sending...'
        });

        /* using the jquery's post(ajax) function and a lifesaver
         function serialize() which gets all the data from the form
         we submit it to send_email.php */
        $.post("sendmail.php", $("#contact-form").serialize(), function (result) {
            //and after the ajax request ends we check the text returned
            if (result == 'sent') {
                //if the mail is sent remove the submit paragraph
                $('#cf-submit').remove();
                //and show the mail success div with fadeIn
                $('#mail-success').fadeIn(500);
            } else {
                //show the mail failed div
                $('#mail-fail').fadeIn(500);
                //re enable the submit button by removing attribute disabled and change the text back to Send The Message
                $('#contact-submit').removeAttr('disabled').attr('value', 'Send The Message');
            }
        });
    }
});

// End Jquery Function
