@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h2>Bienvenu sur le site de {{ $name }}</h2>
    <x-article title="L’IA soigne mieux" content="L’intelligence artificielle aide les médecins à diagnostiquer plus vite."/>
    <x-article title="Villes verte" content="Les métropoles deviennent plus écologiques et durables."/>
    <x-article title="Télétravail" content="Plus de liberté, mais aussi plus de solitude."/>
@endsection


