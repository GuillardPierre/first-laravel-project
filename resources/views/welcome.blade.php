@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h2>Bienvenu sur le site de {{ $name }}</h2>

    @forelse ($articles as $article)
        <x-article :title="$article['title']" :content="$article['content']" />
    @empty
        <p>Aucun article pour le moment.</p>
    @endforelse
@endsection


