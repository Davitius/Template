@extends('layouts.Cp')


{{--@yield('layouts.ff_slider')--}}


@section('content')


    <div class="" style="min-height: 40em">
        <h3 class="header-3">{{__('local.კონტაქტი')}}</h3>
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


        <div class=""
             style="border: 2px solid #6cb5d2; border-radius: 6px; margin-bottom: 3em; padding:  12px 12px 0px 12px; background: #f5f1bd">
            <div class="row">
                {{--        Address        --}}
                <div class="col-md-6 mb-3">
                    <form method="post" action="{{route('ContactUpdate', [$language])}}">
                        @csrf
                        @method('patch')
                        <div class="form-control">
                            <div class="col-md-12 text-start mb-3">
                                <label class="fw-bold">{{__('local.მისამართი')}}</label>
                            </div>


                            <div class="">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">GE</span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1" name="address_GE"
                                           id="" value="{{$address->address_GE}}">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">EN</span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1" name="address_EN"
                                           id="" value="{{$address->address_EN}}">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RU</span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1" name="address_RU"
                                           id="" value="{{$address->address_RU}}">
                                </div>
                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="">{{__('local.ტელეფონი')}}</span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1" name="phone"
                                           id="" value="{{$address->phone}}">
                                </div>

                                <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="">{{__('local.ელ. ფოსტა')}}</span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1" name="email"
                                           id="" value="{{$address->email}}">
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
                    </form>
                </div>


                <div class="col-md-6 mb-3">
                    <form method="post" action="{{route('LocationUpdate', [$language])}}">
                        @csrf
                        @method('patch')
                        <div class="form-control">
                            <div class="col-md-12 text-start mb-3">
                                <label class="fw-bold">{{__('local.ლოკაცია')}}</label>
                            </div>

                            <div class="">
                                <label class="form-control">{{__('local.დასახელება')}}</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">GE</span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1" name="name_GE"
                                           id="" value="{{$location->name_GE}}">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">EN</span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1" name="name_EN"
                                           id="" value="{{$location->name_EN}}">
                                </div>
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1">RU</span>
                                    <input type="text" class="form-control" placeholder=""
                                           aria-label="Username" aria-describedby="basic-addon1" name="name_RU"
                                           id="" value="{{$location->name_RU}}">
                                </div>
                                <label class="form-control">{{__('local.კოორდინატები')}}</label>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="">{{__('local.გრძედი')}}</span>
                                            <input type="text" class="form-control" placeholder=""
                                                   aria-label="Username" aria-describedby="basic-addon1" name="latitude"
                                                   id="" value="{{$location->latitude}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"
                                              style="">{{__('local.განედი')}}</span>
                                            <input type="text" class="form-control" placeholder=""
                                                   aria-label="Username" aria-describedby="basic-addon1"
                                                   name="longitude"
                                                   id="" value="{{$location->longitude}}">
                                        </div>
                                    </div>
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
                    </form>
                </div>


            </div>
        </div>


        <h3 class="header-3">{{__('local.ლოკაცია')}}</h3>
        <br>

        <div class="" id="map">

        </div>


    </div>
    <script>
        let map;

        function initMap() {
            var pos = {lat: {{$location->latitude}}, lng: {{$location->longitude}} };
            var opt = {
                center: pos,
                zoom: 14,
            };
            var myMap = new google.maps.Map(document.getElementById("map"), opt);
            var marker = new google.maps.Marker({
                position: pos,
                map: myMap,
                title: "დასახელება",
                // icon: '',
            });
            var info = new google.maps.InfoWindow({

                @if($language == 'ge') content: '<h3>{{$location->name_GE}}</h3>' @endif
                    @if($language == 'en') content: '<h3>{{$location->name_EN}}</h3>' @endif
                    @if($language == 'ru') content: '<h3>{{$location->name_RU}}</h3>' @endif

                // content: '<h3>დასახელება</h3>'
            });
            marker.addListener("click", function () {
                info.open(myMap, marker);
            });
        }

        window.initMap = initMap;
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVdkMPL-Jni-AN60M-aZEzzV3H-yzqJbs&callback=initMap&v=weekly"
        defer
    ></script>
@endsection
