@extends('layouts.app')
@section('title')
    Article {{ $title }}
@endsection
@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $content }}</p>
@endsection

