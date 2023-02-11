<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>სკოლა</title>

    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    {{--Bootstrap--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <style>
        body {
            background: #dcdad5;
        }
        /*მენიუ*/
        .navbar {
            margin-bottom: 20px;
            background: #214b66;
            color: navajowhite;
        }
        .dropdown-menu {
            background:  #214b66;
            opacity: 0.8;
        }
        .nav-link, .dropdown-item {
            color: navajowhite;
        }
        .nav-link:hover, .dropdown-item:hover {
            color: yellow;
            background:  #214b66;
        }

        /*მარჯვენა ბლოკები*/
        .RB-1, .RB-2, .RB-3, .RB-4, .RB-5 {
            text-align: center;
            color: #763232;
            font-weight: bold;
            border-radius: 6px;
            background: #e3dd6c;
            /*min-height: 300px;*/
            margin-bottom: 20px;
            padding: 10px;
        }
        .RB-2 {
            background: #1f4478;
            color: white;
        }
        .RB-3 {
            background: #577fba;
            color: black;
        }
        .RB-4 {
            background: #7aba57;
            color: white;
        }
        .RB-5 {
            background: #ba6b57;
            color: white;
        }
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
    </style>

</head>
<body>
<div class="container min-vh-100" style="padding: 20px; background: white">
    <div class="Header_Logo" style="margin-bottom: 20px">
        <img class="" src="{{asset('img/logo.png')}}" style="width: 100%">
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
                        <a class="nav-link" aria-current="page" href="/">მთავარი</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('News')}}">სიახლეები</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ლინკი3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ლინკი4</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">ჩვენს შესახებ</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('Contact')}}">კონტაქტი</a></li>
                            <li><a class="dropdown-item" href="{{route('Ebout')}}">ჩვენს შესახებ</a></li>
                            <li><a class="dropdown-item" href="#">სტრუქტურა</a></li>
                        </ul>
                    </li>


                </ul>
                <form role="search" style="margin-right: 30px">
                    <input class="form-control" type="search" placeholder="ძიება" aria-label="Search">
                </form>

                <ul class="navbar-nav mb-2 mb-lg-0">
                    @if (Route::has('login'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">@auth{{Auth::User()->name}}@elseმომხმარებელი@endauth</a>
                            <ul class="dropdown-menu">
                                @auth
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('გასვლა') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                @else
                                    <li><a class="dropdown-item" href="{{ route('login') }}">შესვლა</a></li>
                                    @if(Route::has('register'))
                                        <li><a class="dropdown-item" href="{{ route('register') }}">რეგისტრაცია</a></li>
                                    @endif
                                @endauth
                            </ul>
                        </li>
                    @endif

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="" style="width: 30px" src="{{asset('img/earth.png')}}">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">ქართ</a></li>
                                <li><a class="dropdown-item" href="#">Eng</a></li>
                                <li><a class="dropdown-item" href="#">Рус</a></li>
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


        <div class="RC col-md-4 min-vh-100" style="border-radius: 5px;">

            <div class="RB-1">
                <label class="">ბლოკ 1</label>
                <div class="RB-text-Div">

                </div>
            </div>
            <div class="RB-2">
                <label class="">ბლოკ 2</label>
                <div class="RB-text-Div">

                </div>
            </div>
            <div class="RB-3">
                <label class="">ბლოკ 3</label>
                <div class="RB-text-Div">

                </div>
            </div>
            <div class="RB-4">
                <label class="">ბლოკ 4</label>
                <div class="RB-text-Div">

                </div>
            </div>
            <div class="RB-5">
                <label class="">ბლოკ 5</label>
                <div class="RB-text-Div">

                </div>
            </div>
        </div>

    </div>


    <div class="usefullLinks">
        <label class="">სასარგებლო ბმულები</label>

        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                <a href="#"><img src="{{asset('images/ecatalog.jpg')}}" alt="" class="card-img"></a>

                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                <a href="#"><img src="{{asset('images/emis.jpg')}}" alt="" class="card-img"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                <a href="#"><img src="{{asset('images/eqe.jpg')}}" alt="" class="card-img"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <div class="card-image">
                                <a href="#"><img src="{{asset('images/esida.jpg')}}" alt="" class="card-img"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>


    </div>


    <footer class="d-flex flex-wrap justify-content-between align-items-center pt-5 my-5 border-top">
        <p class="col-md-4 mb-0 text-muted">© 2023 Davitius</p>

        <a href="/"
           class="col-md-1 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#29395a" class="bi bi-facebook"
                 viewBox="0 0 16 16">
                <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
        </a>
        <a href="/"
           class="col-md-1 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="red" class="bi bi-youtube"
                 viewBox="0 0 16 16">
                <path
                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
            </svg>
        </a>
        <a href="/"
           class="col-md-1 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#0572ac" class="bi bi-twitter"
                 viewBox="0 0 16 16">
                <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
            </svg>
        </a>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">მთავარი</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">ლინკი1</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">ლინკი2</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">ლინკი3</a></li>

            <!--                  <li class="nav-item dropdown">-->
            <!--                      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">ლინკი4</a>-->
            <!--                      <ul class="dropdown-menu">-->
            <!--                          <li><a class="dropdown-item" href="#">ლინკი4_1</a></li>-->
            <!--                          <li><a class="dropdown-item" href="#">ლინკი4_2</a></li>-->
            <!--                          <li><a class="dropdown-item" href="#">ლინკი4_3</a></li>-->
            <!--                      </ul>-->
            <!--                  </li>-->

        </ul>
    </footer>


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
-->


<!-- Swiper JS -->
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<!-- JavaScript -->
<script src="{{asset('js/script.js')}}"></script>

</body>
</html>
