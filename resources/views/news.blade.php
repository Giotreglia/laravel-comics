@extends('layouts.app')

@section('page-title', 'DC - News')

@section('content')
<main>


    <div id="card-container" class="container container-xl d-flex">
        <div id="label">News</div>
        <h1 class="text-light">Latest movies news</h1>
        <div class="container">
            <img src="https://cdn.marvel.com/content/1x/spider-verse_1.png" alt="news">
            <a class="text-light text-decoration-none m-2" href="https://www.marvel.com/articles/movies/spider-man-across-the-spider-verse-tickets-on-sale" target="_blank"><h3>‘Spider-Man: Across the Spider-Verse’ Tickets Are Now On Sale</h3></a>
        </div>
        <div class="container">
            <img src="https://cdn.marvel.com/content/1x/cosmo.png" alt="news">
            <a class="text-light text-decoration-none m-2" href="https://www.marvel.com/articles/movies/maria-bakalova-cosmo-good-dog-guardians-of-the-galaxy" target="_blank"><h3>Maria Bakalova on Playing the Galaxy’s Best Dog in ‘Guardians of the Galaxy Vol. 3’</h3></a>
        </div>
    </div>
</main>
@endsection