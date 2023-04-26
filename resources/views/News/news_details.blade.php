@extends('layouts.main')

@section('content')

    <div class="" style="min-height: 40em">
        <div class="story" style="max-height: 105em; overflow-y: scroll">
            <div class="row mb-3">
                <?php $title = 'title_' . $language; ?>
                <div class="col-md-3 mb-2">
                    <a href="{{route('News', $language)}}" class="btn btn-outline-primary">
                        <i class="fa-solid fa-left-long"></i>
                    </a>
                </div>
                <div class="textFrameTitle col-md-6"><label class="TFTT">{{$new->$title}}</label></div>
                <div class="textFrameDate col-md-3"><label class="TFTDate">14/03/2023</label></div>
            </div>

            @if($new->image != '')
                <div class="newsImageDiv mb-3">
                    <img class="newsImage" src="../../../storage/{{$new->image}}">
                </div>
            @endif
            <div class="storyBody">

                <label class="">
                    <?php $text = 'text_' . $language; ?>
                    {!! $new->$text !!}
                </label>
            </div>
        </div>

    </div>

@endsection
