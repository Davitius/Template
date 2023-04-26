@extends('layouts.Cp')


@section('content')

    <div class="col-md-12 mx-auto">
        <div class="CpHID mb-4">
            <div class="col-md-5 text-start">
                <a href="https://www.w3schools.com/colors/colors_picker.asp" target="_blank">
                    <img class="CpHI" title="აირჩიე ფერი." src="{{asset('img/palette.png')}}">
                </a>
            </div>
            <div class="col-md-7 text-start my-auto">
                <h2 class="Title">{{__('local.პალიტრა')}}</h2>
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

        <div class=""
             style="border: 2px solid #6cb5d2; border-radius: 6px; margin-bottom: 3em; padding: 10px; background: #f5f1bd">
            <div class="row">

{{--        Background        --}}
                <div class="col-md-3 mb-4">
                    <form method="post" action="{{route('BgUpdate', $language)}}">
                        @csrf
                        @method('patch')
                        <div class="form-control" style="min-height: 24em">
                            <div class="col-md-12 text-start mb-2">
                                <label class="fw-bold">{{__('local.ფონი')}}</label>
                            </div>
                            <div class="" style="display: flex; justify-content: space-between; flex-direction: column;
                            min-height: 21em">
                            <div class="">
                                <label class="form-control">{{__('local.ფერი')}}</label>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background: {{$array[0]['color']}}"></span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1" name="color"
                                           id="" value="{{$array[0]['color']}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="w-50">

                                </div>
                                <div class="w-50 text-end mt-3 mb-1">
                                    <button class="btn btn-outline-success"
                                            type="submit">{{__('local.შეცვლა')}}</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>

{{--        Menu        --}}
                <div class="col-md-3 mb-4">
                    <form method="post" action="{{route('MenuUpdate', $language)}}">
                        @csrf
                        @method('patch')
                        <div class="form-control">
                            <div class="col-md-12 text-start mb-2">
                                <label class="fw-bold">{{__('local.მენიუ')}}</label>
                            </div>
                            <div class="">
                            <div class="">
                                <label class="form-control">{{__('local.ფონი')}}</label>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background: {{$array[7]['background']}}"></span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1" name="backcolor"
                                           id="" value="{{$array[7]['background']}}">
                                </div>
                                <label class="form-control">{{__('local.ტექსტის ფერი')}}</label>
                                <div class="input-group mb-3">
                                                                        <span class="input-group-text" id="basic-addon1"
                                                                              style="background: {{$array[7]['color']}}"></span>
                                    <input type="text" class="form-control" placeholder="დასახელება"
                                           aria-label="Username" aria-describedby="basic-addon1" name="color" id=""
                                           value="{{$array[7]['color']}}">
                                </div>
                                <label class="form-control">{{__('local.ტექსტი ჰოვერით')}}</label>
                                <div class="input-group mb-3">
                                                                        <span class="input-group-text" id="basic-addon1"
                                                                              style="background: {{$array[7]['hovercolor']}}"></span>
                                    <input type="text" class="form-control" placeholder="დასახელება"
                                           aria-label="Username" aria-describedby="basic-addon1" name="hovercolor" id=""
                                           value="{{$array[7]['hovercolor']}}">
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="w-50">

                                </div>
                                <div class="w-50 text-end mt-3 mb-2">
                                    <button class="btn btn-outline-success"
                                            type="submit">{{__('local.შეცვლა')}}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


{{--        Carousel 1        --}}
                <div class="col-md-3 mb-4">
                    <form method="post" action="{{route('UsefullinksUpdate', [$language, 1])}}">
                        @csrf
                        @method('patch')
                        <div class="form-control">
                            <div class="col-md-12 text-start mb-2">
                                <label class="fw-bold">{{__('local.კარუსელი')}} №1</label>
                            </div>

                            <div class="">
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">GE</span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1" name="title_GE"
                                           id="" value="{{$array[8]['title_GE']}}">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">EN</span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1" name="title_EN"
                                           id="" value="{{$array[8]['title_EN']}}">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RU</span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1" name="title_RU"
                                           id="" value="{{$array[8]['title_RU']}}">
                                </div>
                                <label class="form-control">{{__('local.ფონი')}}</label>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background: {{$array[8]['background']}}"></span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1" name="backcolor"
                                           id="" value="{{$array[8]['background']}}">
                                </div>

                                <label class="form-control">{{__('local.სათაურის ფერი')}}</label>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background: {{$array[8]['color']}}"></span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1" name="color"
                                           id="" value="{{$array[8]['color']}}">
                                </div>

                                <label class="form-control">{{__('local.სათაურის ზომა')}}</label>
                                <div class="input-group mb-3">
                                    <select class="form-control" name="size" id="">
                                        <option class="" value="{{$array[8]['size']}}">{{$array[8]['size']}}</option>
                                        <option class="" value="10px">10px</option>
                                        <option class="" value="12px">12px</option>
                                        <option class="" value="14px">14px</option>
                                        <option class="" value="16px">16px</option>
                                        <option class="" value="18px">18px</option>
                                        <option class="" value="22px">22px</option>
                                        <option class="" value="26px">26px</option>
                                        <option class="" value="30px">30px</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="w-50">
                                    <label class="form-control">{{__('local.აქტიური')}}</label>
                                    <input class="ChangeButton" type="checkbox" value="block" name="visible" id=""
                                           style="margin-top: 15px" @if($array[8]['visible'] == 'block') checked @endif>
                                </div>
                                <div class="w-50 text-end mt-3">
                                    <button class="btn btn-outline-success"
                                            type="submit">{{__('local.შეცვლა')}}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


                {{--        Carousel 2        --}}
                <div class="col-md-3 mb-4">
                    <form method="post" action="{{route('UsefullinksUpdate', [$language, 2])}}">
                        @csrf
                        @method('patch')
                        <div class="form-control">
                            <div class="col-md-12 text-start mb-2">
                                <label class="fw-bold">{{__('local.კარუსელი')}} №2</label>
                            </div>

                                <div class="">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">GE</span>
                                        <input type="text" class="form-control" placeholder=""
                                               aria-label="Username" aria-describedby="basic-addon1" name="title_GE"
                                               id="" value="{{$array[9]['title_GE']}}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">EN</span>
                                        <input type="text" class="form-control" placeholder=""
                                               aria-label="Username" aria-describedby="basic-addon1" name="title_EN"
                                               id="" value="{{$array[9]['title_EN']}}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">RU</span>
                                        <input type="text" class="form-control" placeholder=""
                                               aria-label="Username" aria-describedby="basic-addon1" name="title_RU"
                                               id="" value="{{$array[9]['title_RU']}}">
                                    </div>
                                    <label class="form-control">{{__('local.ფონი')}}</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background: {{$array[9]['background']}}"></span>
                                        <input type="text" class="form-control" placeholder=""
                                               aria-label="Username" aria-describedby="basic-addon1" name="backcolor"
                                               id="" value="{{$array[9]['background']}}">
                                    </div>

                                    <label class="form-control">{{__('local.სათაურის ფერი')}}</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background: {{$array[9]['color']}}"></span>
                                        <input type="text" class="form-control" placeholder=""
                                               aria-label="Username" aria-describedby="basic-addon1" name="color"
                                               id="" value="{{$array[9]['color']}}">
                                    </div>

                                    <label class="form-control">{{__('local.სათაურის ზომა')}}</label>
                                    <div class="input-group mb-3">
                                        <select class="form-control" name="size" id="">
                                            <option class="" value="{{$array[9]['size']}}">{{$array[9]['size']}}</option>
                                            <option class="" value="10px">10px</option>
                                            <option class="" value="12px">12px</option>
                                            <option class="" value="14px">14px</option>
                                            <option class="" value="16px">16px</option>
                                            <option class="" value="18px">18px</option>
                                            <option class="" value="22px">22px</option>
                                            <option class="" value="26px">26px</option>
                                            <option class="" value="30px">30px</option>
                                        </select>
                                    </div>
                                </div>

                            <div class="row">
                                <div class="w-50">
                                    <label class="form-control">{{__('local.აქტიური')}}</label>
                                    <input class="ChangeButton" type="checkbox" value="block" name="visible" id=""
                                           style="margin-top: 15px" @if($array[9]['visible'] == 'block') checked @endif>
                                </div>
                                <div class="w-50 text-end mt-3">
                                    <button class="btn btn-outline-success"
                                            type="submit">{{__('local.შეცვლა')}}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        {{-- Blok s--}}
        <div class=""
             style="border: 2px solid #6cb5d2; border-radius: 6px; margin-bottom: 3em; padding: 10px; background: #f5f1bd">
            <div class="row">
                @for($i = 1; $i < 7; $i++)
                    <?php
                    $block = 'block' . $i;
                        $blockBG = $array[$i]['background'];
                        $blockColor = $array[$i]['color'];
                        $blockSize = $array[$i]['size'];
                        $titlePosition = $array[$i]['position'];
                        $blockVisible = $array[$i]['visible'];
                    ?>
                    <div class="col-md-4 mb-4">
                        <form method="post" action="{{route('BlockUpdate', [$language, $i])}}">
                            @csrf
                            @method('patch')
                            <div class="form-control">
                                <div class="col-md-12 text-start mb-2">
                                    <label class="fw-bold">{{__('local.ბლოკი')}} №{{$i}}</label>
                                </div>
                                <div class="">
                                    <label class="form-control">{{__('local.ბლოკის ფონი')}}</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background: {{$blockBG}}"></span>
                                        <input type="text" class="form-control" placeholder="დასახელება"
                                               aria-label="Username" aria-describedby="basic-addon1" name="backcolor"
                                               id="" value="{{$blockBG}}">
                                    </div>
                                    <label class="form-control">{{__('local.სათაურის ფერი')}}</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="background: {{$blockColor}}"></span>
                                        <input type="text" class="form-control" placeholder="დასახელება"
                                               aria-label="Username" aria-describedby="basic-addon1" name="color" id=""
                                               value="{{$blockColor}}">
                                    </div>
                                    <label class="form-control">{{__('local.სათაურის ზომა')}}</label>
                                    <div class="input-group mb-3">
                                        <select class="form-control" name="size" id="">
                                            <option class="" value="{{$blockSize}}">{{$blockSize}}</option>
                                            <option class="" value="10px">10px</option>
                                            <option class="" value="12px">12px</option>
                                            <option class="" value="14px">14px</option>
                                            <option class="" value="16px">16px</option>
                                            <option class="" value="18px">18px</option>
                                            <option class="" value="22px">22px</option>
                                            <option class="" value="26px">26px</option>
                                            <option class="" value="30px">30px</option>
                                        </select>
                                    </div>
                                    <label class="form-control">{{__('local.სათაურის მდებარეობა')}}</label>
                                    <div class="input-group mb-3">
                                        <select class="form-control" name="position" id="">
                                            <option class="text-{{$titlePosition}}"
                                                    value="{{$titlePosition}}">
                                                @if($titlePosition == 'start'){{__('local.მარცხნივ')}}
                                                @elseif($titlePosition == 'center'){{__('local.ცენტრში')}}
                                                @elseif($titlePosition == 'end'){{__('local.მარჯვნივ')}}
                                                @endif</option>
                                            <option class="" value="start">{{__('local.მარცხნივ')}}</option>
                                            <option class="" value="center">{{__('local.ცენტრში')}}</option>
                                            <option class="" value="end">{{__('local.მარჯვნივ')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="w-50">
                                        <label class="form-control">{{__('local.აქტიური')}}</label>
                                        <input class="ChangeButton" type="checkbox" value="block" name="visible" id=""
                                               style="margin-top: 15px" @if($blockVisible == 'block') checked @endif>
                                    </div>
                                    <div class="w-50 text-end mt-3">
                                        <button class="btn btn-outline-success"
                                                type="submit">{{__('local.შეცვლა')}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @endfor
            </div>
        </div> {{-- /Bloks --}}


    </div> {{--  /col-md-12 mx-auto --}}


@endsection
