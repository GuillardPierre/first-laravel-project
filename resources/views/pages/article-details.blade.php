@extends('layouts.app')
@section('title')
    Article {{ $title }}
@endsection
@section('content')
    <x-article :title="$title" :content="$content" />
@endsection