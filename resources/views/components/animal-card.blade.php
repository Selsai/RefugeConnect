<article class="animal-card">
    <a href="{{ route('animals.show', $animal->id) }}" class="animal-image-link">
        <img src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}">
    </a>

    <h3 class="animal-name">{{ $animal->name }}</h3>
    <p class="animal-species">Espèce : {{ $animal->species }}</p>
    <p class="animal-age">Âge : {{ $animal->age }} ans</p>
    <p class="animal-description">{{ Str::limit($animal->description, 80, '...') }}</p>

    <div class="animal-actions">
        <a href="{{ route('animals.update-static', $animal->id) }}">Modifier</a>
        <a href="{{ route('animals.delete', $animal->id) }}">Supprimer</a>
    </div>
</article>
