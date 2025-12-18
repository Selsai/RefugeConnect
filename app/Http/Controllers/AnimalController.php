<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // Fiche d’un animal
    public function show($id)
    {
        $animal = Animal::findOrFail($id);

        return view('animals.show', [
            'animal' => $animal,
        ]);
    }

    // /animaux/ajouter → ajoute "Coquillette", puis retour accueil
    public function createStatic()
    {
        Animal::create([
            'name' => 'Coquillette',
            'species' => 'Chien',
            'age' => 3,
            'description' => 'Une chienne joyeuse et affectueuse qui adore la compagnie.',
            'photo' => 'img/animals/coquillette.jpg', // adapte au vrai fichier
        ]);

        return redirect()->route('home');
    }

    // /animaux/modifier/{id} → ajoute " modifié" au nom, puis retour accueil
    public function updateStatic($id)
    {
        $animal = Animal::findOrFail($id);

        if (!str_ends_with($animal->name, ' modifié')) {
            $animal->name .= ' modifié';
            $animal->save();
        }

        return redirect()->route('home');
    }

    // /animaux/supprimer/{id} → supprime, puis retour accueil
    public function delete($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect()->route('home');
    }
}
