@extends('layouts.app')

@section('title', 'Nos animaux')

@section('content')
    <section class="page-block">
        <h2 class="page-title">Nos animaux</h2>

        <div class="page-top-actions">
            <a href="{{ route('animals.create-static') }}">Ajouter un animal</a>
        </div>

        @forelse ($animals as $animal)
            @if ($loop->first)
                <div class="animals-grid">
            @endif

            <x-animal-card :animal="$animal" />

            @if ($loop->last)
                </div>
            @endif
        @empty
            <p>Aucun animal pour l’instant.</p>
        @endforelse
    </section>
@endsection
