@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h2>Bienvenu sur le site de {{ $name }}</h2>

    @forelse ($articles as $article) 
    @if ($loop->last)
    @break
    @endif
    <x-article :title="$article['title']" :content="Str::limit($article['content'], 30)" />
    @empty
        <p>Aucun article pour le moment.</p>
    @endforelse
@endsection


