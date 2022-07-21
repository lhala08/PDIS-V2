<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <section class="intro">
        <div class="intro-block">
            <div class="centerfold-wrap">
                <div class="hex-master-wrap">
                    <div class="grid-1">
                        <div class="hex-wrap ais " data-title="Authorization Information System" data-content="ais-desc" data-color="#696969">
                            <div class="hex-init"></div>
                            <div class="hex-borders">
                                <div class="border-1"></div>
                                <div class="border-2"></div>
                                <div class="border-3"></div>
                            </div>
                            <div class="label">
                                <a href="#">
                                    <p id="ais">AIS</p>
                                </a>
                            </div>
                            <div class="hexagon">
                                <div class="hex-inner-1">
                                    <div class="hex-inner-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="hex-wrap lms" data-title="Professional Development Learning Management System" data-content="lms-desc" data-color="#FFDF00">
                            <div class="hex-init"></div>
                            <div class="hex-borders">
                                <div class="border-1"></div>
                                <div class="border-2"></div>
                                <div class="border-3"></div>
                            </div>
                            <div class="label">
                                <a href="#">
                                    <p id="lms">PDLMS</p>
                                </a>
                            </div>
                            <div class="hexagon">
                                <div class="hex-inner-1">
                                    <div class="hex-inner-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-2">
                        <div class="hex-wrap lr" data-title="Professional Development Learning Resources Management System" data-content="lr-desc" data-color="#004E00">
                            <div class="hex-init"></div>
                            <div class="hex-borders">
                                <div class="border-1"></div>
                                <div class="border-2"></div>
                                <div class="border-3"></div>
                            </div>
                            <div class="label">
                                <a href="">
                                    <p id="lr">PDLRMS</p>
                                </a>
                            </div>
                            <div class="hexagon">
                                <div class="hex-inner-1">
                                    <div class="hex-inner-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="hex-wrap ipdis" data-title="Individual Professional Development Information System" data-content="ipdis-desc" data-color="#00008B">
                            <div class="hex-init"></div>
                            <div class="hex-borders">
                                <div class="border-1"></div>
                                <div class="border-2"></div>
                                <div class="border-3"></div>
                            </div>
                            <div class="label">
                                <a href="">
                                    <p id="ipdis">IPDIS</p>
                                </a>
                            </div>
                            <div class="hexagon">
                                <div class="hex-inner-1">
                                    <div class="hex-inner-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="hex-wrap pris" data-url="www.fb.com" data-title="Professional Recognition Information System" data-content="pris-desc" data-color="#0096FF">
                            <div class="hex-init"></div>
                            <div class="hex-borders">
                                <div class="border-1"></div>
                                <div class="border-2"></div>
                                <div class="border-3"></div>
                            </div>
                            <div class="label">
                                <a href="">
                                    <p id="pris">PRIS</p>
                                </a>
                            </div>
                            <div class="hexagon">
                                <div class="hex-inner-1">
                                    <div class="hex-inner-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-3">
                        <div class="hex-wrap fmis" data-title="Facilities Management Information System" data-content="fmis-desc" data-color="#4B0082">
                            <div class="hex-init"></div>
                            <div class="hex-borders">
                                <div class="border-1"></div>
                                <div class="border-2"></div>
                                <div class="border-3"></div>
                            </div>
                            <div class="label">
                                <a href="">
                                    <p id="fmis">FMIS</p>
                                </a>
                            </div>
                            <div class="hexagon">
                                <div class="hex-inner-1">
                                    <div class="hex-inner-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="hex-wrap me" data-title="Monitoring & Evaluation Information System" data-content="me-desc" data-color="#7B3F00">
                            <div class="hex-init"></div>
                            <div class="hex-borders">
                                <div class="border-1"></div>
                                <div class="border-2"></div>
                                <div class="border-3"></div>
                            </div>
                            <div class="label">
                                <a href="#">
                                    <p id="me">M&EIS</p>
                                </a>
                            </div>
                            <div class="hexagon">
                                <div class="hex-inner-1">
                                    <div class="hex-inner-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                </div>
                <div class="code-display">
                    <div class="code-description">
                        <div class="pdis-desc"><br>
                            <p id="pdis">&nbsp; &nbsp; &nbsp;The Professional Development Information System (PDIS) is a web-based data capturing information system that is designed to digitize NEAP transactions for internal and external stakeholders.</p>
                        </div>
                        <div class="ais-desc">
                            <p class="code-title"></p>
                            <p>&nbsp; &nbsp;Authorization of NEAP evaluation for non-DepEd entities to become providers of recognized professional development programs and/or courses for teachers and school leaders</p>
                            <div class="code-icon"></div>
                        </div>
                        <div class="lms-desc">
                            <p class="code-title"></p>
                            <p>&nbsp; &nbsp;A virtual classroom software application for the administration, documentation, tracking, reporting, automation and delivery of educational courses, training programs, or learning and development programs.
                                <div class="code-icon"></div>
                        </div>
                        <div class="lr-desc">
                            <p class="code-title"></p><br>
                            <p>&nbsp; &nbsp;Designed to support increased distribution and access to learning, teaching and professional development resources at the Central office Region, Division and School/Cluster levels of DepED.</p>
                            <div class="code-icon"></div>
                        </div>
                        <div class="ipdis-desc ">
                            <p class="code-title "></p>
                            <p>&nbsp; &nbsp; It is an individual development plan that will help stakeholders (Teachers, School Heads and Supervisors) understand their strengths and areas for improvement. We are currently in the data gathering stage of the
                                system's requirements.</p>
                            <div class="code-icon "></div>
                        </div>
                        <div class="pris-desc ">
                            <p class="code-title "></p>
                            <p>&nbsp; &nbsp;Designed for Recognition is a quality assurance process that is intended to uphold the learning and development standards in the development and delivery of professional development programs and courses </p>
                            <div class="code-icon "></div>
                        </div>
                        <div class="fmis-desc ">
                            <p class="code-title "></p>
                            <p>&nbsp; &nbsp;FMIS can be summarized as creating a virtual environment that is conducive to carrying out the stakeholders primary operations, taking an integral view of the services and using this to deliver satisfaction and
                                value through support for and enhancement of the Philippine Education System.
                            </p>
                            <div class="code-icon "></div>
                        </div>
                        <div class="me-desc ">
                            <p class="code-title "></p>
                            <p>&nbsp; &nbsp; A continuous management function to assess if progress is made in achiev­ing expected results, to spot bottlenecks in implementation and to highlight whether there are any unintended effects (positive or negative)
                                from an investment plan, programme or project and its activities.</p>
                            <div class="code-icon "></div>
                        </div>
                    </div>

                </div>
                <div class="hoverblock "></div>
            </div>
            <!-- End Centerfold-Wrap -->
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js "></script>
    <script>
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
    </script>
        </div>
    </body>
</html>
