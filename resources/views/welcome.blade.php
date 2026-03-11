@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h2>Bienvenu sur le site de {{ $name }}</h2>

    <div>
        @forelse ($articles as $article)
            @if ($loop->last)
                @break
            @endif
            <a href="{{ route('article.details', ['id' => $article->id]) }}">
                <x-article :title="$article->title" :content="Str::limit($article->content, 30)" />
            </a>
        @empty
            <p>Aucun article pour le moment.</p>
        @endforelse
    </div>
@endsection