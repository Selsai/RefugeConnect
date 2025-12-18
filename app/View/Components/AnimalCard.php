<?php

namespace App\View\Components;

use App\Models\Animal;
use Illuminate\View\Component;

class AnimalCard extends Component
{
    public Animal $animal;

    /**
     * Create a new component instance.
     */
    public function __construct(Animal $animal)
    {
        $this->animal = $animal;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.animal-card');
    }
}
