@extends('layouts.app')
@section('title')
    Article {{ $article->title }}
@endsection
@section('content')
    <x-article :title="$article->title" :content="$article->content" />
@endsection