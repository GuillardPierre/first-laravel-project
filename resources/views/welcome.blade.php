@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h2>Bienvenu sur le site de {{ $name }}</h2>

    <div style="display: flex; flex-direction: row; gap: 3px; padding: 2px;">
        @forelse ($articles as $article)
            @if ($loop->last)
                @break
            @endif
            <x-article :title="$article['title']" :content="Str::limit($article['content'], 30)" :id="$article['id']" />
        @empty
            <p>Aucun article pour le moment.</p>
        @endforelse
    </div>
@endsection