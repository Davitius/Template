@extends('layouts.Cp')


{{--@yield('layouts.ff_slider')--}}


@section('content')
    <style>
        .radio-list {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            margin: 15px 0 10px 0;
        }

        .radio-item [type="radio"] {
            display: none;
        }

        .radio-item + .radio-item {
            /*margin-top: 15px;*/
        }

        .radio-item label {
            display: block;
            padding: 20px 60px;
            background: #213e4b;
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            font-weight: 400;
            min-width: 200px;
            white-space: nowrap;
            position: relative;
            color: navajowhite;
        }

        .radio-item label:after,
        .radio-item label:before {
            content: "";
            position: absolute;
            border-radius: 50%;
        }

        .radio-item label:after {
            height: 20px;
            width: 20px;
            border: 2px solid #23b499;
            left: 20px;
            top: calc(50% - 12px);
        }

        .radio-item label:before {
            background: #23b499;
            height: 10px;
            width: 10px;
            left: 25px;
            top: calc(50% - 7px);
            transform: scale(5);
            transition: .4s ease-in-out 0s;
            opacity: 0;
            visibility: hidden;
        }

        .radio-item [type="radio"]:checked ~ label {
            border-color: #23b499;
        }

        .radio-item [type="radio"]:checked ~ label:before {
            opacity: 1;
            visibility: visible;
            transform: scale(1);
        }
    </style>

    <div class="" style="min-height: 40em">
        <h3 class="header-3">{{__('local.პოსტები')}}</h3>
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


        <div class="form-control mb-5 p-3">

            <div class="form-control mb-3 p-3">
                <button class="NewBtn btn btn-primary">+ ახალი</button>
                <div class="NewRadioBtns">
                    <form method="get" action="{{route('CpNewPost', [$language])}}">
                        @csrf
                        <div class="radio-list">
                            <?php $i = 0; ?>
                            @foreach($topics as $topic)
                                <?php $i++; ?>
                                @if($i > 1)
                                    <div class="radio-item">
                                        <input type="radio" name="radio" id="radio{{$i}}" value="{{$topic->type}}">
                                        <label for="radio{{$i}}">{{$topic->type}}</label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <button class="btn btn-primary" type="submit">{{__('local.დაიწყე')}}</button>
                    </form>
                </div>
            </div>


{{--            <div class="form-control mb-3 p-3">--}}


                {{--            Search             --}}
                <div class="col-md-5 mx-auto mb-3 mt-5">
                    <form action="{{route('CpPostsSearch', [$language])}}" method="get">
                        @csrf
                        <div class="btn-group">
                                <select class="form-control w-100" id="type" name="type">
                                    <option class="" value="">{{__('local.ტიპი')}}</option>
                                    @foreach($topics as $topic)
                                        <option class="" value="{{$topic->type}}">{{$topic->type}}</option>
                                    @endforeach
                                </select>
                                <input type="text" id="search" name="search" class="form-control" placeholder="{{__('local.ძიება')}}">
                                <button class="btn btn-outline-primary" type="submit"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>


{{--                <div class="row m-1 mt-3">--}}
                    <div class="col-md-12 mx-auto" style="overflow-x: scroll">
                        <table class="table table-bordered">
                            <tr>
                                <th class="w-25">{{__('local.თარიღი')}}</th>
                                <th class="w-25">{{__('local.ტიპი')}}</th>
                                {{--                                <th class="w-25">{{__('local.ფოტო')}}</th>--}}
                                <th class="w-25">{{__('local.სათაური')}}</th>
                                <th class="w-25">{{__('local.ქმედება')}}</th>
                            </tr>

                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->created_at}}</td>
                                    <td>{{$post->type}}</td>
                                    {{--                                <td><img class="CpUlImg" src="../../storage/{{$post->image}}"></td>--}}
                                    <?php $title = 'title_' . $language; ?>
                                    <td>{{$post->$title}}</td>
                                    <td>

                                        <a class=""
                                           href="{{route('CpPostDetails', [$language, $post->type, $post->id])}}"><i
                                                class="fa-solid fa-eye"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        {{--  Pagination Buttons  --}}
                        <div class="PaginBtn mt-3 d-flex justify-content-center">
{{--                            <label class="">{{ $posts->appends(['search' => request()->search])->links() }}</label>--}}
                            <label class="">{{ $posts->appends(['search' => request()->search, 'type' => $Type])->links() }}</label>
                        </div>
                    </div>
{{--                </div>--}}
{{--            </div>--}}
        </div>

        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVdkMPL-Jni-AN60M-aZEzzV3H-yzqJbs&callback=initMap&v=weekly"
            defer
        ></script>

        <script>
            $('.NewRadioBtns').slideToggle(1000);
            $('.NewBtn').text('+ {{__('local.ახალი')}}');
            $('.NewBtn').click(function () {
                $('.NewRadioBtns').slideToggle(1000);
                if ($('.NewBtn').text() == '- ახალი') {
                    $('.NewBtn').text('+ {{__('local.ახალი')}}');
                } else {
                    $('.NewBtn').text('- {{__('local.ახალი')}}');
                }
            });
        </script>
@endsection
