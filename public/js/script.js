//slider setting
$('.slider').bxSlider({
    mode: 'vertical',
    pager: false,
    auto: true,
    pause: 5000,
	useCSS: false,
      easing: 'jswing',
    speed: 1500,
    controls: false
});

//about carousel setting
$('#about-slide').carousel({
    interval: 8000
})

//testimonial carousel setting
$("#testimonial-slide").list_ticker({
    speed: 5000,
    effect: 'fade'
})

//sticky navigation
$(document).ready(function () {
    $(".header").sticky({
        topSpacing: 0
    });
});

//Page scrolling
$(document).ready(function () {
    $('.navigation').onePageNav({
        filter: ':not(.external)',
        scrollThreshold: 0.25,
        scrollOffset: 60
    });

});


//easing scrolling
$(function () {
    $('.move-to').bind('click', function (event) {
        var $anchor = $(this);

        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 59
        }, 500, 'linear');
        /*
        if you don't want to use the easing effects:
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000);
        */
        event.preventDefault();
    });
});


// Video responsive
$(".video").fitVids();


//script team
$(document).ready(function () {
    $(".team-inner").click(function (e) {
        if ($(this).hasClass("scroll")) {
            $(this).removeClass("scroll");
        } else {
            $(".team-inner").removeClass("scroll");
            $(this).addClass("scroll");
        }
    });
});


//isotope setting
var $container = $('.portfolio-body');

$container.imagesLoaded(function () {
    $container.isotope({});
});

// filter items when filter link is clicked
$('.port-filter a').click(function () {
    var selector = $(this).attr('data-filter');
    $container.isotope({
        filter: selector
    });
    return false;
});

//portfolio ajax setting
$(document).ready(function () {
    var hash = window.location.hash.substr(1);
    var href = $('.port-item a').each(function () {
        var href = $(this).attr('data-link');
        if (hash == href.substr(0, href.length - 5)) {
            var toLoad = hash + '.html .worksajax > *';
            $('.worksajax').load(toLoad)
        }
    });

    $('.port-item a').click(function () {

        var toLoad = $(this).attr('data-link') + ' .worksajax > *';
        $('.worksajax').slideUp('slow', loadContent);

        function loadContent() {
            $('.worksajax').load(toLoad, '', showNewContent)
        }

        function showNewContent() {
            $.getScript("js/portfolio.js");
            $('.worksajax').slideDown('slow');

        }

        return false;


    });

});

//portfolio scrolling
$(function () {
    $('.port-item a').bind('click', function (event) {
        var $anchor = $('#workslist');

        $('html, body').stop().animate({
            scrollTop: $($anchor).offset().top - 59
        }, 1000, 'linear');
        event.preventDefault();
    });
});

//twitter
jQuery(function ($) {
    $(".tweetfeed").tweet({
        username: "envato",
        modpath: 'twitter/',
        page: 1,
        count: 10,
        loading_text: "loading ..."
    })
});

//ticker twitter setting
$(document).ready(function () {
    $(this).find(".tweet_list").list_ticker({
        speed: 10000,
        effect: 'fade'
    })
})

// script prettyphoto
$(document).ready(function () {
    $("a[data-rel^='prettyPhoto']").prettyPhoto({
        social_tools: false,
        deeplinking: false
    });
});

//google map
$(window).bind("load", function () {
    demo.add(function () {
        $('#map_canvas').gmap({
            'center': '-6.94010,107.62575',
            'zoom': 13,
            scrollwheel: false,
            'disableDefaultUI': false,
            'callback': function () {
                var self = this;
                self.addMarker({
                    'position': this.get('map').getCenter()
                }).click(function () {
                    self.openInfoWindow({
                        'content': 'Visit Us <br> Address: 11231 Buah Batu, 40298 Bandung <br> Phone: 1233-2324-2324 <br>Email: company-email@email.com'
                    }, this);
                });
            }
        });
    }).load();
});