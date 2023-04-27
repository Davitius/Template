@extends('layouts.Cp')


@section('content')

    <div class="col-md-12 mx-auto">
        <div class="CpHID mb-4">
            <div class="col-md-5 text-start">
                <a href="#">
                    <img class="CpHI" src="{{asset('img/pazl.png')}}">
                </a>
            </div>
            <div class="col-md-7 text-start my-auto">
                <h2 class="Title">{{__('local.კონსტრუქტორი')}}</h2>
            </div>
        </div>
    </div>

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

    <div class="col-md-12 mx-auto">

        {{-- Header Logo Img --}}
        <div class="" style="border: 2px solid #6cb5d2; border-radius: 6px; margin-bottom: 3em; padding: 10px">

            <div class="col-md-12 text-start mb-3">
                <h4>{{__('local.ზედა კოლონტიტული')}}</h4>
                <br>
                <form method="post" action="{{route('HeaderType', $language)}}">
                    @csrf
                    @method('patch')
                <div class="d-flex justify-content-between">
                    <div class="col-md-6 mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="visible" id="flexRadioDefault1" value="block" @if($array[10]->visible == 'block') checked @endif>
                            <label class="form-check-label" for="flexRadioDefault1">
                                {{__('local.სტატიკური ფოტო')}}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="visible" id="flexRadioDefault2" value="none" @if($array[10]->visible != 'block') checked @endif>
                            <label class="form-check-label" for="flexRadioDefault2">
                                {{__('local.სლაიდერი')}}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <button class="btn btn-outline-success" type="submit">{{__('local.შეცვლა')}}</button>
                    </div>
                </div>
                </form>
            </div>

            <div class="" @if($array[10]->visible == 'block') style="display: block" @else style="display: none" @endif>
            <form method="post" action="{{route('HeaderUpdate', $language)}}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-control" style="">


                    <div class="col-md-12 mb-1">
                        <div class="">
                            <img class="CpHeaderLogoImg" src="../../storage/{{$array[10]->image}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input class="form-control" type="file" name="image" id="">
                        </div>
                        <div class="col-md-6 text-end">
                            <button class="btn btn-outline-success" type="submit">{{__('local.შეცვლა')}}</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>




<div class="" @if($array[10]->visible != 'block') style="display: block" @else style="display: none" @endif>
            <div class="row">
                @foreach($sliders as $slider)
                    <div class="col-md-4 mb-5">
                        <div class="form-control" style="">
                            <form method="post" action="{{route('SliderUpdate', [$language, $slider->id])}}"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="">
                                    <label class="">{{__('local.ფოტო')}} №{{($slider->id)-1}}</label>
                                    <img class="CpHeaderLogoImg" src="../../storage/{{$slider->image}}">
                                    <input class="form-control" type="file" name="image" id="">
                                </div>
                                <div class="col-md-12 mt-3 mb-2 text-end">
                                    <button class="btn btn-outline-success"
                                            type="submit">{{__('local.შეცვლა')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
</div>




        </div> {{-- / Header Logo Img --}}








        {{-- Useful links--}}
        <div class="" style="border: 2px solid #6cb5d2; border-radius: 6px; margin-bottom: 3em; padding: 10px">

            <div class="form-control mb-5" style="">
                <div class="col-md-12 text-start mb-4">
                    <h4>{{__('local.სასარგებლო ბმულები')}}</h4>
                </div>

                <form method="post" action="{{route('UsefullinksCreate', $language)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                <div class="col-md-9 mb-3">
                    <div class="">
                        <input class="form-control" type="file" name="image" id="">
                    </div>
                </div>
                    <div class="col-md-3 mb-3">
                        <div class="">
                            <select class="form-control" name="type" id="">
                                <option class="" value="1">{{__('local.კარუსელი')}} №1</option>
                                <option class="" value="2">{{__('local.კარუსელი')}} №2</option>
                            </select>
                        </div>
                    </div>
                    </div>

                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">GE</span>
                            <input type="text" class="form-control" placeholder="დასახელება" aria-label="Username"
                                   aria-describedby="basic-addon1" name="name_GE" id="">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">EN</span>
                            <input type="text" class="form-control" placeholder="Name" aria-label="Username"
                                   aria-describedby="basic-addon1" name="name_EN" id="">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">RU</span>
                            <input type="text" class="form-control" placeholder="Имя" aria-label="Username"
                                   aria-describedby="basic-addon1" name="name_RU" id="">
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">{{__('local.ბმული')}}</span>
                            <input type="text" class="form-control" placeholder="http://www.google.com" aria-label="Username"
                                   aria-describedby="basic-addon1" name="link" id="">
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-2 text-end">
                    <button class="btn btn-outline-success" type="submit">{{__('local.დაამატე')}}</button>
                </div>
                </form>
            </div>

            <div class="form-control" style="">
                <div class="col-md-12" style="overflow-x: scroll">
                    <table class="table table-bordered">
                        <tr>
                            <th class="w-25">{{__('local.კარუსელი')}}</th>
                            <th class="w-25">{{__('local.ფოტო')}}</th>
                            <th class="w-25">{{__('local.დასახელება')}}</th>
                            <th class="w-25">{{__('local.ბმული')}}</th>
                            <th class="w-25">{{__('local.ქმედება')}}</th>
                        </tr>

                        @foreach($ULImages as $ULImage)
                        <tr>
                            <td><label class="">{{__('local.კარუსელი')}} №{{$ULImage->type}}</label></td>
                            <td><img class="CpUlImg" src="../../storage/{{$ULImage->image}}"></td>
                            <td><label class="">
                                    @if($language == 'ge')
                                        {{$ULImage->name_GE}}
                                    @endif
                                </label></td>
                            <td><label class="">ლინკის სათაური</label></td>
                            <td>

                                <form action="{{route('UsefullinksDelete', [$language, $ULImage->id])}}" type="get">
                                    @csrf
                                <button class="form-control" onclick="return confirm('{{__('local.ნამდვილად გნებავს წაშლა?')}}')"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="red"
                                                                  class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <div class="paginateDiv">
                        {{$ULImages->links()}}
                    </div>

                </div>
            </div>
        </div> {{-- /Useful links --}}





        {{-- Footer --}}
        <div class="" style="border: 2px solid #6cb5d2; border-radius: 6px; padding: 10px">
            <div class="form-control mb-5" style="">
                <div class="col-md-12 text-start mb-4">
                    <h4>{{__('local.ქვედა კოლონტიტული')}}</h4>
                </div>

                <div class="row">
                    @foreach($array[12] as $footerWord)
                        <div class="col-md-4 mb-4">
                            <form method="post" action="{{route('FooterWordUpdate', [$language, $footerWord->id])}}">
                                @csrf
                                @method('patch')
                                <div class="form-control">
                                    <div class="col-md-12 text-start mb-2">
                                        <label class="">{{__('local.ბმული')}} №{{$footerWord->id-4}}</label>
                                    </div>
                                    <div class="">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">GE</span>
                                            <input type="text" class="form-control" placeholder=""
                                                   aria-label="Username" aria-describedby="basic-addon1" name="name_GE"
                                                   id="" value="{{$footerWord->name_GE}}">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">EN</span>
                                            <input type="text" class="form-control" placeholder=""
                                                   aria-label="Username" aria-describedby="basic-addon1" name="name_EN"
                                                   id="" value="{{$footerWord->name_EN}}">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">RU</span>
                                            <input type="text" class="form-control" placeholder=""
                                                   aria-label="Username" aria-describedby="basic-addon1" name="name_RU"
                                                   id="" value="{{$footerWord->name_RU}}">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text"
                                                  id="basic-addon1">{{__('local.ბმული')}}</span>
                                            <input type="text" class="form-control" placeholder=""
                                                   aria-label="Username" aria-describedby="basic-addon1" name="link"
                                                   id="" value="{{$footerWord->link}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="w-50">
                                            <label class="form-control">{{__('local.აქტიური')}}</label>
                                            {{--                                            <input class="ChangeButton" type="checkbox" value="block" name="visible" id=""--}}
                                            {{--                                                   style="margin-top: 15px" @if($footerWord->visible == 'block') checked @endif>--}}
                                            <input class="ChangeButton" type="checkbox" value="block" name="visible"
                                                   id=""
                                                   style="margin-top: 15px"
                                                   @if($footerWord->visible == 'block') checked @endif>
                                        </div>
                                        <div class="w-50 text-end mt-3">
                                            <button class="btn btn-outline-success"
                                                    type="submit">{{__('local.შეცვლა')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>


            </div>


            <div class="form-control">
                <div class="col-md-12 mb-4 d-flex justify-content-between">
                    <a href="https://fontawesome.com/search?o=r&m=free" target="_blank">
                        <h5>{{__('local.სოციალური ხატულები')}}</h5></a>
                    {{--                        <h4>{{__('local.სოციალური ხატულები')}}</h4>--}}

                </div>
                <div class="row">

                    @foreach($array[13] as $socialIcon)
                        <div class="col-md-3 mb-3">
                            <form method="post" action="{{route('FooterIconUpdate', [$language, $socialIcon->id])}}">
                                @csrf
                                @method('patch')
                                <div class="form-control">
                                    <div class="col-md-12 text-start mb-2">
                                        <label class="">{{__('local.ხატულა')}} №{{$socialIcon->id-10}}</label>
                                    </div>
                                    <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">
                <i class="{{$socialIcon->icon}}" style="color: {{$socialIcon->color}}; font-size: 20px; display: {{$socialIcon->visible}}"></i>
                                    </span>
                                        <input type="text" class="form-control" placeholder=""
                                               aria-label="Username" aria-describedby="basic-addon1" name="icon"
                                               id="" value="{{$socialIcon->icon}}">
                                    </div>
                                    <input class="form-control mb-2" name="link" id="" value="{{$socialIcon->link}}">
                                    <input class="form-control mb-2" name="color" id="" value="{{$socialIcon->color}}">
                                    <div class="row">
                                        <div class="w-50">
                                            <label class="form-control">{{__('local.აქტიური')}}</label>
                                            <input class="ChangeButton" type="checkbox" value="block" name="visible"
                                                   id=""
                                                   style="margin-top: 15px"
                                                   @if($socialIcon->visible == 'block') checked @endif>
                                        </div>
                                        <div class="w-50 text-end mt-3">
                                            <button class="btn btn-outline-success"
                                                    type="submit">{{__('local.შეცვლა')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>


        </div> {{-- / --}}


    </div> {{--  /col-md-12 mx-auto --}}










    {{--ენათა გარმონი--}}
    {{--                            <div class="form-control mb-3 p-3">--}}
    {{--                                <button class="GEBtn btn btn-primary">+ GE</button>--}}
    {{--                                <div class="GElangBtns">--}}

    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="form-control mb-3 p-3">--}}
    {{--                                <button class="ENBtn btn btn-primary">+ EN</button>--}}
    {{--                                <div class="ENlangBtns">--}}

    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="form-control mb-3 p-3">--}}
    {{--                                <button class="RUBtn btn btn-primary">+ RU</button>--}}
    {{--                                <div class="RUlangBtns">--}}
    {{--                                    <div class="row mb-3">--}}
    {{--                                        <div class="col-md-4 mb-3">--}}
    {{--                                            <div class="">--}}
    {{--                                                <input class="form-control" type="file" name="" id="">--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-md-3 mb-3">--}}
    {{--                                            <div class="">--}}
    {{--                                                <input class="form-control" name="" id="" placeholder="{{__('local.დასახელება')}}">--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-md-3 mb-3">--}}
    {{--                                            <div class="">--}}
    {{--                                                <input class="form-control" name="" id="" placeholder="{{__('local.ბმული')}}">--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <div class="col-md-2 mb-3 text-end">--}}
    {{--                                            <button class="btn btn-outline-success" type="submit">{{__('local.დაამატე')}}</button>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}










    {{--    <script>--}}
    {{--        $('.GElangBtns').slideToggle(1000);--}}
    {{--        $('.GEBtn').text('+ GE');--}}
    {{--        $('.GEBtn').click(function () {--}}
    {{--            $('.GElangBtns').slideToggle(1000);--}}
    {{--            if ($('.GEBtn').text() == '- GE') {--}}
    {{--                $('.GEBtn').text('+ GE');--}}
    {{--            } else {--}}
    {{--                $('.GEBtn').text('- GE');--}}
    {{--            }--}}
    {{--        });--}}
    {{--    </script>--}}
    {{--    <script>--}}
    {{--        $('.ENlangBtns').slideToggle(1000);--}}
    {{--        $('.ENBtn').text('+ EN');--}}
    {{--        $('.ENBtn').click(function () {--}}
    {{--            $('.ENlangBtns').slideToggle(1000);--}}
    {{--            if ($('.ENBtn').text() == '- EN') {--}}
    {{--                $('.ENBtn').text('+ EN');--}}
    {{--            } else {--}}
    {{--                $('.ENBtn').text('- EN');--}}
    {{--            }--}}
    {{--        });--}}
    {{--    </script>--}}
    {{--    <script>--}}
    {{--        $('.RUlangBtns').slideToggle(1000);--}}
    {{--        $('.RUBtn').text('+ RU');--}}
    {{--        $('.RUBtn').click(function () {--}}
    {{--            $('.RUlangBtns').slideToggle(1000);--}}
    {{--            if ($('.RUBtn').text() == '- RU') {--}}
    {{--                $('.RUBtn').text('+ RU');--}}
    {{--            } else {--}}
    {{--                $('.RUBtn').text('- RU');--}}
    {{--            }--}}
    {{--        });--}}
    {{--    </script>--}}

@endsection
