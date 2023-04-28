@extends('layouts.Cp')


@section('content')

    <div class="col-md-8 mx-auto">
        <div class="form-control mb-3">
            <h2 class="Title text-center"><label class="">{{__('local.მართვის პანელი')}}</label></h2>
        </div>
    </div>

    <div class="col-md-8 mx-auto text-center">
        <div class="form-control mb-3" style="min-height: 50em">
            <div class="col-md-6 mx-auto pt-5">
                <img class="" src="{{asset('/img/Admin.png')}}">
            </div>

            <h2 class="text-center"><label class="">{{__('local.მოგესალმები')}} {{Auth::user()->name}}</label></h2>
{{--            <label class="">თქვენ შესული ხართ სისტემაში როგორც:</label>--}}
{{--            <h6 class="text-center"><label class="">"წვდომის დონე"</label></h6>--}}

            <label class="">{{$ip}}</label>

        </div>
    </div>


@endsection
