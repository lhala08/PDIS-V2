$(document).ready(function() {
    $('.hex-wrap').click(function() {
        let $link = $(this).attr("data-url")
        window.location.replace($link);
    });

    $('.pdis-desc').addClass('desc-active');
    $('.code-descriptopn > div, .desc-active').children().velocity('stop', true).velocity("transition.slideRightBigIn", { stagger: 300 })

    function hex_initial_animation() {
        $(".hex-wrap,.hover-notify").velocity("transition.expandIn", { stagger: 150 });
        $(".hex-wrap").velocity("callout.pulse");
        $(".hoverblock").velocity("fadeOut", { delay: 3000, duration: 0 });
    }
    hex_initial_animation();

    var hoverdetect = setInterval(function() { hovernotify() }, 3000);

    function hovernotify() {
        $(".hover-notify").velocity("callout.tada");
    }

    function myStopFunction() {
        $(".hover-notify").velocity('stop', true).velocity("fadeOut");

        clearInterval(hoverdetect);
    }

    $(".hex-init").mouseenter(function() {


        myStopFunction();

        var title_color = $(this).parent().attr("data-color");
        var title_name = $(this).parent().attr("data-title");
        var desc_name = $(this).parent().attr("data-content");

        function hex_description() {
            $('.code-description').velocity('stop', true).velocity("transition.slideRightBigIn");
            $('.' + desc_name).siblings().removeClass('desc-active');
            setTimeout(function() {
                $('.' + desc_name).addClass('desc-active');
                $('.code-descriptopn > div, .desc-active').children().velocity('stop', true).velocity("transition.slideRightBigIn", { stagger: 300 });
                $('.code-title, .desc-active span').velocity({ color: title_color }, { queue: false });
                $('.code-title').text(title_name)
            }, 0);
        }
        hex_description();

        $(this).parent().addClass('hexactive');
        $('.hexactive').velocity({ scaleX: "1.1", scaleY: "1.1" }, { duration: 200 });

    }).mouseleave(function() {
        $('.hexactive').velocity('stop', true).velocity('reverse').removeClass('hexactive');
    });

});

$(".ais").mouseenter(function() {
    const hexagon = document.querySelector('#ais');
    hexagon.style.cssText = 'color:#696969 !important;font-size:2rem;font-weight:600 !important;'

});

$(".ais").mouseleave(function() {
    const hexagon = document.querySelector('#ais');
    hexagon.style.cssText = 'color:black !important;font-size:22px;font-weight:200 !important;'

});


$(".ipdis").mouseenter(function() {
    const hexagon = document.querySelector('#ipdis');
    hexagon.style.cssText = 'color:#00008B !important;font-size:2rem;font-weight:600 !important;'

});

$(".ipdis").mouseleave(function() {
    const hexagon = document.querySelector('#ipdis');
    hexagon.style.cssText = 'color:black !important;font-size:22px;font-weight:200 !important;'

});

$(".pris").mouseenter(function() {
    const hexagon = document.querySelector('#pris');
    hexagon.style.cssText = 'color:#0096FF !important;font-size:2rem;font-weight:600 !important;'

});

$(".pris").mouseleave(function() {
    const hexagon = document.querySelector('#pris');
    hexagon.style.cssText = 'color:black !important;font-size:22px;font-weight:200 !important;'

});


$(".lms").mouseenter(function() {
    const hexagon = document.querySelector('#lms');
    hexagon.style.cssText = 'color:#FFDF00 !important;font-size:2rem;font-weight:600 !important;'

});

$(".lms").mouseleave(function() {
    const hexagon = document.querySelector('#lms');
    hexagon.style.cssText = 'color:black !important;font-size:22px;font-weight:200 !important;'

});
$(".lr").mouseenter(function() {
    const hexagon = document.querySelector('#lr');
    hexagon.style.cssText = 'color:#004E00 !important;font-size:2rem;font-weight:600 !important;'

});

$(".lr").mouseleave(function() {
    const hexagon = document.querySelector('#lr');
    hexagon.style.cssText = 'color:black !important;font-size:22px;font-weight:200 !important;'

});
$(".fmis").mouseenter(function() {
    const hexagon = document.querySelector('#fmis');
    hexagon.style.cssText = 'color:#4B0082 !important;font-size:2rem;font-weight:600 !important;'

});

$(".fmis").mouseleave(function() {
    const hexagon = document.querySelector('#fmis');
    hexagon.style.cssText = 'color:black !important;font-size:22px;font-weight:200 !important;'

});
$(".me").mouseenter(function() {
    const hexagon = document.querySelector('#me');
    hexagon.style.cssText = 'color:#7B3F00 !important;font-size:2rem;font-weight:600 !important;'

});

$(".me").mouseleave(function() {
    const hexagon = document.querySelector('#me');
    hexagon.style.cssText = 'color:black !important;font-size:22px;font-weight:200 !important;'

});