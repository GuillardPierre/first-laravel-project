@extends('layouts.app')
@section('title')
    Article {{ $id }}
@endsection
@section('content')
    <h2>Article portant l'id {{ $id }}</h2>
@endsection

