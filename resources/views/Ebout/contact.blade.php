@extends('layouts.main')


@yield('layouts.ff_slider')


@section('content')




    <div class="" style="min-height: 40em">
        <h3 class="header-3">კონტაქტი</h3>
        <br>

        <div class="contact">
            <div class="addressDiv">
                <div class="address">
                    <div class="addressTitle"><label class="">მისამართი</label></div>
                    <div class="addressBody"><label class="">ქ. თბილისი, ბლიყვირის ქ. №3</label></div>
                </div>
                <div class="address">
                    <div class="addressTitle"><label class="">ტელეფონი</label></div>
                    <div class="addressBody"><label class="">577xxxxxx</label></div>
                </div>
                <div class="address">
                    <div class="addressTitle"><label class="">ელ. ფოსტა</label></div>
                    <div class="addressBody"><label class="">davitiusrealm@gmail.com</label></div>
                </div>
            </div>
        </div>


        <h3 class="header-3">ლოკაცია</h3>
        <br>

        <div class="" id="map">

        </div>




    </div>
    <script>
        let map;

        function initMap() {
            var pos = {lat: 41.73966, lng: 44.80016 };
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
                content: '<h3>დასახელება</h3>'
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
