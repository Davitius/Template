@extends('layouts.main')


@yield('layouts.ff_slider')


@section('content')




    <div class="" style="min-height: 40em">
        <h3 class="header-3">{{__('local.კონტაქტი')}}</h3>
        <br>

        <div class="contact">
            <div class="addressDiv">
                <div class="address">
                    <div class="addressTitle"><label class="">{{__('local.მისამართი')}}</label></div>
                    <?Php
                    $Address = 'address_' . strtoupper($language);
                    $Name = 'name_' . strtoupper($language);
//                    dd($address);
                    ?>
                    <div class="addressBody"><label class="">{{$address->$Address}}</label></div>
                </div>
                <div class="address">
                    <div class="addressTitle"><label class="">{{__('local.ტელეფონი')}}</label></div>
                    <div class="addressBody"><label class="">{{$address->phone}}</label></div>
                </div>
                <div class="address">
                    <div class="addressTitle"><label class="">{{__('local.ელ. ფოსტა')}}</label></div>
                    <div class="addressBody"><label class="">{{$address->email}}</label></div>
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
                zoom: 15,
            };
            var myMap = new google.maps.Map(document.getElementById("map"), opt);
            var marker = new google.maps.Marker({
                position: pos,
                map: myMap,
                title: "დასახელება",
                // icon: '',
            });
            var info = new google.maps.InfoWindow({
                content: '<h3>{{$location->$Name}}</h3>'
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
