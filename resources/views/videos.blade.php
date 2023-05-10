@extends('layouts.app')

@section('page-title', 'DC - Videos')

@section('content')
<main>

    <div id="card-container" class="container container-xl d-flex">
        <div id="label">Videos</div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/iuk77TjvfmE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/QdpxoFcdORI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</main>
@endsection