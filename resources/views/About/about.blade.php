@extends('layouts.main')

@section('content')

    <div class="" style="min-height: 40em">
        <?php
        $title = 'title_' . $language;
        $text = 'text_' . $language;
        ?>
        @foreach($Ebout as $result)

            <div class="story">
                <div class="row mb-3">
                    <div class="textFrameTitle col-md-9"><label class="TFTT">{{$result->$title}}</label></div>
                    <div class="textFrameDate col-md-3"><label class="TFTDate">{{$result->created_at}}</label></div>
                </div>
                @if($result->image != '')
                    <div class="newsImageDiv mb-3">
                        <img class="newsImage" src="../../../storage/{{$result->image}}">
                    </div>
                @endif
                <div class="storyBody">
                    {!! $result->$text !!}
                </div>
            </div>
        @endforeach

    </div>

@endsection
