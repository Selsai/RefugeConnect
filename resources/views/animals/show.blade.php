@extends('layouts.app')

@section('title', $animal->name)

@section('content')
    <section class="page-block">
        <h2 class="page-title">{{ $animal->name }}</h2>

        <div class="animal-detail">
            <div class="animal-detail-image">
                <img src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}">
            </div>

            <div class="animal-detail-info">
                <p><strong>Espèce :</strong> {{ $animal->species }}</p>
                <p><strong>Âge :</strong> {{ $animal->age }} ans</p>
                <p>{{ $animal->description }}</p>
            </div>
        </div>

        <p class="back-link">
            <a href="{{ route('home') }}">Retour à la liste</a>
        </p>
    </section>
@endsection
