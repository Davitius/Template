@extends('layouts.Cp')

@section('content')


    <div class="" style="min-height: 40em">
        <div class="" style="display: flex; flex-wrap: nowrap; justify-content: space-between">
            <div class="">
                <a href="{{route('CpPosts', $language)}}" class="btn btn-outline-primary"><i
                        class="fa-solid fa-left-long"></i></a>
            </div>
            <div class="">
                <h3 class="header-3">
                    <?php $title = 'title_' . $language ?>
                    {{$post->$title}}
                </h3>
            </div>
            <div class="">
                @if(($type != 'Block №1') && ($type != 'Block №2') && ($type != 'Block №3') &&
($type != 'Block №4') && ($type != 'Block №5') && ($type != 'Block №6'))
                    <form method="get" action="{{route('CpDeletePost', [$language, $post->id])}}">
                        <button class="btn btn-outline-danger"
                                onclick="return confirm('{{__('local.ნამდვილად გნებავს წაშლა?')}}')"
                                type="submit"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                @endif
            </div>
        </div>
        <br>
        <div class="col-md-8 mb-3 mx-auto">
            @if($errors->any())
                <div class="alert alert-danger" role="alert" id="ErrorsDiv">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>


        {{--        ფოტო        --}}
        <form method="post" action="{{route('CpUpdatePost', [$language, $type, $post->id])}}"
              enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class=""
                 style="border: 2px solid #6cb5d2; border-radius: 6px; margin-bottom: 3em; padding:  12px 12px 0px 12px; background: #f5f1bd">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="form-control">
                            @if($post->image != '')
                                <img src="../../../../storage/{{$post->image}}" class="w-50 m-1">

                            @else
                                <img src="{{asset('img/unnamed.png')}}" class="w-25 m-1">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-8 mb-3">
                        <div class="form-control">
                            <div class="col-md-12 text-start mb-3">
                                <h4 class="header-3">{{__('local.ფოტო')}}</h4>
                            </div>
                            <div class="">
                                <input class="form-control mb-3" type="file" name="image" id="">
                            </div>
                        </div>
                    </div>
                </div>


                {{--      სათაური      --}}
                <div class="col-md-12 mb-3">
                    <div class="form-control">
                        <div class="col-md-12 text-start mb-3">
                            <h4 class="header-3">{{__('local.სათაური')}}</h4>
                        </div>
                        <div class="">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">GE</span>
                                <input type="text" class="form-control" placeholder=""
                                       aria-label="Username" aria-describedby="basic-addon1" name="title_ge"
                                       id="" value="{{$post->title_ge}}">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">EN</span>
                                <input type="text" class="form-control" placeholder=""
                                       aria-label="Username" aria-describedby="basic-addon1" name="title_en"
                                       id="" value="{{$post->title_en}}">
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="basic-addon1">RU</span>
                                <input type="text" class="form-control" placeholder=""
                                       aria-label="Username" aria-describedby="basic-addon1" name="title_ru"
                                       id="" value="{{$post->title_ru}}">
                            </div>
                            <input class="form-control" type="text" name="type" id="" value="{{$type}}" hidden>
                        </div>
                    </div>
                </div>


                {{--      ტექსტი      --}}
                <div class="form-control mb-3">
                    <div class="col-md-12 text-start mb-3">
                        <h4 class="header-3">{{__('local.ტექსტი')}}</h4>
                    </div>
                    <div class="form-control mb-3 p-3 text-lg-start">
                        <a class="NewBtnGE btn btn-outline-primary mb-3">+ GE</a>
                        <div class="GE_Div">
                            <textarea class="form-control" rows="10" name="text_ge" id="">{{$post->text_ge}}</textarea>
                        </div>
                    </div>
                    <div class="form-control mb-3 p-3 text-lg-start">
                        <a class="NewBtnEN btn btn-outline-primary mb-3">+ GE</a>
                        <div class="EN_Div">
                            <textarea class="form-control" rows="10" name="text_en" id="">{{$post->text_en}}</textarea>
                        </div>
                    </div>
                    <div class="form-control mb-3 p-3 text-lg-start">
                        <a class="NewBtnRU btn btn-outline-primary mb-3">+ GE</a>
                        <div class="RU_Div">
                            <textarea class="form-control" rows="10" name="text_ru" id="">{{$post->text_ru}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="w-50">

                        </div>
                        <div class="w-50 text-end mt-3 mb-3">
                            <button class="btn btn-outline-success"
                                    type="submit">{{__('local.შეცვლა')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVdkMPL-Jni-AN60M-aZEzzV3H-yzqJbs&callback=initMap&v=weekly"
        defer
    ></script>

    <script>
        $('.GE_Div').slideToggle(1000);
        $('.NewBtnGE').text('+ GE');
        $('.NewBtnGE').click(function () {
            $('.GE_Div').slideToggle(1000);
            if ($('.NewBtnGE').text() == '- GE') {
                $('.NewBtnGE').text('+ GE');
            } else {
                $('.NewBtnGE').text('- GE');
            }
        });

        $('.EN_Div').slideToggle(1000);
        $('.NewBtnEN').text('+ EN');
        $('.NewBtnEN').click(function () {
            $('.EN_Div').slideToggle(1000);
            if ($('.NewBtnEN').text() == '- EN') {
                $('.NewBtnEN').text('+ EN');
            } else {
                $('.NewBtnEN').text('- EN');
            }
        });

        $('.RU_Div').slideToggle(1000);
        $('.NewBtnRU').text('+ RU');
        $('.NewBtnRU').click(function () {
            $('.RU_Div').slideToggle(1000);
            if ($('.NewBtnRU').text() == '- RU') {
                $('.NewBtnRU').text('+ RU');
            } else {
                $('.NewBtnRU').text('- RU');
            }
        });
    </script>
@endsection
