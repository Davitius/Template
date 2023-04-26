<?php
if (!isset($language)) {
    $language = 'ge';
}
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

    {{--  TinyMCE  --}}
    <script src="https://cdn.tiny.cloud/1/31d5dwwep5hnlxz7uqb156p2jbb3u7jx4ed2nlm16mfmgys6/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

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
            background:  {{$menu['background']}};
            opacity: 0.8;
        }
        .nav-link, .dropdown-item {
            color: {{$menu['color']}};
        }
        .nav-link:hover, .dropdown-item:hover {
            color: {{$menu['hovercolor']}};
            background:  {{$menu['background']}};
        }
        .nav-item{
            margin-right: 1em;
        }


    </style>

</head>
<body>
<div class="container min-vh-100" style="padding: 20px; background: white">

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
                        <a class="nav-link" aria-current="page" href="{{route('Controlpanel', $language)}}">{{__('local.მთავარი')}}</a>
                    </li>
                    <li class="nav-item dropdown" style="margin-right: 2em">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                           aria-expanded="false">{{__('local.ვებ-გვერდი')}}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                   href="{{route('/lang', $language)}}">{{__('local.მთავარი')}}</a></li>
                            <li><a class="dropdown-item"
                                   href="{{route('News', $language)}}">{{__('local.სიახლეები')}}</a></li>
                            <li><a class="dropdown-item"
                                   href="{{route('Ebout', $language)}}">{{__('local.ჩვენს შესახებ')}}</a></li>
                            <li><a class="dropdown-item"
                                   href="{{route('Contact', $language)}}">{{__('local.კონტაქტი')}}</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                           aria-expanded="false">{{__('local.დიზაინი')}}</a>
                        <ul class="dropdown-menu">
                            @can('view', auth()->user())
                            <li><a class="dropdown-item"
                                   href="{{route('Palette', $language)}}">{{__('local.პალიტრა')}}</a></li>
                                <li><a class="dropdown-item"
                                       href="{{route('Constructor', $language)}}">{{__('local.კონსტრუქტორი')}}</a></li>
                            @endcan
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                           aria-expanded="false">{{__('local.მართვის პანელი')}}</a>
                        <ul class="dropdown-menu">
                            @can('view', auth()->user())
                                <li><a class="dropdown-item"
                                       href="{{route('CpPosts', $language)}}">{{__('local.პოსტები')}}</a></li>
                                <li><a class="dropdown-item"
                                       href="{{route('CpContact', $language)}}">{{__('local.კონტაქტი')}}</a></li>
                            @endcan
                        </ul>
                    </li>

                </ul>


                <ul class="navbar-nav mb-2 mb-lg-0">
                    @if (Route::has('login'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                               aria-expanded="false">@auth{{Auth::User()->name}}@else{{__('local.მომხმარებელი')}}@endauth</a>
                            <ul class="dropdown-menu">
                                @auth
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
                                    <li><a class="dropdown-item" href="{{ route('login') }}">{{__('local.შესვლა')}}</a>
                                    </li>
                                    @if(Route::has('register'))
                                        <li><a class="dropdown-item"
                                               href="{{ route('register') }}">{{__('local.რეგისტრაცია')}}</a></li>
                                    @endif
                                @endauth
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="row">

        <div class="LC col-md-12 text-center pb-5">
            {{-- კონტენტი --}}
            {{--            @yield('ff_slider')--}}
            @yield('content')
        </div>

    </div>
{{--/row--}}




    <footer class="d-flex flex-wrap justify-content-between align-items-center pt-5 p-1 my-5 border-top"
            style="border-radius: 6px;">
        @foreach($socialIcons as $socialIcon)
            <a href="{{$socialIcon->link}}"
               class="socialIcons col-md-1 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <i class="{{$socialIcon->icon}}" style="color: {{$socialIcon->color}}; font-size: 50px; display: {{$socialIcon->visible}}"></i>
            </a>
        @endforeach
        <ul class="nav col-md-6 justify-content-end">
            @if($language == 'ge')
            @foreach($footerWords as $footerWord)
            <li class="nav-item" style="display: {{$footerWord->visible}}"><a href="{{$footerWord->link}}" class="nav-link px-2 text-muted">{{$footerWord->name_GE}}</a></li>
            @endforeach
            @endif
                @if($language == 'en')
                    @foreach($footerWords as $footerWord)
                        <li class="nav-item"><a href="{{$footerWord->link}}" class="nav-link px-2 text-muted">{{$footerWord->name_EN}}</a></li>
                    @endforeach
                @endif
                @if($language == 'ru')
                    @foreach($footerWords as $footerWord)
                        <li class="nav-item"><a href="{{$footerWord->link}}" class="nav-link px-2 text-muted">{{$footerWord->name_RU}}</a></li>
                    @endforeach
                @endif
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
