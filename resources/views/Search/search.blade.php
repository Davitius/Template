@extends('layouts.main')

@section('content')

    <div class="" style="min-height: 40em">
        <h3 class="header-3">{{__('local.ძებნის რეზულტატი')}}</h3>
        <br>
        @if(count($news) == 0)
            <h4 class="bg-warning p-3">{{__('local.არაფერი მოიძებნა.')}}</h4>
        @endif
        @foreach($news as $new)
            <div class="textFrame">
                <div class="row mb-3">
                    <?php $title = 'title_' . $language; ?>
                    <div class="textFrameTitle col-md-9"><label class="TFTT">{{$new->$title}}</label></div>
                    <div class="textFrameDate col-md-3"><label class="TFTDate">{{$new->created_at}}</label></div>
                </div>
                <div class="textFrameBody">
                    <div class="row">
                        <div class="TFID col-md-4">
                            @if($new->image != '')
                                <img class="TFI" src="../../storage/{{$new->image}}">
                            @else
                                <img class="TFI" src="{{asset('img/unnamed.png')}}">
                            @endif
                        </div>
                        <div class="TFTD col-md-8">
                            <div class="TFTDD" style="height: 9em; overflow-y: hidden">
                                <?php $text = 'text_' . $language; ?>
                                {!! $new->$text !!}
                            </div>
                            <div class="arrow-body">
                                <div class=""><a class="seeMoreArr"
                                                 href="{{route('NewsDetails', [$language, $new->id])}}">{{__('local.სრულად')}}</a>
                                </div>
                                <div class="arrow"></div>
                                <div class="arrow"></div>
                                <div class="arrow"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{--  Pagination Buttons  --}}
        <div class="PaginBtn mt-3 d-flex justify-content-center">
            <label class="">{{ $news->appends(['search' => $Search])->links() }}</label>
        </div>
    </div>

@endsection
