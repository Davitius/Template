@extends('layouts.main')


@yield('layouts.ff_slider')


@section('content')
    <!--                 ფოტო კარუსელი-->

    <div id="myCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class=""
                    aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                    class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active"
                    aria-current="true"></button>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item">
                <img class="" src="{{asset('img/enid.png')}}" style="width: 100%">
                <div class="container">
                    <div class="carousel-caption text-start">

                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="" src="{{asset('img/enid.png')}}" style="width: 100%">

                <div class="container">
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>

            <div class="carousel-item active">
                <img class="" src="{{asset('img/enid.png')}}" style="width: 100%">

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



    <div class="" style="min-height: 40em">
        <h3 class="header-3">{{__('local.თქვენი სასურველი თემა')}}</h3>
        <br>





    </div>

@endsection
