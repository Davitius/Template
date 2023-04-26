<?php
if (!isset($language)) {
    $language = 'ge';
}
//dd($language);
?>
    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template</title>

    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    {{--Bootstrap--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    {{--  JQuery  --}}
    <script src="{{asset('/js/jquery-3.6.3.min.js')}}"></script>


    {{--  Font Avesome  --}}
    <link rel="stylesheet" href="https://kit.fontawesome.com/d2c442d876.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d2c442d876.js" crossorigin="anonymous"></script>

    {{-- Carousel 2 --}}
    <link rel="stylesheet" href="{{asset('css/crousel2.css')}}">

    {{--  TinyMCE  --}}
    <script src="https://cdn.tiny.cloud/1/31d5dwwep5hnlxz7uqb156p2jbb3u7jx4ed2nlm16mfmgys6/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>


    <style>
        body {
            background: {{$background['color']}};
        }

        /*მენიუ*/
        .navbar {
            margin-bottom: 20px;
            background: {{$menu['background']}};
            color: {{$menu['color']}};
        }

        .dropdown-menu {
            background: {{$menu['background']}};
            opacity: 0.8;
        }

        .nav-link, .dropdown-item {
            color: {{$menu['color']}};
        }

        .nav-link:hover, .dropdown-item:hover {
            color: {{$menu['hovercolor']}};
            background: {{$menu['background']}};
        }

        .nav-item {
            margin-right: 1em;
        }

        .earthicon {
            color: {{$menu['color']}};
            font-size: 30px;
        }

        .earthicon:hover {
            color: {{$menu['hovercolor']}};
        }

        /*მარჯვენა ბლოკები*/
        .RB-text-Div {
            margin-top: 10px;
            min-height: 200px;
            background-color: white;
            border-radius: 6px;
            text-align: left;
            padding: 10px;
            font-weight: normal;
            color: black;
        }

        /*საჭირო ბმულები*/
        .usefullLinks {
            background: {{$usefullinks['background']}};
            color: {{$usefullinks['color']}};
            text-align: center;
            font-weight: bold;
            min-height: 200px;
            padding: 20px 0 20px 0;
            display: {{$usefullinks['visible']}};
        }

        .usefultext {
            color: {{$usefullinks['color']}};
            font-size: {{$usefullinks['size']}};
        }

        .usefultext2 {
            color: {{$usefullinks2['color']}};
            font-size: {{$usefullinks2['size']}};
            display: block;
            margin-bottom: 1.5em;
            font-weight: bold;
        }

    </style>

</head>
<body>
<div class="container min-vh-100" style="padding: 20px; background: white">

    {{--  სტატიკური სურათი  --}}
    <div class="Header_Logo" @if($header->visible == 'block') style="display: block" @else style="display: none" @endif>
        <img class="headerLogoImg" src="../../../storage/{{$header->image}}">
    </div>
    <!--                 Header ფოტო კარუსელი-->
    <div class="Header_Logo" @if($header->visible != 'block') style="display: block" @else style="display: none" @endif>
        <div id="myCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                        aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                        class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                        class="active"
                        aria-current="true"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img class="" src="../../../storage/{{$sliders[0]}}" style="width: 100%">
                    <div class="container">
                        <div class="carousel-caption text-start">

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="" src="../../../storage/{{$sliders[1]}}" style="width: 100%">

                    <div class="container">
                        <div class="carousel-caption">

                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img class="" src="../../../storage/{{$sliders[2]}}" style="width: 100%">

                    <div class="container">
                        <div class="carousel-caption text-end">

                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <nav class="navbar navbar-expand-lg rounded" aria-label="Eleventh navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample09"
                    aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarsExample09">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"
                           href="{{route('/lang', $language)}}">{{__('local.მთავარი')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('News', $language)}}">{{__('local.სიახლეები')}}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                           aria-expanded="false">{{__('local.ჩვენს შესახებ')}}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                   href="{{route('Contact', $language)}}">{{__('local.კონტაქტი')}}</a></li>
                            <li><a class="dropdown-item"
                                   href="{{route('Ebout', $language)}}">{{__('local.ჩვენს შესახებ')}}</a></li>
                        </ul>
                    </li>
                </ul>
                <form method="get" action="{{route('Search', [$language])}}" style="margin-right: 30px">
                    @csrf
                    <input class="form-control" type="search" placeholder="{{__('local.ძიება')}}" aria-label="Search"
                           name="search" @if (isset($Search))value="{{$Search}}" @endif>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    @if (Route::has('login'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">@auth{{Auth::User()->name}}@else{{__('local.მომხმარებელი')}}@endauth</a>
                            <ul class="dropdown-menu">
                                @auth
                                    <li>
                                        <a class="dropdown-item"
                                           href="{{route('Controlpanel', $language)}}">{{__('local.მართვის პანელი')}}</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{__('local.გამოსვლა')}}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                @else
                                    <li><a class="dropdown-item" href="{{ route('MainLogin', $language) }}">{{__('local.შესვლა')}}</a>
                                    </li>
                                    @if(Route::has('register'))
                                        <li><a class="dropdown-item"
                                               href="{{ route('MainRegister', $language) }}">{{__('local.რეგისტრაცია')}}</a></li>
                                    @endif
                                @endauth
                            </ul>
                        </li>
                    @endif

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="earthicon fa-solid fa-earth-americas"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('/lang', 'ge')}}">
                                    <img class="w-25" src="{{asset('img/lang/ge.png')}}">
                                </a></li>
                            <li><a class="dropdown-item" href="{{route('/lang', 'en')}}">
                                    <img class="w-25" src="{{asset('img/lang/en.png')}}">
                                </a></li>
                            <li><a class="dropdown-item" href="{{route('/lang', 'ru')}}">
                                    <img class="w-25" src="{{asset('img/lang/ru.png')}}">
                                </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">


        <div class="LC col-md-8 text-center pb-5">
            {{-- კონტენტი --}}
            {{--            @yield('ff_slider')--}}
            @yield('content')
        </div>


        {{--    ბლოკები მარჯვენა    --}}
        <div class="RC col-md-4 min-vh-100" style="border-radius: 5px;">
            <?php $B = 0; ?>
            @foreach($Blocks as $block)
                <?php
                $B++;
                $blocktitle = 'title_' . $language;
                $blocktext = 'text_' . $language;
                $blokNumber = 'block' . $B;
                ?>
                <style>
                    .RB-{{$B}}  {
                        /*text-align: center;*/
                        /*font-weight: bold;*/
                        border-radius: 6px;
                        margin-bottom: 20px;
                        padding: 10px;
                        background: {{$$blokNumber['background']}};
                        color: {{$$blokNumber['color']}};
                        display: {{$$blokNumber['visible']}};
                        text-align: {{$$blokNumber['position']}};
                    }
                </style>
                <div class="RB-{{$B}}">
                    <label class="RBT-{{$B}}"
                           style="font-size: {{$$blokNumber['size']}}">{{$block->$blocktitle}}</label>
                    <div class="RB-text-Div" id="RB-text-Div-{{$B}}">
                        {!! $block->$blocktext !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    {{--  Carousel2  --}}

    <section class="product mb-5" style="background: {{$usefullinks2['background']}}; display: {{$usefullinks2['visible']}}">
        <?php $carousel2title = 'title_' . strtoupper($language); ?>
        <label class="usefultext2">
            {{$usefullinks2[$carousel2title]}}
        </label>
        <button class="pre-btn"><img src="{{asset('img/arrow.png')}}" alt=""></button>
        <button class="nxt-btn"><img src="{{asset('img/arrow.png')}}" alt=""></button>
        <div class="product-container">
            @foreach($ULImages2 as $ULImage2)
                <div class="product-card">
                    <div class="product-image">
                        <?php $carousel2imagename = 'name_' . strtoupper($language); ?>
                        <a class="" href="{{$ULImage2->link}}" target="_blank"><img
                                src="../../../storage/{{$ULImage2->image}}"
                                title="{{$ULImage2->$carousel2imagename}}"
                                class="product-thumb" alt=""></a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>



    {{--  Carousel1  --}}
    <div class="usefullLinks">
        <?php $carousel1title = 'title_' . strtoupper($language); ?>
        <label class="usefultext">
            {{$usefullinks[$carousel1title]}}
        </label>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    @foreach($ULImages as $ULImage)
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <div class="card-image">
                                    <?php $carousel1imagename = 'name_' . strtoupper($language); ?>
                                    <a href="{{$ULImage->link}}" target="_blank"><img
                                            src="../../../storage/{{$ULImage->image}}"
                                            title="{{$ULImage->$carousel1imagename}}" alt="" class="card-img"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>





    <footer class="d-flex flex-wrap justify-content-between align-items-center pt-5 p-1 my-5 border-top"
            style="border-radius: 6px;">
        @foreach($socialIcons as $socialIcon)
            <a href="{{$socialIcon->link}}"
               class="socialIcons col-md-1 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <i class="{{$socialIcon->icon}}"
                   style="color: {{$socialIcon->color}}; font-size: 50px; display: {{$socialIcon->visible}}"></i>
            </a>
        @endforeach
        <ul class="nav col-md-6 justify-content-end">
            @foreach($footerWords as $footerWord)
                <?php $footername = 'name_' . strtoupper($language); ?>
                <li class="nav-item" style="display: {{$footerWord->visible}}"><a href="{{$footerWord->link}}"
                                                                                  class="nav-link px-2 text-muted">{{$footerWord->$footername}}</a>
                </li>
            @endforeach
        </ul>
        <div class="input-group">
            <input class="form-control text-center mt-5" disabled value="© 2023 Davitius">
        </div>
    </footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

<!-- Swiper JS -->
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<!-- JavaScript -->
<script src="{{asset('js/script.js')}}"></script>
{{-- Carousel2 --}}
<script src="{{asset('js/carousel2.js')}}"></script>

{{-- TinyMCE --}}
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
</script>

</body>
</html>
