<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // /animaux/mock → remplir la base avec les 4 animaux une seule fois
    public function addMockData()
    {
        if (Animal::count() > 0) {
            return 'Mock data already exists.';
        } else {
            $mockData = [
                [
                    'name' => 'Bella',
                    'species' => 'Chien',
                    'age' => 5,
                    'description' => 'Une labrador joueuse et affectueuse qui adore la compagnie.',
                    'photo' => 'images/animaux/bella.png',
                ],
                [
                    'name' => 'Luna',
                    'species' => 'Chat',
                    'age' => 3,
                    'description' => 'Une chatte calme et câline qui aime les endroits tranquilles.',
                    'photo' => 'images/animaux/luna.png',
                ],
                [
                    'name' => 'Max',
                    'species' => 'Chien',
                    'age' => 2,
                    'description' => 'Un jeune chiot plein d’énergie qui adore courir et jouer dehors.',
                    'photo' => 'images/animaux/max.png',
                ],
            ];

            foreach ($mockData as $data) {
                Animal::create($data);
            }

            return redirect()->route('home');
        }
    }

    // Fiche d’un animal
    public function show($id)
    {
        $animal = Animal::findOrFail($id);

        return view('pages.show', [
            'animal' => $animal,
        ]);
    }

    // /animaux/ajouter → ajoute Coquillette (si tu veux garder cette route)
    public function createStatic()
    {
        Animal::create([
            'name' => 'Coquillette',
            'species' => 'Chien',
            'age' => 3,
            'description' => 'Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer.',
            'photo' => 'images/animaux/coquillette.png',
        ]);

        return redirect()->route('home');
    }

    // /animaux/modifier/{id} → ajoute " modifié" au nom
    public function updateStatic($id)
    {
        $animal = Animal::findOrFail($id);

        if (! str_ends_with($animal->name, ' modifié')) {
            $animal->name .= ' modifié';
            $animal->save();
        }

        return redirect()->route('home');
    }

    // /animaux/supprimer/{id}
    public function delete($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect()->route('home');
    }
}
