@extends('layouts.app')

@section('page-title', 'DC - Characters')

@section('content')
<main>


    <div id="card-container" class="container container-xl d-flex">
        <div id="label">Characters</div>
        @foreach ($comics as $comic)
        <div class="my-card">
            <div class="image-wrapper">
                <img src="{{$comic['thumb']}}">
            </div>
            <span class="card-title">{{ $comic['series'] }}</span>
        </div>
        @endforeach
        <button id="load-more"><a href="#">Load More</a></button>
    </div>
</main>
@endsection