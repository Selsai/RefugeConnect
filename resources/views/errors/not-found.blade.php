@extends('layouts.app')

@section('title', 'Page non trouvée')

@section('content')
    <section class="page-block">
        <h2 class="page-title">Page non trouvée.</h2>

        <p>La page que vous cherchez n’existe pas.</p>

        <p class="back-link">
            <a href="{{ route('home') }}">Retour à l’accueil</a>
        </p>
    </section>
@endsection
