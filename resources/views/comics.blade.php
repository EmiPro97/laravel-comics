@extends('layouts.main')

@section('content')
    <div class="container cards flex flex-wrap">
        @foreach ($cards as $card)
            <div class="card">
                <a href="/"><img src="{{ $card['image'] }}" alt="{{$card['title']}}"></a>
                <a href="/">
                    <h5>{{$card['title']}}</h5>
                </a>
            </div>
        @endforeach
    </div>
@endsection
