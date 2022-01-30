<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cupidknot</title>

    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/ext/grid_24.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/ext/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/ext/slider.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <script src="js/ext/jquery-1.7.min.js"></script>
    <script src="js/ext/jquery.easing.1.3.js"></script>
    <script src="js/ext/tms-0.4.1.js"></script>
    <script>
        $(document).ready(function () {
            $('.slider')._TMS({
                show: 0,
                pauseOnHover: true,
                prevBu: '.prev',
                nextBu: '.next',
                playBu: false,
                duration: 800,
                preset: 'fade',
                pagination: '.pags',
                pagNums: false,
                slideshow: 7000,
                numStatus: false,
                banners: false,
                waitBannerAnimation: false,
                progressBar: false
            })
        });

    </script>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        {{-- @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif --}}

    <header>
        <nav>
            @if (Route::has('login'))
            <ul class="menu">

                @auth
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                @else
                <li><a href="{{ route('login') }}">Log in</a></li>

                @if (Route::has('register'))
                <li><a href="{{ route('register') }}">Register</a></li>
                @endif
                @endauth
            </ul>
            @endif

        </nav>
    </header>
    <div id="slide">
        <div class="slider">
            <ul class="items">
                <li><img src="images/slide-1.jpg" alt=""></li>
                <li><img src="images/slide-2.jpg" alt=""></li>
                <li><img src="images/slide-3.jpg" alt=""></li>
                <li><img src="images/slide-4.jpg" alt=""></li>
            </ul>
        </div>
        <ul class="pags">
            <li><a href="#"><img src="images/slide-1-small.jpg" alt=""><span></span></a></li>
            <li><a href="#"><img src="images/slide-2-small.jpg" alt=""><span></span></a></li>
            <li><a href="#"><img src="images/slide-3-small.jpg" alt=""><span></span></a></li>
            <li><a href="#"><img src="images/slide-4-small.jpg" alt=""><span></span></a></li>
        </ul>
        <a href="#" class="prev">&nbsp;</a><a href="#" class="next">&nbsp;</a>
    </div>
    <!--==============================content================================-->
    <section id="content">
        <div class="container_24">
            <div class="grid_7">
                <div class="top-1 right-1">
                    <h2 class="h2-border">Love <span>story:</span></h2>
                    {{-- <p class="p1 top-2">Kate &amp; Leo is one of Free Website Templates created by
                        TemplateMonster.com team. This website template is optimized for 1280X1024 screen
                        resolution.It is also XHTML &amp; CSS valid.</p>
                    <p class="p-border">The PSD source files of this Kate &amp; Leo template are available for free
                        for the registered members of TemplateMonster.com. Feel free to get them!</p>
                    <p class="p-border clr-1 top-3">Lorem ipsum dolor sit amet, onsectetur adipiscing elit. Vivamus
                        sed arcu duieu tincidunt sem.Vivamus hendrerit mauris ut dui gravida ut. </p>
                    <a href="#" class="link-1">Read more</a> --}}
                </div>
            </div>
            <div class="grid_1">
                <div class="line-2">&nbsp;</div>
            </div>
            <div class="grid_8">
                <div class="top-1 right-1">
                    <h3><strong>About</strong> test</h3>
                    {{-- <div class="box-1"> <img src="images/page1-img1.jpg" alt="" class="img-border img-indent">
                        <div class="extra-wrap">
                            <p class="text-1">Kate Nelson</p>
                            <p class="text-2">24 years old<br>
                                Beginner actress</p>
                        </div>
                    </div>
                    <p class="text-3 top-4">Vivamus sed arcu duieu tincidunt sem. Vivamus endrerit mauris ut dui
                        gravida ut viverra lectus tincidunt. </p>
                    <p class="p-border">Cras mattis tempor eros nec tristique. Sed sed felis arcu, vel vehicula
                        augue. Maecenas faucibus sagittis cursus. Fusce tincidunt, tellus eget tristique cursus,
                        orci mi iaculis sem.</p>
                    <a href="#" class="link-1">Read more</a> --}}
                </div>
            </div>
            <div class="grid_1">
                <div class="line-2">&nbsp;</div>
            </div>
            <div class="grid_7">
                <div class="top-1">
                    <h3><strong>About</strong> Rohit</h3>
                    {{-- <div class="box-1"> <img src="images/page1-img2.jpg" alt="" class="img-border img-indent">
                        <div class="extra-wrap">
                            <p class="text-1">Leo Green</p>
                            <p class="text-2">28 years old<br>
                                Layer</p>
                        </div>
                    </div>
                    <div class="comments">
                        <div class="comments-corner"></div>
                        <div class="comment-1">
                            <div class="comment-2">
                                <p class="text-4">Vivamus sed arcu duieu tincidunt sem. Vivamus endrerit mauris ut
                                    dui gravida ut viverra lectus tincidunt.</p>
                                <p class="text-5 top-5">Lorem ipsum dolor sit amet, onsec tetur adipiscing elit.
                                    Vivamus sed arcu duieu tincidunt sem Vivamus. </p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="link-1">Read more</a> --}}
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>
    </div>
</body>

</html>
